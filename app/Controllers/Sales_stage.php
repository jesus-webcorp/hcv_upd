<?php namespace App\Controllers;

class Sales_stage extends BaseController
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

        //Vars

        //Database
       
        $data_header['title'] = "Estado de ventas";
        $data_header['description'] = "Lista de estados de ventas";
        $entity_model=model('App\Models\Model_sales_stage\Sales_stage',false);

        $data['sales_stage']=$entity_model->findAll();
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Sales_stage/Sales_view',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}


        public function insert_sales(){
                $name=$_POST['name'];
                $description=$_POST['descripcion'];
                $data=[
                   "name"=>$name,
                   "description"=>$description
                ];
                $entity_model=model('App\Models\Model_sales_stage\Sales_stage',false);
                $entity_model->insert($data);
                return redirect()->to(base_url().'/sales_stage');
        }

        public function get_sales_json(){
                $id=$_POST['id'];
                $entity_model=model('App\Models\Model_sales_stage\Sales_stage',false);
                $data=$entity_model->find($id);
                echo json_encode($data);
        }

        public function update_sales_stage(){
                $name=$_POST['update_name'];
                $description=$_POST['update_descripcion'];
                $id=$_POST['id_sales'];
                $data=[
                   "name"=>$name,
                   "description"=>$description
                ];
                $entity_model=model('App\Models\Model_sales_stage\Sales_stage',false);
                $entity_model->update($id,$data);
                return redirect()->to(base_url().'/sales_stage');
        }

        public function delete_sales_stage(){
                $id=$_POST['id_delete'];
                $entity_model=model('App\Models\Model_sales_stage\Sales_stage',false);
                $entity_model->delete($id);
                return redirect()->to(base_url().'/sales_stage');
        }

}