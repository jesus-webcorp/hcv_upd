<?php

namespace App\Controllers;



class Ventas extends BaseController
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

                //consulatas
                $user_model = model('App\Models\session\users', false);
                $user_id = $user_model->select('id')->where('activation_token' , $session->get('token'))->find();
                $id_user = $user_id[0]["id"];

                $id_group = $user_model->select('id_group')->where('activation_token' ,$session->get('token'))->find();
                $group_id = $id_group[0]["id_group"];

                //ventas

                $ventas_model = model('App\Models\Model_ventas\Model_ventas');
                $data_ventas['get_ventas'] = $ventas_model->get_ventas($id_user,$group_id);

                //contratos
                $data_ventas['get_contratos'] = $ventas_model->get_contratos();

                echo view('header' , $data_header);
                echo view('left_panel' , $data_left);
                echo view('head_panel');
                echo view('Ventas/Ventas_view',$data_ventas);
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);


                
                //var_dump(TAXT);
	}

    public function get_precio(){

        $session = session();

        $request = \Config\Services::request();
        $id = $request->getPost('id');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $precios = $ventas_model->get_precios($id);

        $array = array();
        foreach ($precios as $total){
            $porcentaje = $total->price * $total->percent / 100; 
            $total_producto = $total->price - $porcentaje;
            array_push($array,$total_producto);
        }
        
        $suma = array_sum($array);
        $user_model = model('App\Models\session\users', false);
        $user_id = $user_model->select('id')->where('activation_token' , $session->get('token'))->first();

        //var_dump($user_id);

        $datos_venta = [
            'id_cotizacion' => $id,
            'id_user_vendor' => $user_id,
            'subtotal' => $suma,
            'tax' => TAXT,
            'c_date' => date("Y-m-d h:i:s"),


        ];



        $response = $ventas_model->insert_venta($datos_venta);
        echo json_encode($response);
    

    }

  
    public function uploadfiles(){
        $request = \Config\Services::request();
        $files = $this->request->getFiles();
        $id_sale = $request->getPost('id');
        $dir = "Sales";
        $devuleve = uploads_file($files, $dir);
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $ventas_model->upload($devuleve,$id_sale);
        return redirect()->to(base_url('/ventas'));




        //var_dump($devuleve);
        
    }

    /*public function get_tabla(){
        $request = \Config\Services::request();
        $id_sale = $request->getPost('id_sales');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $data_tabla = $ventas_model->get_data($id_sale);
        echo json_encode($data_tabla);


    }*/

    public function delete_venta(){
        $request = \Config\Services::request();
        $id_sale = $request->getPost('id_sale');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $ventas_model->delete_sale($id_sale);
        return redirect()->to(base_url('/ventas'));

        

    }

    public function  tabla_detalle(){

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

        $request = \Config\Services::request();
        $id_sale = $request->getPost('id_venta');

        //var_dump($id_sale);

        //Ventas
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $data_ventas['get_sale'] = $ventas_model->get_sale($id_sale);

        //Archivos
        $data_ventas['get_data'] = $ventas_model->get_data($id_sale);

        //Categoria Pagos 
        $data_ventas['get_cat_payments'] = $ventas_model->get_cat_payments();

        //Datos pagos
        $data_ventas['get_payments'] = $ventas_model->get_payments($id_sale);

        //Datos Productos 

        $data_ventas['get_productos'] = $ventas_model->get_productos($id_sale);

        //Datos Header 
        $data_ventas['get_header'] = $ventas_model->get_header($id_sale);

        //Dato Vendedor
        $user_model = model('App\Models\session\users', false);
        $user_id = $user_model->select('id')->where('activation_token' , $session->get('token'))->find();
        $id_user = $user_id[0]["id"];

        $user_name = $user_model->select('user_name')->where('id' , $id_user)->find();
        $vendedor = $user_name[0]["user_name"];

        $data_ventas['vendedor'] = $vendedor;
        
    
        //var_dump($data_left['menu'] );

        echo view('header' , $data_header);
        echo view('left_panel' , $data_left);
        echo view('head_panel');
        echo view('Ventas/Detalle_view',$data_ventas);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);


    }

    public function agregar_pago(){
        
        $request = \Config\Services::request();
        $datos_pago = [
            'id_sales' => $request->getPost('id'),
            'amount' => $request->getPost('monto'),
            'status' => $request->getPost('status'),
            'c_date' => date("Y-m-d h:i:s"),
            'id_cat_payments' => $request->getPost('id_pago')
        ];

        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $id_pago = $ventas_model->insert_payments($datos_pago);

        $files = $this->request->getFiles();
        $dir = "Payments";
        $devuleve = uploads_file($files, $dir);
        $ventas_model->files_pagos($devuleve,$id_pago);
        return redirect()->to(base_url('/ventas'));

    }

    public function get_pago(){
        $request = \Config\Services::request();
        $id_payment = $request->getPost('id_payment');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $data_pago = $ventas_model->data_pago($id_payment);
        //var_dump($data_pago);
        echo json_encode($data_pago);
    }

    public function update_pago(){
        var_dump($_POST);
        $request = \Config\Services::request();
        $idpayment = $request->getPost('id_payment');
        
        $datos_pago = [
            'amount' => $request->getPost('monto'),
            'status' => $request->getPost('status'),
            'c_date' => date("Y-m-d h:i:s"),
            'id_cat_payments' => $request->getPost('id_pago')
        ];

        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $ventas_model->actualizar_payments($datos_pago,$idpayment);
        return redirect()->to(base_url('/ventas'));


    }

    public function delete_pago(){

        $request = \Config\Services::request();
        $id_payment = $request->getPost('id_pagos');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $ventas_model->delete_payments($id_payment);
        return redirect()->to(base_url('/ventas'));


    }

    public function delete_files(){
        $request = \Config\Services::request();
        $id_file = $request->getPost('id_file');
        $ventas_model = model('App\Models\Model_ventas\Model_ventas');
        $path = $ventas_model->path($id_file);
        $ruta = $path[0]->path;
        unlink($ruta);
        $ventas_model->delete_file($id_file);
        return redirect()->to(base_url('/ventas'));

    }


   


}