<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Modules_mod extends Model {

        public function get_modules_data() {
			$Nombres = $this->db->query("SELECT * from modules");
			return $Nombres->getResult();
		}

		public function get_group_modules(){
			$Nombres = $this->db->query("SELECT * from group_modules");
			return $Nombres->getResult();
		}

		public function insert_module($datos){
			$Nombres = $this->db->table('modules');
			$Nombres->insert($datos);
			
		}

		public function update_modules($datos,$id){
			
			$data = $this->db->table('modules');
			$data->where('id',$id);
			$data->update($datos);
		}
		
		public function delete_module($id){
			$data = $this->db->table('modules');
			$data->where('id', $id);
			$data->delete();
		}


		public function get_json($id){
			/*
			$Nombres = $this->db->query("SELECT * from modules WHERE id='".$id."'");
			return $Nombres->getResult();	*/

			$data = $this->db->query("SELECT modules.*, group_modules.name as Category, group_modules.id as idgroup  from modules, group_modules 
			where modules.id = '".$id."'
			and modules.id_group_module = group_modules.id;");
			return $data->getResult();

			
		}

		
	}

	