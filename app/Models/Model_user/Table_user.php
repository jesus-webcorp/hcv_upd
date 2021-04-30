<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Table_user extends Model {

		protected $table="users";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id_group','c_date','user_name','password','about','active'];
		protected $useTimestamps=false;
		protected $createdField='created_at';
		protected $updatedField='updated_at';
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;

	}