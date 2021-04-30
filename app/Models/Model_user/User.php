<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class User extends Model {

		public function get_clients_data() {
			$Nombres = $this->db->query("SELECT * from clients_data");
			return $Nombres->getResult();
		}

		public function get_users_data() {
			$Nombres = $this->db->query("SELECT users.* , groups.name FROM users , groups WHERE groups.id=users.id_group");
			return $Nombres->getResult();
		}

		public function get_json_data($id){
			$Nombres = $this->db->query("SELECT * from clients_data WHERE id='".$id."'");
			return $Nombres->getResult();	
		}


		public function insert_user($datos){
			$Nombres = $this->db->table('users');
			$Nombres->insert($datos);
			$query_id="SELECT max(id) as id from users";
			$id=$this->db->query($query_id)->getResult();
			return $id;
		}


		public function insert_client($datos){
			$data = $this->db->table('clients_data');
			$data->insert($datos);
		}


		public function update_client($datos,$id){
			$data = $this->db->table('clients_data');
			$data->where('id',$id);
			$data->update($datos);
		}
		
		public function delete_client($id){
			$data = $this->db->table('clients_data');
			$data->where('id', $id);
			$data->delete();
		}


		/////////AQUI ES CUANDO USERS///////////
		public function get_json_users($id){
			$Nombres = $this->db->query("SELECT * from users WHERE id='".$id."'");
			return $Nombres->getResult();
		}


		public function groups(){
			$Nombres = $this->db->query("SELECT * from groups");
			return $Nombres->getResult();
		}

		public function get_clients_id($id){
			$data=$this->db->query("SELECT * FROM clients_data WHERE id_user='".$id."'");
			return $data->getResult();
		}


	}