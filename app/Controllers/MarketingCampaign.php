<?php namespace App\Controllers;

class MarketingCampaign extends BaseController{

    public function index(){
        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();

        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];
        
        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Database
        $entity_campaign=model('App\Models\Campaign');

        //Esta es la funcion que llamas en la clase de Product
        $data['campaigns']= $entity_campaign->get_campaigns();
        $data['products']=$entity_campaign->get_products();
        $data['employees']=$entity_campaign->get_employees();
        $data['get_data_join']=$entity_campaign->get_data_join();
        $data_header['title'] = "Campañas";
        $data_header['description'] = "Campañas de marketing";
        echo view('header' , $data_header);
        echo view('left_panel' , $data_left);   
        echo view('head_panel');
		echo view('MarketingCampaign_view/Campaign', $data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }

    public function createCampaign(){
            date_default_timezone_set('America/Mexico_City');
            $user_model = model('App\Models\session\users', false);
            $session = \Config\Services::session();
            $user_data = $user_model->select('id')->where('activation_token' , $session->get('token'))->first();
            
            $data = [
                "name" => $_POST['name'],
                "budget"=> $_POST['budget'],
                "date_start"=> $_POST['date_start'],
                "date_end" => $_POST['date_end'],
                "channel" => $_POST['channel'],
                "leads" => $_POST['leads'],
                "id_producto" => $_POST['id_producto'],
                "status" => $_POST['status'],
                "id_create_user" =>$user_data['id'],
                "id_asigned_user" => $_POST['id_asigned_user'],
                "c_date" => [date("d-m-Y h:i:s")],
                "total_cost" =>  $_POST['total_cost']
            ];
    
            $campaign = model('App\Models\Campaign');
            $campaign->create_campaign($data);
            return redirect()->to(base_url().'/marketing');
    }

    public function updateCampaign(){
        $request = \Config\Services::request();
        $id = $request->getPost('id_campaign');
        date_default_timezone_set('America/Mexico_City');

        $data = [
                "name" => $_POST['update_name'],
                "budget"=> $_POST['update_budget'],
                "date_start"=> $_POST['update_date_start'],
                "date_end" => $_POST['update_date_end'],
                "channel" => $_POST['update_channel'],
                "leads" => $_POST['update_leads'],
                "id_producto" => $_POST['update_id_producto'],
                "status" => $_POST['update_status'],
                "id_asigned_user" => $_POST['update_id_asigned_user'],
                "u_date" => [date("d-m-Y h:i:s")],
                "total_cost" =>  $_POST['update_total_cost']
            ];

            $campaign = model('App\Models\Campaign');
            $campaign->update_campaign($data,$id);
            return redirect()->to(base_url().'/marketing');
     
    }

     public function getData(){
        $id = $_POST['id'];
        $campaign = model('App\Models\Campaign');
        $data = $campaign->get_json_data($id);
        echo json_encode($data);
     }

     public function deleteCampaign(){
        $id=$_POST['id_delete'];
        $productoModel=model('App\Models\Campaign');
        $productoModel->delete_campaign($id);
        return redirect()->to(base_url().'/marketing');

     }
}