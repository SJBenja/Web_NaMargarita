<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$titulo = array('titulo' => 'Ña Margarita');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
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

	public function qSomos()
	{
		$titulo = array('titulo' => 'Quienes Somos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('quienes_somos');
		$this->load->view('partes/footer_view');
	}

	public function terminos()
	{
		$titulo = array('titulo' => 'Terminos');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('terminos_uso');
		$this->load->view('partes/footer_view');
	}

	public function contacto()
	{
		$titulo = array('titulo' => 'Contacto');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('info_contac');
		$this->load->view('partes/footer_view');
	}

	
	
}
