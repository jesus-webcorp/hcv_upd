
<?php

    if(!function_exists('send_email')) {

        function send_email($mail_to,$subject,$message,$file_path) {

           //var_dump($file);


            $email_from = "giovanni.zavala@soluciones.webcorp.com.mx";
            $email = \Config\Services::email();

            if($file_path!=null){
                foreach ($file_path as $valor){
                    $email->attach($valor);
                    $email->setTo($mail_to);
                    $email->setFrom($email_from);
                    $email->setSubject($subject);
                    $email->setMessage($message);
                      
                }

                if($email->send()){
                    echo("email enviado");
    
                }else{
                    echo("error al enviar email");
    
                }

            }else{
                $email->setTo($mail_to);
                $email->setFrom($email_from);
                $email->setSubject($subject);
                $email->setMessage($message);

                if($email->send()){
                    echo("email enviado");
    
                }else{
                    echo("error al enviar email");
    
                }

            }

        }

    }


?>