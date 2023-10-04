<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends CI_Controller {
    function __construct(){
        parent:: __construct();
		$this ->load->model('productos_model');
    }

	
	public function index()
	{
		$titulo = array('titulo' => 'Ña Margarita');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('index');	
		$this->load->view('partes/footer_view');
	}
	public function index2()
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
		$this->load->view('partes/menu_view');
		$this->load->view('comercializacion');
		$this->load->view('partes/footer_view');
	}

	public function comoComprar()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Comercializacion/comoComprar');
		$this->load->view('partes/footer_view');
	}
	public function envios()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Comercializacion/envios');
		$this->load->view('partes/footer_view');
	}
	public function formaPago()
	{
		$titulo = array('titulo' => 'Comercialización - Como Comprar');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Comercializacion/formaPago');
		$this->load->view('partes/footer_view');
	}

	public function qSomos()
	{
		$titulo = array('titulo' => 'Quienes Somos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('quienesSomos');
		$this->load->view('partes/footer_view');
	}

	public function terminos()
	{
		$titulo = array('titulo' => 'Terminos y Uso');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('terminos');
		$this->load->view('partes/footer_view');
	}

	public function contacto()
	{
		$titulo = array('titulo' => 'Contacto');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('contacto');
		$this->load->view('partes/footer_view');
	}	

	
	
	public function productos()
	{		
		$titulo = array('titulo' => 'Productos');
		$data = array('productos' => $this->productos_model->ver_productos());
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/todos',$data);
		$this->load->view('partes/footer_view');
	}

	public function detalleProducto($id_producto)
	{
		$titulo = array('titulo' => 'Productos');
		$data = array('productos' => $this->productos_model->ver_productosId($id_producto));
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/detalleProducto',$data);
		$this->load->view('partes/footer_view');
	}

	public function yerbaMate()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('1');
		$titulo = array('titulo' => 'Yerba Mate');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/yerba',$productos);
		$this->load->view('partes/footer_view');
	}
	public function vinos()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('2');
		$titulo = array('titulo' => 'vinos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/vinos',$productos);
		$this->load->view('partes/footer_view');
	}
	public function dulces()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('3');
		$titulo = array('titulo' => 'Dulces');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/dulces',$productos);
		$this->load->view('partes/footer_view');
	}
	public function aderezos()
	{
		$productos['productos']= $this->productos_model->ver_prodCate('4');
		$titulo = array('titulo' => 'Aderezos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('Productos/aderezos',$productos);
		$this->load->view('partes/footer_view');
	}


	public function actualizacion()
	{
		$titulo = array('titulo' => 'En Construccion');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('paginaError');
		$this->load->view('partes/footer_view');
	}

	
	
}