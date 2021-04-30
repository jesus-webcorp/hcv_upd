<?php

namespace App\Models;

use CodeIgniter\Model;

class Access extends Model
{
    protected $table      = 'access';
    //protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $returnType     = 'array';
    protected $useSoftDeletes = true;
    protected $allowedFields = ['name', 'description'];
    protected $useTimestamps = false;
    protected $createdField  = 'c_date';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = true;

    function getPermisions($id_group  , $id_module){
       // var_dump($id_group);
        //$query = "SELECT modules.name ,  modules.description ,  modules.controller FROM `access`  , `modules` , group_modules WHERE group_modules.id=modules.id_group_module and modules.id_group_module=$id_module and  modules.id=access.id_module AND access.id_group = $id_group";
        
       
      
          
                   $query = "SELECT
                    modules.name , modules.description ,  modules.controller 
                FROM 
                    modules , access , group_modules
                WHERE 
                    modules.id=access.id_module
                    AND access.id_module=modules.id
                    AND access.id_group = $id_group 
                    AND modules.id_group_module = group_modules.id
                    AND group_modules.id = $id_module
                    AND modules.show_in_menu = 1";
                    //echo $query."<br>";
                    $data = $this->db->query($query);
                    return $data->getResult();
                   
            
           
       

        

        
    }

    function getModulePermisions($id_group  , $id_module){
        //$query = "SELECT modules.name ,  modules.description ,  modules.controller FROM `access`  , `modules` , group_modules WHERE group_modules.id=modules.id_group_module and modules.id_group_module=$id_module and  modules.id=access.id_module AND access.id_group = $id_group";
        $query = "SELECT
                        *
                    FROM 
                        access 
                    WHERE 
                        access.id_module=$id_module
                        AND access.id_group = $id_group";
        //echo $query."<br>";
        $data = $this->db->query($query);
	    return $data->getResult();
    }
}