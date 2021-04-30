<?php namespace App\Controllers;
require_once __DIR__ . '/vendor/autoload.php';

class Contratos extends BaseController
{

	public function index(){
		helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();

        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Database
        $entity_producto=model('App\Models\Product');
        $entity_model=model('App\Models\session\Group_modules',false);
        $entity_model_selected=model('App\Models\Model_selected_button\selected',false);
        //Esta es la funcion que llamas en la clase de Product
        $data['productos']= $entity_producto->get_products();
        $data['selected']=$entity_model_selected->findAll();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";


        echo view('header' , $data_header);
        echo view('left_panel' , $data_left);
        echo view('head_panel');
		echo view('Contratos/Wyswyg',$data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}

	public function insert_wyswyg(){
		helper('menu');
		$session = session();
		$token=$session->token;
		$entity_model=model('App\Models\Model_user\Table_user',false);
		$find_id=$entity_model->where('activation_token', $token)->findAll();
		$id_user=$find_id[0]['id'];

		$name=$_POST['name'];

		$text=$_POST['txt'];

        //var_dump($array);
		$entity_model_wyswyg=model('App\Models\Model_contracts\Wyswyg',false);

		$data=[
			'id_user'=>$id_user,
			'name'=>$name,
			'wyswyg'=>$text,

		];

		$entity_model_wyswyg->insert($data);
		return redirect()->to(base_url().'/contratos/get_table');

	}


	//Tabla para visualizar los contratos
	public function get_table(){
		helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();

        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        /*Aqui es cuando recupero id del usuario*/
        $session = session();
        $token=$session->token;
        $entity_model=model('App\Models\Model_user\Table_user',false);
        $find_id=$entity_model->where('activation_token', $token)->findAll();
        $id_user=$find_id[0]['id'];


        //Database

        $db      = \Config\Database::connect();
        $builder = $db->table('contracts');
        $builder->select('contracts.id,contracts.id_user,users.user_name,users.email,contracts.wyswyg,contracts.name,contracts.description');
        $builder->join('users', 'users.id = contracts.id_user');
        $builder->where('contracts.id_user',$id_user);
        $query = $builder->get();
        $data['contratos']=$query->getResultArray();

        $data_header['title'] = "Listado de Contratos";
        $data_header['description'] = "Administracion de contratos";



        //var_dump($data['contratos']);
        echo view('header' , $data_header);
        echo view('left_panel' , $data_left);
        echo view('head_panel');
		echo view('Contratos/table',$data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}



	//Para ver las siguientes pdfs
	   public function report_view($id){
        $response = service('response');
        $response->setHeader('Content-type',' application/pdf');
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($this->body($id));
        $mpdf->Output();
    }


    public function body($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('contracts');
        $builder->select('*');
        $builder->join('users', 'users.id = contracts.id_user');
        $builder->where('contracts.id',$id);
        $query = $builder->get();
        $data['query']=$query->getResultArray();

        /*
            Aqui es cuando realiza la sustitucion de variables

        */

        $old= array("{name}","{rfc}");
        $new= array($data['query'][0]['name'],$data['query'][0]['rfc']);
        $array=str_replace($old,$new,$data['query'][0]['wyswyg']);
        $data['body']=$array;

        //var_dump($array);


        return view('Contratos/pdf',$data);
    }



    /*Para borrar contratos*/

    public function delete_contrato(){
        $id=$_POST['id_delete'];
        $entity_model_wyswyg=model('App\Models\Model_contracts\Wyswyg',false);
        $entity_model_wyswyg->delete($id);
        return redirect()->to(base_url().'/contratos/get_table');

    }


    public function generar_contrato($id_producto,$id_venta){

        $producto=$id_producto; //id de contrato
        $id_venta=$id_venta;

        $db      = \Config\Database::connect();
        $builder = $db->table('sales');
        $builder->select('*');
        $builder->join('users', 'users.id = sales.id_user_vendor');
        $builder->join('cotization', 'cotization.id = sales.id_cotizacion');
        $builder->where('sales.id',$id_venta);
        $query = $builder->get();
        $data['query']=$query->getResultArray();
        //recuperamos el id que corresponde al cliente

        $id_client=$data['query'][0]["id_user_client"];

        $entity_model_wyswyg=model('App\Models\Model_contracts\Wyswyg',false);
        $entity_model_user=model('App\Models\Model_user\Table_user',false);
        $entity_model_client=model('App\Models\Model_clients_data\clients',false);
        $get_wyswyg=$entity_model_wyswyg->where('id',$producto)->first();

        $get_client=$entity_model_user->where('id',$id_client)->first();

        $get_rfc=$entity_model_client->where('id_user',$get_client['id'])->first();

        $venta=$data['query'][0]['subtotal'];
        //name del cliente
        $name_client=$get_client['user_name'];
        $wys=$get_wyswyg['wyswyg'];
        $data['name_client']=$name_client;
        $data['venta']=$venta;
        $data['wyswyg']=$wys;
        $data['rfc']=$get_rfc['rfc'];


       $this->selected_contract_view($data);


      // echo json_encode($this->body_view($data));
    }


    public function selected_contract($data){
         $entity_model_file=model('App\Models\Model_files_sales\files',false);
         $name_archivo=$data['id_venta'].rand(5, 15).date("d").date("m").date("Y");
        $response = service('response');
        $response->setHeader('Content-type',' application/pdf');
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($this->body_contract($data));
        $mpdf->Output('/var/www/html/solimaq/public/Contratos/'.$name_archivo.'.pdf','F');

        $data=[
         'sales_id'=>$data['id_venta'],
         'path'=>"../public/Contratos/".$name_archivo.".pdf"
        ];

        $entity_model_file->insert($data);
        echo json_encode(getcwd()."/Contratos/archivo.pdf");
    }


    public function selected_contract_view($data){
        $response = service('response');
        $response->setHeader('Content-type',' application/pdf');
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($this->body_contract($data));
        $mpdf->Output();
        
    }



    public function body_contract($data){
        return view('Contratos/selected_contract',$data);
    }

    public function body_view($data){
         return view('Contratos/selected_contract',$data);
    }





    /*Metodo para guardar el archivo en la base de datos*/

    public function generar_get(){

         $producto=$_POST['productos']; //id de contrato
         $id_venta=$_POST['id_venta'];

        $db      = \Config\Database::connect();
        $builder = $db->table('sales');
        $builder->select('*');
        $builder->join('users', 'users.id = sales.id_user_vendor');
        $builder->join('cotization', 'cotization.id = sales.id_cotizacion');
        $builder->where('sales.id',$id_venta);
        $query = $builder->get();
        $data['query']=$query->getResultArray();
        //recuperamos el id que corresponde al cliente

        $id_client=$data['query'][0]["id_user_client"];

        $entity_model_wyswyg=model('App\Models\Model_contracts\Wyswyg',false);
        $entity_model_user=model('App\Models\Model_user\Table_user',false);
        $entity_model_client=model('App\Models\Model_clients_data\clients',false);
        $get_wyswyg=$entity_model_wyswyg->where('id',$producto)->first();

        $get_client=$entity_model_user->where('id',$id_client)->first();

        $get_rfc=$entity_model_client->where('id_user',$get_client['id'])->first();

        $venta=$data['query'][0]['subtotal'];
        //name del cliente
        $name_client=$get_client['user_name'];
        $wys=$get_wyswyg['wyswyg'];
        $data['name_client']=$name_client;
        $data['venta']=$venta;
        $data['wyswyg']=$wys;
        $data['rfc']=$get_rfc['rfc'];
        $data['id_venta']=$id_venta;


        $this->selected_contract($data);

    }

}