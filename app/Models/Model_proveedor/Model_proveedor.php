<?php

namespace App\Models;

use CodeIgniter\Model;




class Model_proveedor extends Model
{



    public function get_provedor()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor');
        $builder->select('*');
        //$builder->join('productos', 'proveedor.id = productos.id');
        $query = $builder->get();
        return $query->getResult();
    }


    public function insert_proveedor($datos_proveedor)
    {
        $Nombres = $this->db->table('proveedor');
        $Nombres->insert($datos_proveedor);
    }



    public function get_prove($idprove)
    {
       
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor');
        $builder->select('*');
        $query = $builder->getWhere(['id_proveedor' => $idprove]);
        return $query->getResult();
    }

    public function update_provedor($id, $actualiza_provedor)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor');
        $builder->set($actualiza_provedor);
        $builder->where('id_proveedor', $id);
        $builder->update();
    }

    public function delete_prove($id_provedor)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor');
        $builder->delete(['id_proveedor' => $id_provedor]);
    }


    //Productos//

    public function obtener_productos()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('cat_products');
        $builder->select('id,name');
        $query = $builder->get();
        return $query->getResult();
       
    }

    //proveedor_x_products

    public function insert_pxp($data,$precio,$id_prove)
    {
       
        foreach( $data as $key => $n ) {
            $dataproductos[] = array (
                'id_product' => $n,
                'id_proveedor' => $id_prove,
                'supplier_price' => $precio[$key],
                
            );
          }   

        $builder = $this->db->table('proveedor_x_products');
        $builder->insertBatch($dataproductos);
    
    }

    public function get_productos($idprovrdor)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('cat_products');
        $builder->select('*');
        $builder->join('proveedor_x_products', 'cat_products.id = proveedor_x_products.id_product');
        $builder->join('proveedor', 'proveedor_x_products.id_proveedor = proveedor.id_proveedor');
        $builder->where('proveedor_x_products.id_proveedor', $idprovrdor);
        $query = $builder->get();
        return $query->getResult();
    }

    public function getproduct($idproducto)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor_x_products');
        $builder->select('*');
        $query = $builder->getWhere(['id_product' => $idproducto]);
        return $query->getResult();
    }

   
    public function update_product($actualizar_producto,$id){
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor_x_products');
        $builder->set($actualizar_producto);
        $builder->where('id_product', $id);
        $builder->update();

    }

    public function borrar($idproducto){
        $db = \Config\Database::connect();
        $builder = $db->table('proveedor_x_products');
        $builder->delete(['id_product' => $idproducto]);
      

    }



  
}
