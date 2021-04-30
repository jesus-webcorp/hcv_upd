<?php namespace App\Controllers;

class List_facturation extends BaseController
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
     	
     	$token=$session->get('token');
  
        /*Aqui hago el inner join de vendor*/
        $db      = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('*');
        $builder->where('activation_token',$token);
        $query= $builder->get();
        $data['data_retrieve']=$query->getResultArray();
		/*Aqui termino el inner join*/
		$id_user=$data['data_retrieve'][0]['id'];

		/*Aqui es cuando*/
		$db      = \Config\Database::connect();
        $builder = $db->table('cotization');
        $builder->select('*');
        $builder->where('id_user_vendor',$id_user);
        $builder->orWhere('id_user_client',$id_user);
        $query= $builder->get();
        $data['liga']=$query->getResultArray();
		/*Fin*/

        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Cotizacion_products/List',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}
}