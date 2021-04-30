<?php namespace App\Controllers;

class Table_clients extends BaseController
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
        $entity=model('App\Models\Model_user\User');
        $data['clients']=$entity->get_clients_data();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\session\Group_modules',false);
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Table/Table_views',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}

}