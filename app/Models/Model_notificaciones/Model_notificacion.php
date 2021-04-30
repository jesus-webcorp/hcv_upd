<?php

    namespace App\Models;

    use CodeIgniter\Model;




    class Model_notificacion extends Model
    {
        public function get_notificaciones($id_user,$id_grop){
            $db = \Config\Database::connect();
                    $builder = $db->table('notifications');
                    $builder->select('notifications.date, type_of_notification.Tipo,type_of_notification.Mensaje,users.user_name');           
                    $builder->join('type_of_notification', 'type_of_notification.id = notifications.id_type');
                    $builder->join('users', 'users.id = notifications.id_user_emisor');
                    $builder->where('notifications.id_user_receptor', $id_user);
                    $builder->where('state', 0);
                    $query = $builder->get();
                    return $query->getResult();





            /*switch ($id_grop) {
                case "1":
                    $db = \Config\Database::connect();
                    $builder = $db->table('notifications');
                    $builder->select('notifications.date, type_of_notification.Tipo,type_of_notification.Mensaje');           
                    $builder->join('type_of_notification', 'type_of_notification.id = notifications.id_type');
                    $builder->where('notifications.id_user_admin', $id_user);
                    $query = $builder->get();
                    return $query->getResult();
                    break;
                case "3":
                    $db = \Config\Database::connect();
                    $builder = $db->table('notifications');
                    $builder->select('notifications.date, type_of_notification.Tipo,type_of_notification.Mensaje');           
                    $builder->join('type_of_notification', 'type_of_notification.id = notifications.id_type');
                    $builder->where('notifications.id_user_vendedor', $id_user);
                    $query = $builder->get();
                    return $query->getResult();
                    break;

                }*/
             

            



            /*$db = \Config\Database::connect();
            $builder = $db->table('notifications');
            $builder->select('*');
            //$builder->where('state', 0);
            $query = $builder->get();
            return $query->getResult(); */
        }

        public function update_state($estado){
            //var_dump($data);
            $db = \Config\Database::connect();
            $builder = $db->table('notifications');
            $builder->set($estado);
            $builder->where('state', 0);
            $builder->update();
           
        }



    }

?>    