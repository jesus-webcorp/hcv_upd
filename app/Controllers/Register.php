<?php namespace App\Controllers;

class Register extends BaseController
{
	public function index()
	{
		//Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Vars

        //Database
        $entity=model('App\Models\Model_register\Register');
		$data['groups']=$entity->get_groups();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\session\Group_modules',false);
        $data_left['menu']=$entity_model->find();
        echo view('header' , $data_header);
		echo view('left_panel',$data_left);
        echo view('head_panel');
		echo view('Register/Register_view',$data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


	public function insert_user(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$password_hashed=password_hash($password,PASSWORD_DEFAULT);
		$about=$_POST['about'];
		$email=$_POST['email'];
		$id_group=$_POST['id_group'];
		date_default_timezone_set('America/Mexico_City');
		$datos = [
					"user_name" => $username,
					"c_date"=>date("Y-m-d h:i:s"),
					"password" => $password_hashed,
					"email"=>$email,
					"activation_token"=>"",
					"id_group"=>$id_group,
					"about" => $about,
					"active"=>0
				];
		$model_register=model('App\Models\Model_register\Register');
		$model_register->insert_user($datos);
		return redirect()->to(base_url().'/register');
	}
}