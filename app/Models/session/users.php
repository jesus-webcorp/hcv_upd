<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = false;
    protected $returnType     = 'array';
    //protected $useSoftDeletes = true;
    protected $allowedFields = ['id_group',
    'user_name',
    'email',
    'activation_token',
    'about',
    'active'];
    protected $useTimestamps = false;
    //protected $createdField  = 'c_date';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = true;
}