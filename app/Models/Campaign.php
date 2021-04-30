<?php namespace App\Models;

use CodeIgniter\Model;

class Campaign extends Model{

    public function get_json_data($id){
        $Campaigns = $this->db->query("SELECT  marketing_campaigns.*, DATE_FORMAT(date_start, '%Y-%m-%d') as fecha_inicio,
        DATE_FORMAT(date_end, '%Y-%m-%d') as fecha_final,
        users.user_name, 
        cat_products.name as nameproducto from marketing_campaigns 
        inner JOIN users ON users.id = marketing_campaigns.id_create_user   
        inner JOIN cat_products  on cat_products.id = marketing_campaigns.id_producto where marketing_campaigns.id=$id");
		return $Campaigns->getResult();	
    }

    public function get_data_join(){
        $Campaigns = $this->db->query("SELECT mc.*, us.user_name, p.name AS productname FROM cat_products AS p INNER JOIN marketing_campaigns AS mc
        ON p.id=mc.id_producto
        INNER JOIN users AS us
        ON us.id=mc.id_asigned_user ");
		return $Campaigns->getResult();	
    } 
    public function get_campaigns(){
        $Campaigns = $this->db->query("SELECT * FROM marketing_campaigns");
        return $Campaigns->getResult();
    }

    public function get_products(){
        $Campaigns = $this->db->query("SELECT * FROM cat_products");
        return $Campaigns->getResult();
    }

    public function get_employees(){
        $Campaigns = $this->db->query("SELECT * FROM users WHERE id_group=3");
        return $Campaigns->getResult();
    }

    public function create_campaign($data){
        $table = $this->db->table('marketing_campaigns');
        $table->insert($data);
    }

    public function update_campaign($data, $id){
        $Campaigns = $this->db->table('marketing_campaigns');
        $Campaigns->where('id', $id);
        $Campaigns->update($data);
    }

    public function delete_campaign($id){
        $Product = $this->db->table('marketing_campaigns');
        $Product->where('id', $id);
        $Product->delete();
        
    }

}