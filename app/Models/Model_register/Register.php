<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Register extends Model {

		public function get_groups() {
			$Nombres = $this->db->query("SELECT * from groups");
			return $Nombres->getResult();
		}


		public function insert_user($datos){
			$Nombres = $this->db->table('users');
			$Nombres->insert($datos);
		}
		
	}