<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Cp extends ResourceController
{
    use ResponseTrait;

    public function index(){
        $json = $this->request->getJSON();
        $limit = $json->limit;
        $offset = $json->offset;
        $search = $json->search;
        //var_dump($json);
        $model = model('App\Models\Models_hcv\Model_cp');
        $data['data'] = $model->like('CP',$search)->orderBy('ID', 'CP')->findAll($limit , $offset);
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

    public function create()
    {
        $model = model('App\Models\Models_hcv\Model_cp');
        $json = $this->request->getJSON();
        $data = [
            'CP' => $json->CP,
            'ASENTAMIENTO' =>$json->ASENTAMIENTO,
            'TIPO' => $json->TIPO,
            'MUNICIPIO' => $json->MUNICIPIO,
            'CIUDAD' => $json->CIUDAD,
            'ESTADO' => $json->ESTADO,
            'CLASIFICACION' => $json->CLASIFICACION
        ];
        $model->insert($data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'CODIGO POSTAL CREADO CON EXITO'
            ]
          ];
      return $this->respondCreated($response);
    }

    public function getCp(){
        $model = model('App\Models\Models_hcv\Model_cp');
        $json = $this->request->getJSON();
        $id = $json->id;
        $data = $model->where('ID', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('NO SE ENCONTRO EL ESTATUS CODIGO POSTAL ');
        }
    }

    public function update($id = null){
        $model = model('App\Models\Models_hcv\Model_cp');
        $json = $this->request->getJSON();
        $id = $json->id_upd;
        $data = [
            'NAME' => $json->UPDATE_NAME,
            'DESCRIPTION'  => $json->UPDATE_DESCRIPTION,
        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'CODIGO POSTAL ACTUALIZADO CON EXITO'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null){
      $model = model('App\Models\Models_hcv\Model_cp');
      $json = $this->request->getJSON();
      $id = $json->id_delete;
      $data = $model->where('id', $id)->delete($id);
      if($data){
          $model->delete($id);
          $response = [
              'status'   => 200,
              'error'    => null,
              'messages' => [
                  'success' => 'CODIGO POSTAL  ELIMINADO CON EXITO'
              ]
          ];
          return $this->respondDeleted($response);
      }else{
          return $this->failNotFound('CODIGO POSTAL  NO ENCONTRADO');
      }
    }
}