<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
        $data_left['menu'] = get_menu();
        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Vars

        //Database
        $entity=model('App\Models\Model_user\User');
        $data['users']=$entity->get_users_data();
        $data['groups']=$entity->groups();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\session\Group_modules',false);
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Users/Users_table',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
	}

    public function new_user(){
        helper('menu');
        $session = session();
        $data_left['menu'] = get_menu();

		//Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];
        
        //Database
        $entity=model('App\Models\Model_register\Register');
		$data['groups']=$entity->get_groups();
        $data_header['title'] = "NUEVO USUARIO";
        $data_header['description'] = "REGISTRO DE USUARIO";
        $entity_model=model('App\Models\session\Group_modules',false);
        echo view('header' , $data_header);
		echo view('left_panel',$data_left);
        echo view('head_panel');
		echo view('Users/Users_view',$data);
		echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }


    public function table_clients(){
        //Js Scripts ['script1.js' , 'script2.js' , 'script3.js']
        $data_fotter['scripts'] = ["dashboard.js"];

        //Css Shets
        $data_header['styles'] = ["starlight.css"];

        //Vars

        //Database
        $entity=model('App\Models\Model_register\Register');
        $data['groups']=$entity->get_groups();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\session\Group_modules',false);
        $data_left['menu']=$entity_model->find();
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Users/Users_view',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }

        public function insert_client(){
                /*$model_register=model('App\Models\Model_register\Register');
                $model_register->insert_user($datos);
                return redirect()->to(base_url().'/register');*/
                $model_user=model('App\Models\Model_user\User');
                $username=$_POST['username'];
                $password=$_POST['password'];
                $password_hashed=password_hash($password,PASSWORD_DEFAULT);
                $about=$_POST['about'];
                $email=$_POST['email'];
                $id_group=$_POST['id_group'];

                $datos = [
                                        "user_name" => $username,
                                        "c_date"=>date("Y-m-d h:i:s"),
                                        "password" => $password_hashed,
                                        "email"=>$email,
                                        "activation_token"=>"",
                                        "id_group"=>$id_group,
                                        "about" => $about,
                                        "active"=>0
                                ];


                if($id_group==1){
                     $name_client=$_POST['name_client'];
                     $rfc=$_POST['rfc'];
                     $address_country=$_POST['address_country'];
                     $address_county=$_POST['addres_county'];
                     $street=$_POST['address_street'];
                     $postal=$_POST['address_postal_code'];
                     $number=$_POST['address_number'];
                     $city=$_POST['addres_city'];


        
                     $last_id['id']=$model_user->insert_user($datos);
                     $id_user=$last_id['id'][0]->id;

                     $datos = [
                                        "name" => $name_client,
                                        "rfc"=>$rfc,
                                        "adress_country" => $address_country,
                                        "adress_county"=>$address_county,
                                        "adress_street"=>$street,
                                        "adress_postal_code"=>$postal,
                                        "adress_number" => $number,
                                        "adress_city"=>$city,
                                        "id_user"=>$id_user
                                ];
                     $model_user->insert_client($datos);
                     return redirect()->to(base_url().'/users/table_users');
             }else{
                     $model_user->insert_user($datos);
                     return redirect()->to(base_url().'/users/table_users');
             }
     }


     public function get_data_json(){
        $id=$_POST['id'];
        $model_user=model('App\Models\Model_user\User');
        $data=$model_user->get_json_data($id);
        echo json_encode($data);
     }


     public function update_client(){
                     $name_client=$_POST['update_name'];
                     $rfc=$_POST['update_rfc'];
                     $address_country=$_POST['update_adress_country'];
                     $address_county=$_POST['update_adress_county'];
                     $street=$_POST['update_adress_street'];
                     $postal=$_POST['update_adress_postal_code'];
                     $number=$_POST['update_number'];
                     $city=$_POST['update_adress_city'];
                     $id=$_POST['id'];

            $datos = [
                                        "name" => $name_client,
                                        "rfc"=>$rfc,
                                        "adress_country" => $address_country,
                                        "adress_county"=>$address_county,
                                        "adress_street"=>$street,
                                        "adress_postal_code"=>$postal,
                                        "adress_number" => $number,
                                        "adress_city"=>$city
                                ];
                    $model_user=model('App\Models\Model_user\User');
                    $model_user->update_client($datos,$id);
                    return redirect()->to(base_url().'/table_clients');
     }


     public function delete_client(){
        $id=$_POST['id_delete'];
        $model_user=model('App\Models\Model_user\User');
        $model_user->delete_client($id);
        return redirect()->to(base_url().'/table_clients');

     }


     


    public function Table_users()
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
        $entity=model('App\Models\Model_user\User');
        $data['users']=$entity->get_users_data();
        $data['groups']=$entity->groups();
        $data_header['title'] = "Dashboard";
        $data_header['description'] = "Main Admin";
        $entity_model=model('App\Models\session\Group_modules',false);
        echo view('header' , $data_header);
        echo view('left_panel',$data_left);
        echo view('head_panel');
        echo view('Users/Users_table',$data);
        echo view('right_panel');
        echo view('fotter_panel' , $data_fotter);
    }


    public function get_users_json(){
        $id=$_POST['id'];
        $model_user=model('App\Models\Model_user\User');
        $data=$model_user->get_json_users($id);
        echo json_encode($data);
         }


         public function update_users(){
                $name=$_POST['update_name'];
                $correo=$_POST['email_update'];
                $password=$_POST['password_update'];
                $about=$_POST['update_about'];
                $id=$_POST['id_users'];
                $id_groups=$_POST['id_groups'];
                $hashed_password= password_hash($password,PASSWORD_DEFAULT);

                $model_user=model('App\Models\Model_user\Table_user');
        

                if($password=='12345'){
                    $data=[
                        "user_name"=>$name,
                        "email"=>$correo,
                        "about"=>$about,
                        "id_group"=>$id_groups
                    ];

                    $model_user->update($id,$data);
                    return redirect()->to(base_url().'/table_users');
                }else{
                  $data=[
                        "user_name"=>$name,
                        "email"=>$correo,
                        "about"=>$about,
                        "id_group"=>$id_groups,
                        "password"=>$hashed_password
                    ];
                    $model_user->update($id,$data);
                    return redirect()->to(base_url().'/table_users');
                }

         }


         public function delete_users(){
               $id=$_POST['id_delete'];
               $model_user=model('App\Models\Model_user\Table_user');
               $model_user->delete($id);
               return redirect()->to(base_url().'/table_users');
         }



}