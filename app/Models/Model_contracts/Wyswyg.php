<?php namespace App\Models;

	use CodeIgniter\Model;

	class Wyswyg extends Model {

        protected $table="contracts";
		protected $primaryKey="id";
		protected $returnType="array";
		protected $useSoftDeletes=false;
		protected $allowedFields=['id','id_user','name','wyswyg','rfc'];
		protected $useTimestamps=false;
		protected $validationRules=[];
		protected $validationMessages=[];
		protected $skipValidation=false;



    }