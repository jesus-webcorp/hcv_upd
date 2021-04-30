<?php namespace App\Models;
	
	use CodeIgniter\Model;

	class Clients extends Model {
        
        protected $table="clients_data";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','name','rfc','adress_country','adress_city'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;
    
    
    
    }