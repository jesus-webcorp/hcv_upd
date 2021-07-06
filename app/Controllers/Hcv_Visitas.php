<?php
namespace App\Controllers;

class Hcv_Visitas extends BaseController
{
    public function index() {
        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];
        //Css Shets
        $data_header['styles'] = ["starlight.css"];
        //Vars
        $data_header['title'] = "Visitas";
        $data_header['description'] = "";
        $model = model('App\Models\groups_models\Crud_group_model');
        $data_left['menu'] = get_menu();
        echo view('header' , $data_header);
		echo view('left_panel',$data_left);
        echo view('head_panel');
		echo view('hcv/visitas');
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }

    private function do_curl($url_json){
        $response = array();
    
        $ch = curl_init($url_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $response = curl_exec($ch);
    
        curl_close($ch);
    
        return $response;
    }
}