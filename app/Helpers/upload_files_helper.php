


<?php 

    if(!function_exists('uploads_file')) {
        function uploads_file($files , $dir) {

            $array = array();

            $path = "../public/".$dir;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
                foreach($files['files'] as $archivo){
                    if ($archivo->isValid() && !$archivo->hasMoved()){
                        //$newName = $archivo->getRandomName();
                        $name = $archivo->getName();
                        $archivo->move(WRITEPATH.$path, $name);
                        array_push($array,$path."/".$name);
                       
                    }else{
                       $error = "no se pudieron guardar los archivos";
                       return $error;

                    }
                }

                return $array;
                
            }else{
                foreach($files['files'] as $archivo){
                    if ($archivo->isValid() && !$archivo->hasMoved()){
                        //$newName = $archivo->getRandomName();
                        $name = $archivo->getName();
                        $archivo->move(WRITEPATH.$path, $name);
                        array_push($array,$path."/".$name);
                       
                    }else{
                       $error = "no se pudieron guardar los archivos";
                       return $error;

                    }
                }

                return $array;
            }

           
        }

    }

    
?>