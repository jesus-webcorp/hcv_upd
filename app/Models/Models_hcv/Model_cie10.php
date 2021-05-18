<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_cie10 extends Model
{
    protected $table = 'hcv_cie10';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['LETRA', 'CATALOG_KEY', 'NOMBRE', 'CODIGOX', 'LSEX', 'LINF',
    'LSUP', 'TRIVIAL', 'ERRADICADO', 'N_INTER', 'NIN', 'NINMTOBS', 'COD_SIT_LESION', 
    'NO_CBD', 'CBD', 'NO_APH', 'AF_PRIN', 'DIA_SIS', 'CLAVE_PROGRAMA_SIS', 
    'COD_COMPLEMEN_MORBI', 'DIA_FETAL', 'DEF_FETAL_CM', 'DEF_FETAL_CBD', 'CLAVE_CAPITULO', 
    'CAPITULO', 'LISTA1', 'GRUPO1', 'LISTA5', 'RUBRICA_TYPE', 'YEAR_MODIFI', 'YEAR_APLICACION', 
    'VALID', 'PRINMORTA', 'PRINMORBI', 'LM_MORBI', 'LM_MORTA', 'LGBD165', 'LOMSBECK', 'LGBD190', 
    'NOTDIARIA', 'NOTSEMANAL', 'SISTEMA_ESPECIAL', 'BIRMM', 'CVE_CAUSA_TYPE', 'EPI_MORTA', 
    'EDAS_E_IRAS_EN_M5', 'CVE_MATERNAS-SEED-EPID', 'EPI_MORTA_M5', 'EPI_MORBI', 'DEF_MATERNAS', 
    'ES_CAUSES', 'NUM_CAUSES', 'ES_SUIVE_MORTA', 'ES_SUIVE_MORB', 'EPI_CLAVE', 'EPI_CLAVE_DESC', 
    'ES_SUIVE_NOTIN', 'ES_SUIVE_EST_EPI', 'ES_SUIVE_EST_BROTE', 'SINAC', 'PRIN_SINAC', 'PRIN_SINAC_GRUPO', 
    'DESCRIPCION_SINAC_GRUPO', 'PRIN_SINAC_SUBGRUPO', 'DESCRIPCION_SINAC_SUBGRUPO', 'DAGA', 'ASTERISCO', 
    'PRIN_MM', 'PRIN_MM_GRUPO', 'DESCRIPCION_MM_GRUPO', 'PRIN_MM_SUBGRUPO', 'DESCRIPCION_MM_SUBGRUPO'];
    
    public function insert_bulk($array){
        $db = \Config\Database::connect();
        $builder = $db->table('hcv_cie10');
        return $builder->insertBatch($array);
    }
}