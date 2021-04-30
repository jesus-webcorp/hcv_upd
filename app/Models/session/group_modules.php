<?php

namespace App\Models;

use CodeIgniter\Model;

class Group_modules extends Model
{
    protected $table      = 'group_modules';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id', 'name', 'description' , 'icon'];
    protected $useTimestamps = false;
    //protected $createdField  = 'c_date';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = true;
}