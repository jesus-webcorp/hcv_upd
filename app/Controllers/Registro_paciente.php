<?php namespace App\Controllers;

class Registro_paciente extends BaseController
{
	public function index()
	{
		$session = session();
		if( $session->get('logged_in') != null){
			return redirect()->to(base_url().'/inicio');
		}else{
			$data['title'] = "REGISTRO PACIENTE";
			echo view('Login/registro_paciente' ,  $data);
		}
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