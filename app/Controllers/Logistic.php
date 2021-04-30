<?php namespace App\Controllers;

class Logistic extends BaseController
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
        $entity_model=model('App\Models\Model_logistic\Logistic',false);
        $data['cat_sales']=$entity_model->findAll();
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Logistic/Logistic_view',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}
}