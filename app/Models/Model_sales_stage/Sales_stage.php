<?php namespace App\Models;

use CodeIgniter\Model;

class Sales_stage extends Model {

	protected $table      = 'cat_sales_stages';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['name', 'description'];

	protected $useTimestamps = false;

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;

}