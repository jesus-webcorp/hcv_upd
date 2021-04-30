<?php namespace App\Controllers;

class Cotizaciones extends BaseController
{
	public function index()
	{

        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();
    //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Vars

        //Database
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
        $entity_model_user=model('App\Models\Model_user\Table_user',false);
        $data['cotizaciones']=$entity_model->findAll();
        $data['users']=$entity_model_user->findAll();

        /*Aqui hago el inner join de vendor*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('cotization', 'cotization.id_user_vendor = users.id');
        $query= $builder->get();
        $data['vendor']=$query->getResultArray();

        /*Aqui termino el inner join*/

        /*Aqui hago el inner join de client*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('cotization', 'cotization.id_user_client = users.id');
        $query= $builder->get();
        $data['client']=$query->getResultArray();

        /*Aqui termino el inner join*/

        /*Aqui hago el inner join de client*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->join('clients_data', 'clients_data.id_user= users.id');
        $query= $builder->get();
        $data['clients']=$query->getResultArray();

        /*Aqui termino el inner join*/

        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Cotizacion/Cotizacion_views',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


    public function insert_cotizacion(){
        $id_user_vendor=$_POST['id_user_vendor'];
        $id_user_client=$_POST['id_user_client'];
        $global_percent=$_POST['global_percent'];
        $data=[
            "id_user_vendor"=>$id_user_vendor,
            "id_user_client"=>$id_user_client,
            "global_percent"=>$global_percent
        ];
        $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
        $entity_model->insert($data);
        return redirect()->to(base_url().'/cotizaciones');
    }

    public function get_cotizacion_json(){
                $id=$_POST['id'];
                $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
                $data=$entity_model->find($id);
                echo json_encode($data);
    }

    public function update_cotizaciones(){
        $id_user_vendor=$_POST['id_user_vendor_update'];
        $id_user_client=$_POST['id_user_client_update'];
        $global_percent=$_POST['global_percent_update'];
        $id=$_POST['id_cotizacion_update'];

         $data=[
            "id_user_vendor"=>$id_user_vendor,
            "id_user_client"=>$id_user_client,
            "global_percent"=>$global_percent
        ];

        $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
        $entity_model->update($id,$data);
        return redirect()->to(base_url().'/cotizaciones');
    }

    public function delete_cotizaciones(){
        $id=$_POST['id_delete'];
        $entity_model=model('App\Models\Model_cotizacion\Cotizacion',false);
        $entity_model->delete($id);
        return redirect()->to(base_url().'/cotizaciones');
    }
}