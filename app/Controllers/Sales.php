<?php namespace App\Controllers;

class Sales extends BaseController
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

        $data_header['title'] = "Estado de ventas";
        $data_header['description'] = "Lista de estados de ventas";

        /*Aqui empieza la consulta*/
         $db      = \Config\Database::connect();
        $builder = $db->table('cotization');
        $builder->select('users.user_name,id');
        $builder->join('users', 'users.id = cotization.id_user_vendor');
        $builder->where('cotization_x_products.id_cotization',$id);
        $query3 = $builder->get();
        $data['exist_data']=$query3->getResultArray();

        /*Aqui termina la consulta*/
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Sales/Sales_view',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}
}