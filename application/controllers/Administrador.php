<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {
	
  function __construct() {
	  parent::__construct();
    $this ->load->model('Administrador_model');
    $this->load->model('carrito_model');
    $this->load->model('usuarios_model');
	}

  public function controlVentas(){  
    $data['ventas']=$this->carrito_model->ver_compra();          
    $titulo = array('titulo' => 'Control de Ventas');
    $this->load->view('partes/header_view',$titulo);
    $this->load->view('partes/menuAdmin_view');
    $this->load->view('Administrador/controlVentas',$data);
    $this->load->view('partes/footer_view');
  }
  public function consultas(){            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $data = array('consultas' => $this->Administrador_model->ver_consultas());
    $this->load->view('partes/header_view',$titulo);
    $this->load->view('partes/menuAdmin_view');
    $this->load->view('Administrador/consultas',$data);
    $this->load->view('partes/footer_view');
  }

  public function detalleVentasU($id_venta){
		$compra['compra']=$this->carrito_model->ver_detalle($id_venta);
		$titulo = array('titulo' => 'Detalle de Compra');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuAdmin_view');
		$this->load->view('Nuevo/detalleCompra',$compra);
		$this->load->view('partes/footerAdmin_view');
	}

  public function usuarios(){            
    $titulo = array('titulo' => 'Consultas de Usuarios');
    $data = array('usuarios' => $this->usuarios_model->ver_usuarios());
    $this->load->view('partes/header_view',$titulo);
    $this->load->view('partes/menuAdmin_view');
    $this->load->view('Administrador/usuarios',$data);
    $this->load->view('partes/footer_view');
  }

  public function detalleUsuarios($id_usuario){
		$adicional['adicional']=$this->usuarios_model->buscar_usuarioId($id_usuario);
		$titulo = array('titulo' => 'Detalle de Compra');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuAdmin_view');
		$this->load->view('Nuevo/cuenta',$adicional);
		$this->load->view('partes/footerAdmin_view');
	}

  
}