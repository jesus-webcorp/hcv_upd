<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_identity extends Model
{
    protected $table = 'hcv_identity';
    protected $primaryKey = 'ID';

    public function getFullJoin($limit = 10 , $offset = 0){
        $fullJoinQuery = "SELECT hcv_identity.* , hcv_cat_marital_status.name as MARITAL_STATUS FROM hcv_identity , hcv_cat_marital_status WHERE hcv_identity.ID_CAT_MARITAL_STATUS = hcv_cat_marital_status.id LIMIT $limit OFFSET $offset";
        $result = $this->db->query($fullJoinQuery);
        return $result->getResult();
    }


}

