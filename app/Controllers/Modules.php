<?php 
namespace App\Controllers;

class Modules extends BaseController
{
	public function index()
	{
		//Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Database

        $modules_mod=model('App\Models\Model_modules\Modules_mod');
		$data['modules'] = $modules_mod->get_modules_data();
        $data['group']= $modules_mod-> get_group_modules();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $data_left['menu'] = get_menu();
        

        echo view('header' , $data_header);
		echo view('left_panel',$data_left);
        echo view('head_panel');
		echo view('Modules/Modules_views',$data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


    
    public function insert_module(){
        
        $id_group = $_POST['id_group'];
        //$id_grupo=$_POST['id_group'];
		$name=$_POST['name'];
		$description=$_POST['description'];
		$controller=$_POST['controller'];
        $show = $_POST['visible'];
        //$active = 0;

        // $phase=11;
        //$active=1;

		$datos = [
                    "id_group_module"=>$id_group,
                    "name" => $name,
					"description" => $description,
                    //"id_group" => $id_grupo
					"controller" => $controller,
                    //"phase" => $phase,
                    //"active" => $active,
                    "show_in_menu"=>$show
				];
		$model_modules=model('App\Models\Model_modules\Modules_mod');
		$model_modules->insert_module($datos);
		return redirect()->to(base_url().'/modules');
	}

    public function update_module(){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $id=$_POST['id_update'];
        $show = $_POST['visible'];
        $active = $_POST['activo'];
        $id_group = $_POST['category'];
        $entity=model('App\Models\Model_modules\Modules_mod');

        $data=[
            "name"=>$name,
            "description"=>$description,
            "show_in_menu"=>$show,
            "active"=>$active,
            "id_group_module" =>$id_group
        ];


        $entity->update_modules($data,$id);
        
        return redirect()->to(base_url().'/modules');
        

    }

    public function get_data_json(){
        $id=$_POST['id'];
        $entity=model('App\Models\Model_modules\Modules_mod');
        $data=$entity->get_json($id);
        echo json_encode($data);
    
    }

    public function delete_module(){
        $id=$_POST['id_delete'];
        $entity=model('App\Models\Model_modules\Modules_mod');
        $entity->delete_module($id);
        return redirect()->to(base_url().'/modules');
    }


    
 

}
