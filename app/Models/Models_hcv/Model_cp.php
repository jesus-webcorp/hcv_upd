<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_cp extends Model
{
    protected $table = 'hcv_cat_cp';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['CP', 'ASENTAMIENTO', 'TIPO', 'MUNICIPIO', 'CIUDAD', 'ESTADO', 'CLASIFICACION'];

}