<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Payments extends Model {
        
        public function get_access_data($idgroup){
			$Modules = $this->db->query("SELECT * from access WHERE id_group='".$idgroup."' " );
			return $Modules->getResult();	
		}
        
        public function get_groups_data() {
			$Nombres = $this->db->query("SELECT * from groups");
			return $Nombres->getResult();
		}
        
        public function get_modules_data() {
			$Nombres = $this->db->query("SELECT * from modules");
			return $Nombres->getResult();
		}
  
        
        public function update_access($datos,$id){
			$data = $this->db->table('access');
			$data->where('id_module', $id);
			$data->update($datos);
            $validation = $this->db->affectedRows();
            return $validation;
		}
        
        public function insert_access($datos, $id){
			$data = $this->db->table('access');
			$data->insert($datos);
            $validation = $this->db->affectedRows();
            return $validation;
		}
        
        
    
    
    
    }