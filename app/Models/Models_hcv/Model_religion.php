<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_academic extends Model
{
    protected $table = 'hcv_cat_academic';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['KEY', 'ACADEMIC_FORMATION', 'GROUP' , 'DEGREE'];
    
    public function insert_bulk($array){
        $db      = \Config\Database::connect();
        $builder = $db->table('hcv_cat_academic');
        return $builder->insertBatch($array);
    }
}