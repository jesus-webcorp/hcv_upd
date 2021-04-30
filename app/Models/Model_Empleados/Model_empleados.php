<?php

    namespace App\Models;

    use CodeIgniter\Model;




    class Model_empleados extends Model
    {
        public function select_empleados()
        {
            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $builder->select('user_name, users.id');
            $builder->join('groups', 'groups.id = users.id_group');
            $builder->where("groups.name","Vendedor");
            $query = $builder->get();
            return $query->getResult();
        }

        public function get_rol($id_user)
        {
            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $builder->select('id_group');
            $builder->where("id",$id_user);
            $query = $builder->get();
            return $query->getResult();
          
        }

        public function get_name_rol($id_group){
            $db = \Config\Database::connect();
            $builder = $db->table('groups');
            $builder->select('name');
            $builder->where("id",$id_group);
            $query = $builder->get();
            return $query->getResult();



        }

        public function insert_employ($data){
            $empleado = $this->db->table('employs_data');
            $empleado->insert($data);
        }

        public function get_datos(){
            $db = \Config\Database::connect();
            $builder = $db->table('employs_data');
            $builder->select('employs_data.id, employs_data.salary, employs_data.job_description, users.user_name, groups.name');
            $builder->join('users', 'users.id = employs_data.id_user');
            $builder->join('groups', 'groups.id = users.id_group');
            $query = $builder->get();
            return $query->getResult();


        }

        public function delete_employe($id){
            $db = \Config\Database::connect();
            $builder = $db->table('employs_data');
            $builder->delete(['id' => $id]);


        }

        public function get_update($id){
            $db = \Config\Database::connect();
            $builder = $db->table('employs_data');
            $builder->select('employs_data.id, employs_data.salary, employs_data.job_description, users.user_name, groups.name');
            $builder->join('users', 'users.id = employs_data.id_user');
            $builder->join('groups', 'groups.id = users.id_group');
            $builder->where('employs_data.id', $id);
            $query = $builder->get();
            return $query->getResult();
            
        }

        public function actualizar_empleado($datos,$id){
           
                $db = \Config\Database::connect();
                $builder = $db->table('employs_data');
                $builder->set($datos);
                $builder->where('id', $id);
                $builder->update();
        
            

        }

        
    }


?>    