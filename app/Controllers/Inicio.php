<?php

namespace App\Controllers;

use App\Models\Access;

class inicio extends BaseController
{
        public function __construct()
        {
        }

	public function index()
	{
                helper('menu');
                $session = session();
                //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
                $data_fotter['scripts'] = ["dashboard.js" ,"notificacion.js"];
                //Css Shets
                $data_header['styles'] = ["starlight.css"];
                //Vars
                $data_header['title'] = "Dashboard";
                $data_header['description'] = "Main Admin";
                $data_left['menu'] = get_menu();

                //var_dump($data_left['menu'] );

                echo view('header' , $data_header);
                echo view('left_panel' , $data_left);
                echo view('head_panel');
                echo view('dashboard');
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);
	}
}