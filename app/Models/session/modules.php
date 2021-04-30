<?php

namespace App\Models;

use CodeIgniter\Model;

class modules extends Model
{
    protected $table      = 'modules';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_group_module' , 
                                'name' , 
                                'description' ,
                                'controller' ,
                                'active' ,
                                'phase' ,
                                'show_in_menu'];
    protected $useTimestamps = false;
    //protected $createdField  = 'c_date';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = true;

    function getId($controller){
        $query = "SELECT
                        id
                    FROM 
                        modules 
                    WHERE 
                        controller = '$controller'";
        //echo $query."<br>";
        $data = $this->db->query($query);
	    return $data->getResult();
    }
}