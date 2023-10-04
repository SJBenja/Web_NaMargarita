<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_model extends CI_Model {
		
	//Alta
    public function guardar_productos($data){
		$this->db->insert('productos', $data);
		
	}

    //Modificacion
    public function actualizar_productos($data,$id_producto){
        $this->db->where('id_producto',$id_producto);
        $query = $this->db->update('productos',$data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function ver_productos(){
        $this->db->select('*');
        $this->db->from('productos');
		//$this->db->from('categorias');
        $this->db->join('categorias', 'categorias.id = productos.categoria_id');      
        $this->db->where('estado','1');
        $query = $this->db->get();
        return $query->result();               
    }
    public function ver_bajaProductos(){
        $this->db->select('*');
        $this->db->from('productos');
		//$this->db->from('categorias');
        $this->db->join('categorias', 'categorias.id = productos.categoria_id');      
        $this->db->where('estado','0');
        $query = $this->db->get();
        return $query->result();               
    }

    /*Funcion que optiene el producto de un determinado ID */
    public function ver_productosId($id_producto){
        $this->db->select('*');
        $this->db->from('productos');
		//$this->db->from('categorias');
        $this->db->join('categorias', 'categorias.id = productos.categoria_id');      
        $this->db->where('id_producto',$id_producto);
        $query = $this->db->get();
        return $query->row();               
    }

	public function seleccionar_categoria(){
		$this->db->select('*');
        $this->db->from('categorias');      
        $categorias = $this->db->get();
        return $categorias->result();     
	}

    
    public function cambiarEstado($id_producto,$estado){
        $this->db->select('*');
        $this->db->from('productos');
		$this->db->where('id_producto', $id_producto);
        $this->estado==$estado;
		$this->db->update('productos'); 
        return true;
	}

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id){
        $query = $this->db->get_where('productos', array('id_producto' => $id),1);                
        if($query->num_rows() == 1) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function ver_yerba(){
        //$this->db->select('*');
        //$this->db->from('productos');
		//$this->db->from('categorias');
        $this->db->join('categorias', 'categorias.id = productos.categoria_id');      
        $this->db->where('estado','1');
        $this->db->where('categoria_id','1');
        $query = $this->db->get('productos');
        return $query->result();      
    }

    public function ver_prodCate($id_categoria){
        $this->db->select('*');
        $this->db->from('productos');
		//$this->db->from('categorias');
        $this->db->join('categorias', 'categorias.id = productos.categoria_id');      
        $this->db->where('estado','1');
        $this->db->where('categoria_id', $id_categoria);
        $query = $this->db->get();
        return $query->result();               
    }



	
}