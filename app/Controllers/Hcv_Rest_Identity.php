<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Identity extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      // $model = model('App\Models\Models_hcv\Model_identity');;
      // //$data['patients'] = $model->orderBy('ID', 'DESC')->findAll();
      // $data['patients'] = $model->getFullJoin(10 , 0);
      // return $this->respond($data);

      $model = model('App\Models\Models_hcv\Model_marital_status');;
      $data['patients'] = $model->orderBy('ID', 'DESC')->findAll();
      return $this->respond($data);
    }

    // // create
    // public function create() {
    //     $model = new EmployeeModel();
    //     $data = [
    //         'name' => $this->request->getVar('name'),
    //         'email'  => $this->request->getVar('email'),
    //     ];
    //     $model->insert($data);
    //     $response = [
    //       'status'   => 201,
    //       'error'    => null,
    //       'messages' => [
    //           'success' => 'Employee created successfully'
    //       ]
    //   ];
    //   return $this->respondCreated($response);
    // }

    // // single user
    // public function getEmployee($id = null){
    //     $model = new EmployeeModel();
    //     $data = $model->where('id', $id)->first();
    //     if($data){
    //         return $this->respond($data);
    //     }else{
    //         return $this->failNotFound('No employee found');
    //     }
    // }

    // // update
    // public function update($id = null){
    //     $model = new EmployeeModel();
    //     $id = $this->request->getVar('id');
    //     $data = [
    //         'name' => $this->request->getVar('name'),
    //         'email'  => $this->request->getVar('email'),
    //     ];
    //     $model->update($id, $data);
    //     $response = [
    //       'status'   => 200,
    //       'error'    => null,
    //       'messages' => [
    //           'success' => 'Employee updated successfully'
    //       ]
    //   ];
    //   return $this->respond($response);
    // }

    // // delete
    // public function delete($id = null){
    //     $model = new EmployeeModel();
    //     $data = $model->where('id', $id)->delete($id);
    //     if($data){
    //         $model->delete($id);
    //         $response = [
    //             'status'   => 200,
    //             'error'    => null,
    //             'messages' => [
    //                 'success' => 'Employee successfully deleted'
    //             ]
    //         ];
    //         return $this->respondDeleted($response);
    //     }else{
    //         return $this->failNotFound('No employee found');
    //     }
    // }

}