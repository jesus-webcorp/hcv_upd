<?php
namespace App\Controllers;
use App\Models\Model_login;
	
class Login extends BaseController
{
	public function verify_login()
	{
		$correo=$_POST['email'];
		$password=$_POST['password'];
		$log=new Model_login();
		$data['login']=$log->get_login($correo,$password);
		if(count($data['login'])>0){
			$hashed=$data['login'][0]->password;
			if(password_verify( $password , $hashed )){
				echo "Contraseña correcta";
				$session = session();
				$newdata = [
					'username'  => $data['login'][0]->user_name,
					'email'     => $data['login'][0]->email,
					'token'		=> $data['login'][0]->activation_token,
					'logged_in' => TRUE
				];
				$session->set($newdata);
				return redirect()->to(base_url().'/inicio'); 
			}else{
				$data['title'] = "RED MEDICA SEGURA";
				$data['error'] = "USUARIO O CONTRASEÑA INCORRECTOS";
				echo view('Login/Signin_view' ,  $data);
			}
		}else{
			$data['title'] = "SOLIMAQ";
			$data['error'] = "USUARIO O CONTRASEÑA INCORRECTOS";
			echo view('Login/Signin_view' ,  $data);
		}
		
	}

	public function sign_out()
	{
		$session = session();
		$session->destroy();
		return redirect()->to(base_url());
	}
}