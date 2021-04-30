<?php namespace App\Models;

use CodeIgniter\Model;

class Product extends Model{

    public function get_json_data($id){
        $Productos = $this->db->query("SELECT * from cat_products WHERE id='".$id."'");
		return $Productos->getResult();	
    }
    public function get_products(){
        $Productos = $this->db->query("SELECT * FROM cat_products");
        return $Productos->getResult();
    }

    public function create_product($datos){
        $table = $this->db->table('cat_products');
        $table->insert($datos);
    }

    public function update_product($data, $id){
        $Product = $this->db->table('cat_products');
        $Product->where('id', $id);
        $Product->update($data);
    }

    public function delete_product($id){
        $Product = $this->db->table('cat_products');
        $Product->where('id', $id);
        $Product->delete();
    }

}