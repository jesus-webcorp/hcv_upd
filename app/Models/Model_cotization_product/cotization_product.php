<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Cotization_product extends Model {
        
        protected $table="cotization_x_products";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','id_cat_products','id_cotization','price','percent'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;
    
    
    
    }