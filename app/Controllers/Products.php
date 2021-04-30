<?php namespace App\Controllers;

class Products extends BaseController{

    public function index(){
        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();

        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];
        
        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Database
        $entity_producto=model('App\Models\Product');
        $entity_model=model('App\Models\session\Group_modules',false);

        //Esta es la funcion que llamas en la clase de Product
        $data['productos']= $entity_producto->get_products();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        echo view('header' , $data_header);
        echo view('left_panel' , $data_left);   
        echo view('head_panel');
		echo view('ProductViews/ProductList', $data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }

    public function crearProducto(){

        $file = $this->request->getFile('foto');

        if(!$file->isValid()){
            $datos = [
                "name" => $_POST['nombre'],
                "description"=> $_POST['descripcion'],
                "su_price"=> $_POST['precioSugerido'],
                "c_date" => [date_default_timezone_set('America/Mexico_City')]
            ];
    
            $productoModel = model('App\Models\Product');
            $productoModel->create_product($datos);
            return redirect()->to(base_url().'/products');
        } else{

            $newName = $file->getRandomName();
            $path = $file->move('../public/Images', $newName);

        $datos = [
            "name" => $_POST['nombre'],
            "description"=> $_POST['descripcion'],
            "media_path"=> $newName,
            "su_price"=> $_POST['precioSugerido'],
            "c_date" => [date_default_timezone_set('America/Mexico_City')]
        ];

        $productoModel = model('App\Models\Product');
        $productoModel->create_product($datos);
        return redirect()->to(base_url().'/products');
        }

        
    }

    public function actualizarProducto(){
        $request = \Config\Services::request();
        $id = $request->getPost('id_product');
        

        $file = $this->request->getFile('update_foto');
        

        if(!$file->isValid()){
            $data = [
                "name" => $_POST['update_name'],
                "description"=> $_POST['update_descripcion'],
                "su_price"=> $_POST['update_precioSugerido'],
                "c_date" => [date_default_timezone_set ('America/Mexico_City')]
            ];
            $productoModel = model('App\Models\Product');
            $productoModel->update_product($data,$id);
            return redirect()->to(base_url().'/products');
           
        }else{

            $newName = $file->getRandomName();
            $file->move('../public/Images', $newName);

            $data = [
                "name" => $_POST['update_name'],
                "description"=> $_POST['update_descripcion'],
                "media_path"=> $newName,
                "su_price"=> $_POST['update_precioSugerido'],
                "c_date" => [date_default_timezone_set ('America/Mexico_City')]
            ];
            $productoModel = model('App\Models\Product');
            $productoModel->update_product($data,$id);
            return redirect()->to(base_url().'/products');
           

        }
     
    }

    public function delete_product(){
        $id=$_POST['id_delete'];
       $productoModel=model('App\Models\Product');
        $productoModel->delete_product($id);
        return redirect()->to(base_url().'/products');

     }

     public function get_data(){
        $id=$_POST['id'];
        $productoModel=model('App\Models\Product');
        $data=$productoModel->get_json_data($id);
        echo json_encode($data);
     }
}