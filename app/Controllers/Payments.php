<?php namespace App\Controllers;

class Payments extends BaseController
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

        //Database
        $entity_payment=model('App\Models\Model_Payments\Payments');
        $data['pagos']= $entity_payment->get_payments_data();
        $data_header['title'] = "PAGOS";
        $data_header['description'] = "TIPOS DE PAGOS";
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);   
        echo view('head_panel');
		echo view('Payments_view/payments', $data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


	public function insert_payment(){
		$name=$_POST['name'];
		$description=$_POST['descripcion'];
		$datos = [
					"name" => $name,
					"description"=>$description
				];
		$model_payment=model('App\Models\Model_Payments\Payments');
		$model_payment->insert_payment($datos);
		return redirect()->to(base_url().'/payments');
	}
    
    
        public function delete_payment(){
        $id=$_POST['id_delete'];
        $model_payment=model('App\Models\Model_Payments\Payments');
        $model_payment->delete_payment($id);
        return redirect()->to(base_url().'/payments');

     }
    
    public function get_data_json(){
        $id=$_POST['id'];
        $model_payment=model('App\Models\Model_Payments\Payments');
        $data=$model_payment->get_json_data($id);
        echo json_encode($data);
     }
    
        public function update_payment(){
        $id=$_POST['id_payment'];
        $name=$_POST['update_name'];
		$description=$_POST['update_descripcion'];
		$datos = [
					"name" => $name,
					"description"=>$description
				];
                        $model_payment=model('App\Models\Model_Payments\Payments');
                        $model_payment->update_payment($datos,$id);
                        return redirect()->to(base_url().'/payments');
         }
    
    
    
  
}