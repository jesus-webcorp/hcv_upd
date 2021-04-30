<?php

namespace App\Controllers;

class Proveedores extends BaseController
{

    public function index()
    {
        helper('menu');
        $session = session();
        $validar = $session->get('token');

        

        if($validar !=null){
            
           
            $data_left['menu'] = get_menu();
            //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
            $data_fotter['scripts'] = ["dashboard.js"];
    
            //Css Shets
            $data_header['styles'] = ["starlight.css"];
    
            //Vars
            $data_header['title'] = "Dashboard";
            $data_header['description'] = "Main Admin";
    
        
            //variables del modelo
    
            $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
            $data_producto['obtener_productos'] = $model_proveedor->obtener_productos();
            $data_producto['get_provedor'] = $model_proveedor->get_provedor();
           
           
    
            
    
            echo view('header', $data_header);
            echo view('left_panel', $data_left);
            echo view('head_panel');
            echo view('Proveedores/Proveedores_view', $data_producto);
            echo view('right_panel');
            echo view('fotter_panel', $data_fotter);

        }else{
            return redirect()->to(base_url());
        }

    }

    public function agregar()
    {

        //libreria codeigniter para recivir repuestas de metodo http

        $request = \Config\Services::request();
        $nombre = $request->getPost('nombre');
        $pais = $request->getPost('pais');
        $ciudad = $request->getPost('ciudad');
        $municipio = $request->getPost('municipio');
        $calle = $request->getPost('calle');
        $cp = $request->getPost('cp');
        $numero = $request->getPost('numero');
        $rfc = $request->getPost('rfc');


        $datos_proveedor = [
            'name_proveedor' => $nombre,
            'p_address_country'    => $pais,
            'p_address_city' => $ciudad,
            'p_address_county' => $municipio,
            'p_address_street' => $calle,
            'p_address_postal_code' => $cp,
            'p_address_number' => $numero,
            'rfc' => $rfc,
            'c_date' => date("Y-m-d h:i:s"),


        ];

        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->insert_proveedor($datos_proveedor);


        return redirect()->to(base_url('/proveedores'));
    }

    public function Actualizar()
    {

        $request = \Config\Services::request();
        $id_prove = $request->getPost('id_proveedor');
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $id_provedor = $model_proveedor->get_prove($id_prove);
        echo json_encode($id_provedor);
    }

    public function Adatos()
    {
        $request = \Config\Services::request();

        $nombre = $request->getPost('nombre');
        $pais = $request->getPost('pais');
        $ciudad = $request->getPost('ciudad');
        $municipio = $request->getPost('municipio');
        $calle = $request->getPost('calle');
        $cp = $request->getPost('cp');
        $numero = $request->getPost('numero');
        $rfc = $request->getPost('rfc');
        $id_prove = $request->getPost('id');

        $actualiza_provedor = [

            'name_proveedor' => $nombre,
            'p_address_country' => $pais,
            'p_address_city' => $ciudad,
            'p_address_county' => $municipio,
            'p_address_street' => $calle,
            'p_address_postal_code' => $cp,
            'p_address_number' => $numero,
            'rfc' => $rfc,
            'c_date' => date("Y-m-d h:i:s"),

        ];

        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->update_provedor($id_prove, $actualiza_provedor);
        return redirect()->to(base_url('/proveedores'));
    }

    public function Delete()
    {
        $request = \Config\Services::request();
        $id_proveedor = $request->getPost('id_prove');
        $id = (int)$id_proveedor;
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->delete_prove($id);
        return redirect()->to(base_url('/proveedores'));
    }

   

    public function asignar_product()
    {
       
        $request = \Config\Services::request();
        $id_prove = $request->getPost('idform');
        $productos = $request->getPost('productos');
        $precio = $request->getPost('precio');
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->insert_pxp($productos,$precio,$id_prove);
        return redirect()->to(base_url('/proveedores'));

    }

    public function Get_products()
    {
        $request = \Config\Services::request();
        $idprovedor = $request->getPost('id');
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $get_products = $model_proveedor->get_productos($idprovedor);
        echo json_encode($get_products);

      

    }

    public function Get_producto()
    {
      
        $request = \Config\Services::request();
        $idproducto = $request->getPost('id_producto');
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $get_produco = $model_proveedor->getproduct($idproducto);

        echo json_encode($get_produco);
    }

    public function Delete_producto(){
        
        $request = \Config\Services::request();
        $idproducto = $request->getPost('id_product');
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->borrar($idproducto);
        return redirect()->to(base_url('/proveedores'));

    }

    public function Productos_update(){
        $request = \Config\Services::request();

        $idproducto = $request->getPost('acid');

        $actualiza_pxp = [
            'supplier_price' =>$request->getPost('precio')
        ];

        
        $model_proveedor = model('App\Models\Model_proveedor\Model_proveedor');
        $model_proveedor->update_product($actualiza_pxp, $idproducto);
        return redirect()->to(base_url('/proveedores'));

    }
}
