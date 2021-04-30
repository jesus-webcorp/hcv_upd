<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Files extends Model {
        
        protected $table="files_sales";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','sales_id','path'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;
    
    
    
    }