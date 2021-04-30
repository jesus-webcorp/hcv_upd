<?php

    namespace App\Controllers;

    use App\Models\Access;

    class Empleados extends BaseController
    {
        
        public function index()
        {
            helper('menu');
            $session = session();
            $validar = $session->get('token');
            if($validar !=null){
                //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
                $data_fotter['scripts'] = ["dashboard.js"];
                //Css Shets
                $data_header['styles'] = ["starlight.css"];
                //Vars
                $data_header['title'] = "Dashboard";
                $data_header['description'] = "Main Admin";
                $data_left['menu'] = get_menu();

                        //var_dump($data_left['menu'] );

                //Model de vendedores//
                
                $model_empleados = model('App\Models\Model_Empleados\Model_empleados');
                $data_empleados['select_empleados'] = $model_empleados->select_empleados();
                $data_empleados['get_datos'] = $model_empleados->get_datos();

                //var_dump($data_vendedores);

                echo view('header' , $data_header);
                echo view('left_panel' , $data_left);
                echo view('head_panel');
                echo view('Empleados/Empleados_view',$data_empleados);
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);
            }else{
                return redirect()->to(base_url());
            }    
        }

        public function Get_group(){
            $request = \Config\Services::request();
            $id_user = $request->getPost('id');
            $model_empleado = model('App\Models\Model_Empleados\Model_empleados');
            $id_group = $model_empleado->get_rol($id_user);
            $get_id_group = $id_group[0]->id_group;
            $res = $model_empleado->get_name_rol($get_id_group);
            echo json_encode($res);


        }

        public function Agregar(){
            $request = \Config\Services::request();
            $datos_employs = [
                'salary' => $request->getPost('salario'),
                'job_description'    => $request->getPost('descripcion'),
                'id_user' => $request->getPost('user'),
    
            ];

            $model_empleados = model('App\Models\Model_Empleados\Model_empleados');
            $model_empleados->insert_employ($datos_employs);
            return redirect()->to(base_url('/empleados'));
            
        }

        public function Delete(){
            //var_dump($_POST);
            $request = \Config\Services::request();
            $id_empleado = $request->getPost('id_emp');
            $model_empleados = model('App\Models\Model_Empleados\Model_empleados');
            $model_empleados->delete_employe($id_empleado);
            return redirect()->to(base_url('/empleados'));
           
        }

        public function Get_actualizar(){
            $request = \Config\Services::request();
            $id_empleado = $request->getPost('id');
            $model_empleados = model('App\Models\Model_Empleados\Model_empleados');
            $datos = $model_empleados->get_update($id_empleado);
            echo json_encode($datos);
            
        }

        public function Update(){
            $request = \Config\Services::request();
            $idemploys = $request->getPost('id');
    
            $datos_employs = [
                'salary' => $request->getPost('salario'),
                'job_description'    => $request->getPost('descripcion'),
            ];
    
            
            $model_empleados = model('App\Models\Model_Empleados\Model_empleados');
            $model_empleados->actualizar_empleado($datos_employs, $idemploys);
            return redirect()->to(base_url('/empleados'));

        }
    }

?>    


