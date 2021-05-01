<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Marital_Status extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = model('App\Models\Models_hcv\Model_marital_status');;
      $data['patients'] = $model->orderBy('ID', 'DESC')->findAll();
      return $this->respond($data);
    }
}