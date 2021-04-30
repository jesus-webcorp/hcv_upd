<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = session();
		if( $session->get('logged_in') != null){
			return redirect()->to(base_url().'/inicio');
		}else{
			$data['title'] = "SOLIMAQ";
			echo view('Login/Signin_view' ,  $data);
		}
	}
}