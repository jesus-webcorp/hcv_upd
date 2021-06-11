<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Indigenous_L extends ResourceController
{
    use ResponseTrait;

    public function index(){
        $json = $this->request->getJSON();
        $limit = $json->limit;
        $offset = $json->offset;
        $search = $json->search;
        if(isset($json->debug) && $json->debug){
            var_dump($json);
        }
        //var_dump($json);
        $model = model('App\Models\Models_hcv\Model_cat_indigenous_lenguage');
        $data['data'] = $model->like('SCIENTIFIC_NAME',$search)->orderBy('ID')->findAll($limit , $offset);
        $response = [
            'status'   => 200,
            'error'    => null,
            'data'     => $data['data'],
            'messages' => [
                'success' => 'ok'
              ]
          ];
        return $this->respond($response);
    }

    // public function create()
    // {
    //     $model = model('App\Models\Models_hcv\Model_marital_status');
    //     $json = $this->request->getJSON();
    //     $data = [
    //         'NAME' => $json->NAME,
    //         'DESCRIPTION'  => $json->DESCRIPTION,
    //     ];
    //     $model->insert($data);
    //     $response = [
    //         'status'   => 200,
    //         'error'    => null,
    //         'messages' => [
    //             'success' => 'ESTATUS MARITAL CREADO CON EXITO'
    //         ]
    //       ];
    //   return $this->respondCreated($response);
    // }

    // public function getStatusMarital(){
    //     $model = model('App\Models\Models_hcv\Model_marital_status');
    //     $json = $this->request->getJSON();
    //     $id = $json->id;
    //     $data = $model->where('ID', $id)->first();
    //     if($data){
    //         return $this->respond($data);
    //     }else{
    //         return $this->failNotFound('NO SE ENCONTRO EL ESTATUS');
    //     }
    // }

    // public function update($id = null){
    //     $model = model('App\Models\Models_hcv\Model_marital_status');
    //     $json = $this->request->getJSON();
    //     $id = $json->id_upd;
    //     $data = [
    //         'NAME' => $json->UPDATE_NAME,
    //         'DESCRIPTION'  => $json->UPDATE_DESCRIPTION,
    //     ];
    //     $model->update($id, $data);
    //     $response = [
    //       'status'   => 200,
    //       'error'    => null,
    //       'messages' => [
    //           'success' => 'MARITAL ESTATUS ACTUALIZADO CON EXITO'
    //         ]
    //     ];
    //     return $this->respond($response);
    // }

    // public function delete($id = null){
    //   $model = model('App\Models\Models_hcv\Model_marital_status');
    //   $json = $this->request->getJSON();
    //   $id = $json->id_delete;
    //   $data = $model->where('id', $id)->delete($id);
    //   if($data){
    //       $model->delete($id);
    //       $response = [
    //           'status'   => 200,
    //           'error'    => null,
    //           'messages' => [
    //               'success' => 'MARITAL ESTATUS ELIMINADO CON EXITO'
    //           ]
    //       ];
    //       return $this->respondDeleted($response);
    //   }else{
    //       return $this->failNotFound('MARITAL ESTATUS NO ENCONTRADO');
    //   }
    // }
}