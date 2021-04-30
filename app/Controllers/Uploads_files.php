<?php

namespace App\Controllers;

use App\Models\Access;

class uploads_files extends BaseController
{
        

	public function index()
	{
                helper('menu');
                $session = session();
                //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
                $data_fotter['scripts'] = ["dashboard.js"];
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
                echo view('Uploads_Files');
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);
	}

    public function guardar(){
        $request = \Config\Services::request();
        $files = $this->request->getFiles();
        $dir = $request->getPost('carpeta');
        $devuleve = uploads_file($files, $dir);
        var_dump($devuleve);

    }
}