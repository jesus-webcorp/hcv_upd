<?php
namespace App\Controllers;

class Groups extends BaseController
{
    public function index() {
        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];
        //Css Shets
        $data_header['styles'] = ["starlight.css"];
        //Vars
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $model = model('App\Models\groups_models\Crud_group_model');
        $data_groups['grupos'] = $model->findAll();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $data_left['menu'] = get_menu();
        echo view('header' , $data_header);
		echo view('left_panel',$data_left);
        echo view('head_panel');
		echo view('pages/crud_groups',$data_groups);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }

    public function addNewGroup()
    {
        //print_r($_POST);
        
        $data = array(
            'name' => $this->request->getpost('groupName'),
            'description' => $this->request->getpost('description'),
            'active'=> $this->request->getpost('status'),
            'c_date'=> $this->request->getpost('date')
        );
        $model = model('App\Models\groups_models\Crud_group_model');
        $model->insertNewGroup($data);
        // return redirect()->to(base_url().'/index.php'.'/examples');
    }

    
public function editGroup($id)
    {
        $request = \Config\Services::request();
        $nombre = $request->getPost('nombre');
    }

    public function Actualizar(){



        $request = \Config\Services::request();
        $id = $request->getPost('id');//ok
        $model = model('App\Models\groups_models\Crud_group_model');
        $sql = $model->find($id);

        echo json_encode($sql);

    }

    public function Adatos(){
        $request = \Config\Services::request();

        $id = $request->getPost('id');
        $nombre = $request->getPost('groupName');
        $descripcion = $request->getPost('description');
        $active = $request->getPost('active');
        $date = $request->getPost('c_date');
        

       

        $actualiza_grupos = [

            'name' => $nombre,
            'description'=> $descripcion,
            'active' => $active,
            'c_date' => $date
            
        ];

        $model = model('App\Models\groups_models\Crud_group_model');
        $model->update($id, $actualiza_grupos);
        // return redirect()->to(base_url().'/index.php'.'/examples'); 
    }

    public function Delete(){
        //var_dump($_POST);
        $request = \Config\Services::request();
        $id = $request->getPost('id');
        $model = model('App\Models\groups_models\Crud_group_model');
        $model->delete($id);
        // return redirect()->to(base_url().'/index.php'.'/examples');

    }
}

