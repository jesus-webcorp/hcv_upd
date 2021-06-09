<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_cat_indigenous_lenguage extends Model
{
    protected $table = 'hcv_cat_indigenous_lenguge';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['KEY', 'SCIENTIFIC_NAME' , 'DESCRIPTION'];
}