<?php

namespace App\Controllers;

use App\Models\Access;

class Notificaciones extends BaseController
{
        
        public function obtener_notificaciones()
	{
        $session = session();

        $user_model = model('App\Models\session\users', false);
        $user_id = $user_model->select('id')->where('activation_token' , $session->get('token'))->find();
        $id_user = $user_id[0]["id"];

        $id_group = $user_model->select('id_group')->where('activation_token' ,$session->get('token'))->find();
        $group_id = $id_group[0]["id_group"];


               // echo("dentro de la vista");
        $request = \Config\Services::request();
        $data = $request->getPost('envio');

        if ($data == null){
            $model_notificacion = model('App\Models\Model_notificaciones\Model_notificacion');
            $get_notificaciones = $model_notificacion->get_notificaciones($id_user,$group_id);
            echo json_encode($get_notificaciones);

        }


	}

    public function update_notificacion(){

        $request = \Config\Services::request();
        $data = $request->getPost('envio');

        $estado = [
            'state' => $data
        ];

        $model_notificacion = model('App\Models\Model_notificaciones\Model_notificacion');
        $model_notificacion->update_state($estado);


    }
}