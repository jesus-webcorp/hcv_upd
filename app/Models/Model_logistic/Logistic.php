<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Logistic extends Model {
        
        protected $table="cat_sales_stages";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','name','description','position'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;
    
    
    
    }