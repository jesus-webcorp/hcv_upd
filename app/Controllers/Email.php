<?php

namespace App\Controllers;


class Email extends BaseController
{
	public function index(){
        //echo("hola mundo");

        $correo_envio ="belcros90@gmail.com";
        $file = array("./../assets/img/img1.jpg",
        "./../assets/img/img2.jpg","./../assets/img/gengar.png",
        "./../assets/img/img3.jpg");

        //$file="";

        $mensaje = "Soliq entrega";
        $asunto = "Solimaq Prueba";

        //Esta es la funcion Global
        send_email($correo_envio,$asunto,$mensaje,$file);

        

        
        
       


	}
}






