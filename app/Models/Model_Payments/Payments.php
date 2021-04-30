<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Payments extends Model {
        
        public function get_json_data($id){
			$Nombres = $this->db->query("SELECT * from cat_payments WHERE id='".$id."'");
			return $Nombres->getResult();	
		}
        
        public function get_payments_data() {
			$Nombres = $this->db->query("SELECT * from cat_payments");
			return $Nombres->getResult();
		}
        
        public function insert_payment($datos){
			$table = $this->db->table('cat_payments');
			$table->insert($datos);
		}
        
        
        public function delete_payment($id){
			$data = $this->db->table('cat_payments');
			$data->where('id', $id);
			$data->delete();
		}
        
        
        public function update_payment($datos,$id){
			$data = $this->db->table('cat_payments');
			$data->where('id',$id);
			$data->update($datos);
		}
    
    
    
    }