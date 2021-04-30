<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Cotizacion extends Model {
        
        protected $table="cotization";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','id_user_vendor','id_user_client','global_percent','c_date'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;
    
    
    
    }