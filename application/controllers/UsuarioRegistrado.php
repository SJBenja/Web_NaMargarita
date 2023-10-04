<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class UsuarioRegistrado extends CI_Controller {
    function __construct(){
        parent:: __construct();
		$this ->load->model('productos_model');
		$this ->load->model('usuarios_model');
		$this ->load->model('carrito_model');
		$this->load->library('cart');
    }
	
	public function indexU()
	{
		$titulo = array('titulo' => 'Ña Margarita');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('index');	
		$this->load->view('partes/footer_view');
		
	}

	public function comercializacion()
	{
		$titulo = array('titulo' => 'Comercialización');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('comercializacion');
		$this->load->view('partes/footer_view');
	}

	public function comoComprar()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Comercializacion/comoComprar');
		$this->load->view('partes/footer_view');
	}
	public function envios()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Comercializacion/envios');
		$this->load->view('partes/footer_view');
	}
	public function formaPago()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Comercializacion/formaPago');
		$this->load->view('partes/footer_view');
	}

	public function qSomos()
	{
		$titulo = array('titulo' => 'Quienes Somos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('quienesSomos');
		$this->load->view('partes/footer_view');
	}

	public function terminos()
	{
		$titulo = array('titulo' => 'Terminos y Uso');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('terminos');
		$this->load->view('partes/footer_view');
	}

	public function contacto()
	{
		$titulo = array('titulo' => 'Contacto');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('contactoU');
		$this->load->view('partes/footer_view');
	}
	
	public function consulta()
	{
		//$usuario['usuarios'] = $this->usuarios_model->buscar_usuarioId($id_usuario);
		$titulo = array('titulo' => 'Contacto');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('consultaU',);
		$this->load->view('partes/footer_view');
	}		
	
	public function productos()
	{
		$titulo = array('titulo' => 'Productos');
		$data = array('productos' => $this->productos_model->ver_productos());
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Productos/todos',$data);
		$this->load->view('partes/footer_view');
	}

	public function yerbaMate()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('1');
		$titulo = array('titulo' => 'Yerba Mate');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Productos/yerba',$productos);
		$this->load->view('partes/footer_view');
	}
	public function vinos()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('2');
		$titulo = array('titulo' => 'vinos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Productos/vinos',$productos);
		$this->load->view('partes/footer_view');
	}
	public function dulces()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('3');
		$titulo = array('titulo' => 'Dulces');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Productos/dulces',$productos);
		$this->load->view('partes/footer_view');
	}
	public function aderezos()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('4');
		$titulo = array('titulo' => 'Aderezos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Productos/aderezos',$productos);
		$this->load->view('partes/footer_view');
	}

	public function misCompras()
	{
		$titulo = array('titulo' => 'Mis Compras');
		$usuario = $this->session->userdata('usuario');
		$compra['compra'] = $this->carrito_model->ver_compraUsuario($usuario['id_usuario']);
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Nuevo/comprasRealizadas',$compra);
		$this->load->view('partes/footer_view');
	}
	public function detalleVentas($id_venta){
		$compra['compra']=$this->carrito_model->ver_detalle($id_venta);
		$titulo = array('titulo' => 'Detalle de Compra');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Nuevo/detalleCompra',$compra);
		$this->load->view('partes/footer_view');
	}
	
	public function miCuenta()
	{
		$usuario = $this->session->userdata('usuario');
		$adicional['adicional'] = $this->usuarios_model->buscar_usuarioId($usuario['id_usuario']);
		$titulo = array('titulo' => 'Aderezos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Nuevo/cuenta',$adicional);
		$this->load->view('partes/footer_view');
	}
}