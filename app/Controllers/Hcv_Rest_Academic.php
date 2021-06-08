<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Academic extends ResourceController
{
    use ResponseTrait;

    public function index(){
        $model = model('App\Models\Models_hcv\Model_academic');
        $data['data'] = $model->orderBy('ID', 'DESC')->findAll();
        $result = true;
        if($result){
            $response = [
                'status'   => 200,
                'error'    => null,
                'data'     => $data['data'],
                'messages' => [
                    'success' => 'SE INSERTARON '.$result." REGISTROS"
                  ]
              ];
            return $this->respond($response);
        }else{
            return $this->failServerError('HA OCURRIDO UN ERROR AL ACTUALIZAR EL CATALOGO');
        }
    }

    public function create()
    {
        $model = model('App\Models\Models_hcv\Model_academic');
        $json = $this->request->getJSON();
        $data = [
            'KEY' => $json->KEY, 
            'ACADEMIC_FORMATION' => $json->ACADEMIC_FORMATION, 
            'GROUP' => $json->GROUP, 
            'DEGREE' => $json->DEGREE
        ];
        $model->insert($data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'GRADO ACADEMICO CREADO CON EXITO'
            ]
          ];
      return $this->respondCreated($response);
    }

    public function getAcademic(){
        $model = model('App\Models\Models_hcv\Model_academic');
        $json = $this->request->getJSON();
        $id = $json->id;
        $data = $model->where('ID', $id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('NO SE ENCONTRO EL GRADO ACADEMICO');
        }
    }

    public function bulk(){
        $file = $this->request->getFile('complete_catalog-0');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH.'uploads', $newName);
        $file_name = WRITEPATH.'uploads/'.$file->getName();
        $student = array();
        $csv_data = array_map('str_getcsv', file($file_name));
        if (count($csv_data) > 0) {
            $index = 0;
            foreach ($csv_data as $data) {
                if ($index > 0) {
                    $student[] = array(
                        "KEY" => $data[0],
                        "ACADEMIC_FORMATION" => $data[1],
                        "GROUP" => $data[2],
                        "DEGREE" => $data[3],
                    );
                }
                $index++;
            }
        }

        $model = model('App\Models\Models_hcv\Model_academic');
        $result = $model->insert_bulk($student);
        if($result){
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'SE INSERTARON '.$result." REGISTROS"
                  ]
              ];
            return $this->respond($response);
        }else{
            return $this->failServerError('HA OCURRIDO UN ERROR AL ACTUALIZAR EL CATALOGO');
        }
    }

    public function update($id = null){
        $model = model('App\Models\Models_hcv\Model_academic');
        $json = $this->request->getJSON();
        $id = $json->id_upd;
        $data = [
            'KEY' => $json->UPDATE_KEY,
            'ACADEMIC_FORMATION' => $json->UPDATE_ACADEMIC_FORMATION, 
            'GROUP' => $json->UPDATE_GROUP, 
            'DEGREE' => $json->UPDATE_DEGREE
        ];
        $model->update($id, $data);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => [
              'success' => 'GRADO ACADEMICO ACTUALIZADO CON EXITO'
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null){
      $model = model('App\Models\Models_hcv\Model_academic');
      $json = $this->request->getJSON();
      $id = $json->id_delete;
      $data = $model->where('id', $id)->delete($id);
      if($data){
          $model->delete($id);
          $response = [
              'status'   => 200,
              'error'    => null,
              'messages' => [
                  'success' => 'GRADO ACADEMICO ELIMINADO CON EXITO'
              ]
          ];
          return $this->respondDeleted($response);
      }else{
          return $this->failNotFound('GRADO ACADEMICO NO ENCONTRADO');
      }
    }
}