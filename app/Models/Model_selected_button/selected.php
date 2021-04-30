<?php namespace App\Models;

use CodeIgniter\Model;

class Selected extends Model {

	protected $table      = 'selected_button';
	protected $primaryKey = 'id';

	protected $useAutoIncrement = true;

	protected $returnType     = 'array';
	protected $useSoftDeletes = false;

	protected $allowedFields = ['id','name_table', 'column_name','name'];

	protected $useTimestamps = false;

	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = false;

}