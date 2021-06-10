<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class Hcv_Rest_Cie10 extends ResourceController
{
    use ResponseTrait;

    public function index(){
        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', '300');
      $model = model('App\Models\Models_hcv\Model_cie10');
      $data['data'] = $model->orderBy('ID', 'DESC')->findAll();
      return $this->respond($data, 200);
    }

    public function create()
    {
        $model = model('App\Models\Models_hcv\Model_cie10');
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
        $model = model('App\Models\Models_hcv\Model_cie10');
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
        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', '300');
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
                        'CONSECUTIVO' => $data[0],
                        'LETRA' => $data[1],
                        'CATALOG_KEY' => $data[2],
                        'NOMBRE' => $data[3],
                        'CODIGOX' => $data[4],
                        'LSEX' => $data[5],
                        'LINF' => $data[6],
                        'LSUP' => $data[7],
                        'TRIVIAL' => $data[8],
                        'ERRADICADO' => $data[9],
                        'N_INTER' => $data[10],
                        'NIN' => $data[11],
                        'NINMTOBS' => $data[12],
                        'COD_SIT_LESION' => $data[13],
                        'NO_CBD' => $data[14],
                        'CBD' => $data[15],
                        'NO_APH' => $data[16],
                        'AF_PRIN' => $data[17],
                        'DIA_SIS' => $data[18],
                        'CLAVE_PROGRAMA_SIS' => $data[19],
                        'COD_COMPLEMEN_MORBI' => $data[20],
                        'DIA_FETAL' => $data[21],
                        'DEF_FETAL_CM' => $data[22],
                        'DEF_FETAL_CBD' => $data[23],
                        'CLAVE_CAPITULO' => $data[24],
                        'CAPITULO' => $data[25],
                        'LISTA1' => $data[26],
                        'GRUPO1' => $data[27],
                        'LISTA5' => $data[28],
                        'RUBRICA_TYPE' => $data[29],
                        'YEAR_MODIFI' => $data[30],
                        'YEAR_APLICACION' => $data[31],
                        'VALID' => $data[32],
                        'PRINMORTA' => $data[33],
                        'PRINMORBI' => $data[34],
                        'LM_MORBI' => $data[35],
                        'LM_MORTA' => $data[36],
                        'LGBD165' => $data[37],
                        'LOMSBECK' => $data[38],
                        'LGBD190' => $data[39],
                        'NOTDIARIA' => $data[40],
                        'NOTSEMANAL' => $data[41],
                        'SISTEMA_ESPECIAL' => $data[42],
                        'BIRMM' => $data[43],
                        'CVE_CAUSA_TYPE' => $data[44],
                        'CAUSA_TYPE' => $data[45],
                        'EPI_MORTA' => $data[46],
                        'EDAS_E_IRAS_EN_M5' => $data[47],
                        'CVE_MATERNAS-SEED-EPID' => $data[48],
                        'EPI_MORTA_M5' => $data[49],
                        'EPI_MORBI' => $data[50],
                        'DEF_MATERNAS' => $data[51],
                        'ES_CAUSES' => $data[52],
                        'NUM_CAUSES' => $data[53],
                        'ES_SUIVE_MORTA' => $data[54],
                        'ES_SUIVE_MORB' => $data[55],
                        'EPI_CLAVE' => $data[56],
                        'EPI_CLAVE_DESC' => $data[57],
                        'ES_SUIVE_NOTIN' => $data[58],
                        'ES_SUIVE_EST_EPI' => $data[59],
                        'ES_SUIVE_EST_BROTE' => $data[60],
                        'SINAC' => $data[61],
                        'PRIN_SINAC' => $data[62],
                        'PRIN_SINAC_GRUPO' => $data[63],
                        'DESCRIPCION_SINAC_GRUPO' => $data[64],
                        'PRIN_SINAC_SUBGRUPO' => $data[65],
                        'DESCRIPCION_SINAC_SUBGRUPO' => $data[66],
                        'DAGA' => $data[67],
                        'ASTERISCO' => $data[68],
                        'PRIN_MM' => $data[69],
                        'PRIN_MM_GRUPO' => $data[70],
                        'DESCRIPCION_MM_GRUPO' => $data[71],
                        'PRIN_MM_SUBGRUPO' => $data[72],
                        'DESCRIPCION_MM_SUBGRUPO' => $data[73]
                    );
                }
                $index++;
            }
        }

        $model = model('App\Models\Models_hcv\Model_cie10');
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