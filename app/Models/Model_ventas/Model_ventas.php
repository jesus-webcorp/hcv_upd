<?php

    namespace App\Models;

    use CodeIgniter\Model;



    class Model_ventas extends Model
    {
        public function get_ventas($id_user,$id_grop){

           /* $db = \Config\Database::connect();
            $builder = $db->table('sales');
            $builder->select('sales.*, users.user_name');           
            $builder->join('users', 'users.id = sales.id_user_vendor');
            $builder->where('sales.id_user_vendor', $id_user);
            $query = $builder->get();
            return $query->getResult();*/

            switch ($id_grop) {
                case "1":
                    $db = \Config\Database::connect();
                    $builder = $db->table('sales');
                    $builder->select('sales.*, users.user_name');           
                    $builder->join('users', 'users.id = sales.id_user_vendor');
                    $query = $builder->get();
                    return $query->getResult();
                    break;
                case "3":
                    $db = \Config\Database::connect();
                    $builder = $db->table('sales');
                    $builder->select('sales.*, users.user_name');           
                    $builder->join('users', 'users.id = sales.id_user_vendor');
                    $builder->where('sales.id_user_vendor', $id_user);
                    $query = $builder->get();
                    return $query->getResult();
                    break;
               
            }


        }

        public function get_precios($id){
            $db = \Config\Database::connect();
            $builder = $db->table('cotization_x_products');
            $builder->select('price,percent');   
            $builder->where('id_cotization', $id);        
            $query = $builder->get();
            return $query->getResult();

            
        }

        public function insert_venta($data){
            $db = \Config\Database::connect();
            $query = $this->db->table('sales');
            $query->insert($data);
            $echo = $db->affectedRows($query);
            return $echo; 

        }

        public function get_contratos(){
            $db = \Config\Database::connect();
            $builder = $db->table('contracts');
            $builder->select('id,name');   
            $query = $builder->get();
            return $query->getResult();
        }

        public function upload($archivos,$id){
           foreach ($archivos as $archivo){

            $data[] = array (
                'sales_id' => $id,
                'path' => $archivo,
                   
            );
               
           }

           $builder = $this->db->table('files_sales');
           $builder->insertBatch($data);

        }

        public function get_data($id){
            $db = \Config\Database::connect();
            $builder = $db->table('files_sales');
            $builder->select('id,path');
            $query = $builder->getWhere(['sales_id' => $id]);
            return $query->getResult();
          
        }

        public function delete_sale($id){
            $db = \Config\Database::connect();
            $builder = $db->table('sales');
            $builder->delete(['id' => $id]);

        }

        public function get_sale($id_sale){
            $db = \Config\Database::connect();
            $builder = $db->table('sales');
            $builder->select('id,subtotal,tax,c_date');
            $query = $builder->getWhere(['id' => $id_sale]);
            return $query->getResult();

        }


        public function get_cat_payments(){

            $db = \Config\Database::connect();
            $builder = $db->table('cat_payments');
            $builder->select('*');
            $query = $builder->get();
            return $query->getResult();


        }

        public function insert_payments($data){
            //var_dump($data);
            $db = \Config\Database::connect();
            $query = $this->db->table('payments');
            $query->insert($data);
            return $db->insertID(); 

            //var_dump($pago_id);
        }

        public function get_payments($id_sale){
            $db = \Config\Database::connect();
            $builder = $db->table('payments');
            $builder->select('payments.id,payments.amount,payments.status,cat_payments.name,cat_payments.description,
            file_patments.path');
            $builder->join('cat_payments', 'cat_payments.id = payments.id_cat_payments');
            $builder->join('file_patments', 'file_patments.payments_id = payments.id');
            $builder->where('payments.id_sales', $id_sale);
            $query = $builder->get();
            return $query->getResult();

        }

        public function data_pago($id_pago){
            $db = \Config\Database::connect();
            $builder = $db->table('payments');
            $builder->select('*');
            $query = $builder->getWhere(['id' => $id_pago]);
            return $query->getResult();


        }

        public function actualizar_payments($data_pago,$idpayment){
           $db = \Config\Database::connect();
            $builder = $db->table('payments');
            $builder->set($data_pago);
            $builder->where('id', $idpayment);
            $builder->update();
        
        }

        public function delete_payments($id){
            $db = \Config\Database::connect();
            $builder = $db->table('payments');
            $builder->delete(['id' => $id]);


        }

        public function files_pagos($archivos,$id){
            foreach ($archivos as $archivo){

                $data[] = array (
                    'payments_id' => $id,
                    'path' => $archivo,
                       
                );
                   
               }
    
               $builder = $this->db->table('file_patments');
               $builder->insertBatch($data);

        }


        public function path($idfile){
            $db = \Config\Database::connect();
            $builder = $db->table('files_sales');
            $builder->select('path');
            $query = $builder->getWhere(['id' => $idfile]);
            return $query->getResult();

        }

        public function delete_file($id){
            $db = \Config\Database::connect();
            $builder = $db->table('files_sales');
            $builder->delete(['id' => $id]);

        }

        public function get_productos($id_sale){
            $db = \Config\Database::connect();
            $builder = $db->table('sales');
            $builder->select('cotization_x_products.price,cotization_x_products.percent,cat_products.name,
            cat_products.description, cat_products.media_path');           
            $builder->join('cotization', 'cotization.id = sales.id_cotizacion');
            $builder->join('cotization_x_products', 'cotization_x_products.id_cotization = cotization.id');
            $builder->join('cat_products', 'cat_products.id = cotization_x_products.id_cat_products');
            $builder->where('sales.id', $id_sale);
            $query = $builder->get();
            return $query->getResult();
        }

        public function get_header($id_sale){
            $db = \Config\Database::connect();
            $builder = $db->table('sales');
            $builder->select('sales.c_date, users.user_name as cliente' );           
            $builder->join('cotization', 'cotization.id = sales.id_cotizacion');
            $builder->join('users', 'users.id = cotization.id_user_client');
            $builder->where('sales.id', $id_sale);
            $query = $builder->get();
            return $query->getResult();

        }

        





        

    }