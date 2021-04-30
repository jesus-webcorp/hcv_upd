<?php namespace App\Controllers;
require_once __DIR__ . '/vendor/autoload.php';

class Cotizacion_products extends BaseController
{
	public function detalles($id)
	{

        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();
    //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css","select2.min.css","jquery.dataTables.css"];

        //Vars

        //Database
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
        $data['cotizaciones']=$entity_model->find($id);
        $id_vendor=$data['cotizaciones']['id_user_vendor'];
        $id_client=$data['cotizaciones']['id_user_client'];


          /*Aqui hago el inner join de vendor*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('user_name');
        $builder->join('cotization', 'cotization.id_user_vendor = users.id');
        $query= $builder->getWhere(['cotization.id_user_vendor'=>$id_vendor]);
        $vendor=$query->getResultArray();
        $data['vendor']=$vendor[0]['user_name'];


        /*Aqui termino el inner join*/

        /*Aqui hago el inner join de client*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('cotization', 'cotization.id_user_client = users.id');
        $query= $builder->getWhere(['cotization.id_user_client'=>$id_client]);
        $client=$query->getResultArray();
        $data['client']=$client[0]['user_name'];

        /*Aqui termino el inner join*/

        /*Aqui es para recuperar los datos de los productos*/
        $entity_model_product=model('App\Models\Product',false);
        $data['cat_product']=$entity_model_product->get_products();
        $data['id_cotization']=$id;

        /*Aqui es cuando recupero los productos de la base*/
           $db      = \Config\Database::connect();
        $builder = $db->table('cotization_x_products');
        $builder->select('cotization_x_products.id,cat_products.name,cat_products.description,cotization_x_products.price,cotization_x_products.percent');
        $builder->join('cat_products', 'cat_products.id = cotization_x_products.id_cat_products');
        $builder->where('cotization_x_products.id_cotization',$id);
        $query3 = $builder->get();
        $data['exist_data']=$query3->getResultArray();
       
        /*Aqui termina*/
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Cotizacion_products/Cotizacion_products_view',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}



    public function get_products_json(){
        $id=$_POST['id'];
        $entity_model=model('App\Models\Product',false);
        $data=$entity_model->get_json_data($id);
        echo json_encode($data);
    }

    public function insert(){
         $entity_model=model('App\Models\Model_cotization_product\cotization_product',false);

        $id_cotization=$_POST['id_cotization'];
        $id_product=$_POST['id_product'];
        $price=$_POST['price_product'];
        $percent=$_POST['percent_insert'];
        for($i=0;$i<count($id_product);$i++){
            $data=[
                "id_cat_products"=>$id_product[$i],
                "id_cotization"=>$id_cotization,
                "price"=>$price[$i],
                "percent"=>$percent[$i]
            ];
            $entity_model->insert($data);

        }
         return redirect()->to(base_url().'/cotizaciones');
    }


    public function report_view($id){
        $response = service('response');
        $response->setHeader('Content-type',' application/pdf');
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($this->body($id));
        $mpdf->Output();
    }


    public function body($id){
        $db      = \Config\Database::connect();
        $builder = $db->table('cotization_x_products');
        $builder->select('*');
        $builder->join('cat_products', 'cat_products.id = cotization_x_products.id_cat_products');
        $builder->where('cotization_x_products.id_cotization',$id);
        $query = $builder->get();
        $data['query']=$query->getResultArray();

        /*En esta parte se muestra los datos del usuario que es vendedor*/
        $builder2 = $db->table('users');
        $builder2->select('*');
        $builder2->join('cotization', 'cotization.id_user_vendor = users.id');
        $builder2->where('cotization.id',$id);
        $query2 = $builder2->get();
        $data['vendor']=$query2->getResultArray();
        
        /*En esta parte termina*/

        /*En esta parte empieza el cliente*/
        $builder3 = $db->table('users');
        $builder3->select('*');
        $builder3->join('cotization', 'cotization.id_user_client = users.id');
        $builder3->where('cotization.id',$id);
        $query3 = $builder3->get();
        $data['client']=$query3->getResultArray();

        /*Termina*/
        //var_dump($data['client'][0]['id_user_client']);
        $id_client=$data['client'][0]['id_user_client'];
        $entity_model=model('App\Models\Model_user\User',false);
        $data['address_client']=$entity_model->get_clients_id($id_client);
        //var_dump($data['address_client'][0]->adress_country);
        return view('Cotizacion_products/Pdf',$data);
    }


    public function delete_producto_from_db(){
        $id=$_POST['id'];
        
        $entity_model=model('App\Models\Model_cotization_product\cotization_product',false);
        $entity_model->where('id', $id)->delete();
        $result = array('msg' =>"Se borro exitosamente", 'code'=>404);
        echo json_encode($result);

        
    }
}