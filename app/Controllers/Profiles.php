<?php namespace App\Controllers;

class Profiles extends BaseController
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
        
        $entity_profiles=model('App\Models\Model_Profiles\Profiles');
        $data['grupos']= $entity_profiles->get_groups_data();
     
        $data_header['title'] = "PROFILES";
        $data_header['description'] = "TIPOS DE PAGOS";
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);   
        echo view('head_panel');
		echo view('Profiles_view/profiles', $data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}
    
  public function access()
	{
        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();
		//Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];
        
        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Database
        $idgroup=$_POST['id_group'];
        $entity_access=model('App\Models\Model_Profiles\Profiles');
        $data['access'] = $entity_access->get_access_data($idgroup);
        $data['modulos'] = $entity_access->get_modules_data();
        $data['id_group'] =$_POST['id_group'];
        $data_header['title'] = "ACCESS";
        $data_header['description'] = "TIPOS ACCESOS";

        // var_dump($data['access']);
        // var_dump($data['modulos']);
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);   
        echo view('head_panel');
		echo view('Profiles_view/access', $data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


    

       public function  get_data_access(){


            $model_payment=model('App\Models\Model_Profiles\Profiles');
            $data['access']=$model_payment->get_access_data($id);
       }
    
        public function update_access(){
            
            $id=$_POST['id_module'];
            $idgroup=$_POST['id_group'];
		
            if(!isset($_POST['create'])){
                $create="0";
            }else{
                $create=$_POST['create'];
            }            
        
            if(!isset($_POST['read'])){
                $read="0";
            }else{
                $read=$_POST['read'];
            }
            
            if(!isset($_POST['update'])){
                $update="0";
            }else{
                $update=$_POST['update'];
            }
            
            if(!isset($_POST['delete'])){
                $delete="0";
            }else{
               $delete=$_POST['delete'];
            }
            
           // var_dump($create, $read, $update, $delete);
            
               $datos = [
					"create_a" => $create,
					"read_a"=>$read,
                    "update_a"=>$update,
                    "delete_a"=>$delete
				];
            
        
                        
                $model_profiles= model('App\Models\Model_Profiles\Profiles');
               $validation=   $model_profiles->update_access($datos,$id);
                
            
            
            
                helper('menu');
                $session = session();
                $data_left['menu'] = get_menu();
                //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
                $data_fotter['scripts'] = ["dashboard.js"];

                //Css Shets
                $data_header['styles'] = ["starlight.css"];

                //Database
                $idgroup=$_POST['id_group'];
                $entity_access=model('App\Models\Model_Profiles\Profiles');
                $user_model = model('App\Models\session\users', false);
                $data['access']= $entity_access->get_access_data($idgroup);
                $data['modulos']= $entity_access->get_modules_data();
                    if($validation > 0){
                        $data['success'] = "Se ha registrado correctamente el cambio";
                    }else{
                        $data['error'] = "No se ha guardado ningun cambio";
                    }



                $data_header['title'] = "ACCESS";
                $data_header['description'] = "TIPOS ACCESOS";
                echo view('header' , $data_header);
                echo view('left_panel',$data_left); 
                echo view('head_panel');
                echo view('Profiles_view/access', $data);
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);




                 }
    
            public function insert_access(){
            
            $id=$_POST['id_module'];
            $idgroup=$_POST['id_group'];
		
            if(!isset($_POST['create'])){
                $create="0";
            }else{
                $create=$_POST['create'];
            }            
        
            if(!isset($_POST['read'])){
                $read="0";
            }else{
                $read=$_POST['read'];
            }
            
            if(!isset($_POST['update'])){
                $update="0";
            }else{
                $update=$_POST['update'];
            }
            
            if(!isset($_POST['delete'])){
                $delete="0";
            }else{
               $delete=$_POST['delete'];
            }
            
            //var_dump($create, $read, $update, $delete);
            
               $datos = [
                   "id_group" => $idgroup,
                   "id_module" => $id,
					"create_a" => $create,
					"read_a"=>$read,
                    "update_a"=>$update,
                    "delete_a"=>$delete
				];
            
        
                        
               $model_profiles= model('App\Models\Model_Profiles\Profiles');
               $validation=   $model_profiles->insert_access($datos,$id);
                
                
                
                      
                helper('menu');
                $session = session();
                $data_left['menu'] = get_menu();
                //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
                $data_fotter['scripts'] = ["dashboard.js"];

                //Css Shets
                $data_header['styles'] = ["starlight.css"];

                //Database
                $idgroup=$_POST['id_group'];
                $entity_access=model('App\Models\Model_Profiles\Profiles');
                $user_model = model('App\Models\session\users', false);
                $data['access']= $entity_access->get_access_data($idgroup);
                $data['modulos']= $entity_access->get_modules_data();
                    if($validation > 0){
                        $data['success'] = "Se ha registrado correctamente el cambio";
                    }else{
                        $data['error'] = "No se ha guardado ningun cambio";
                    }



                $data_header['title'] = "ACCESS";
                $data_header['description'] = "TIPOS ACCESOS";
                echo view('header' , $data_header);
                echo view('left_panel',$data_left); 
                echo view('head_panel');
                echo view('Profiles_view/access', $data);
                echo view('right_panel');
                echo view('fotter_panel' , $data_fotter);
        }
    
    
    
  
}