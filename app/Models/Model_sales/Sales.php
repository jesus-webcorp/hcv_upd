<?php namespace App\Models;

use CodeIgniter\Model;

class Sales_stage extends Model {

	protected $table      = 'sales';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['id_cotizacion','id_user_vendor', 'subtotal','tax','c_date'];

	protected $useTimestamps = false;

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;

}