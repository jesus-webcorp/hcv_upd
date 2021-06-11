<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Identity extends ResourceController
{
    use ResponseTrait;

    // all users
    public function index(){
      $model = model('App\Models\Models_hcv\Model_identity');
      $json = $this->request->getJSON();
      $id = $json->ID;
      $data['data'] = $model->getIdentityfull($id);
      return $this->respond($data);
    }

    // create
    public function create() {
      $model = model('App\Models\Models_hcv\Model_marital_status');
      $json = $this->request->getJSON();
      $data = [
        'ID_USER' => $json->ID_USER , 
        'CURP' => $json->CURP , 
        'NAME' => $json->NAME , 
        'F_LAST_NAME' => $json->F_LAST_NAME , 
        'S_LAST_NAME' => $json->S_LAST_NAME , 
        'PHONE_NUMBER' => $json->PHONE_NUMBER , 
        'BIRTHDATE' => $json->BIRTHDATE , 
        'ID_CAT_NATIONALITY' => $json->ID_CAT_NATIONALITY , 
        'BIRTHPLACE' => $json->BIRTHPLACE , 
        'ID_CAT_GENDER_IDENTITY' => $json->ID_CAT_GENDER_IDENTITY , 
        'ID_CAT_STATE_OF_RESIDENCE' => $json->ID_CAT_STATE_OF_RESIDENCE , 
        'ID_CAT_MUNICIPALITY' => $json->ID_CAT_MUNICIPALITY , 
        'ID_CAT_TOWN' => $json->ID_CAT_TOWN , 
        'ID_CAT_ACADEMIC' => $json->ID_CAT_ACADEMIC , 
        'JOB' => $json->JOB , 
        'ID_CAT_MARITAL_STATUS' => $json->ID_CAT_MARITAL_STATUS , 
        'ID_CAT_RELIGION' => $json->ID_CAT_RELIGION , 
        'ANSWER_INDIGENOUS_COMUNITY' => $json->ANSWER_INDIGENOUS_COMUNITY , 
        'ANSWER_INDIGENOUS_LENGUAGE' => $json->ANSWER_INDIGENOUS_LENGUAGE , 
        'ID_CAT_INDIGENOUS_LENGUAGE' => $json->ID_CAT_INDIGENOUS_LENGUAGE , 
        'ID_CAT_TUTOR' => $json->ID_CAT_TUTOR , 
        'ANSWER_OTHER_TUTOR' => $json->ANSWER_OTHER_TUTOR ,
        'ZIP_CODE' => $json->ZIP_CODE ,
        'SEX' => $json->SEX
      ];
      $model->insert($data);
      $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'DATOS PERSONALES CREADO CON EXITO'
          ]
        ];
    return $this->respondCreated($response);
    }

    // single user
    public function getIdentity($id = null){
        $model = model('App\Models\Models_hcv\Model_identity');
        $data = $model->where('id', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No employee found');
        }
    }

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