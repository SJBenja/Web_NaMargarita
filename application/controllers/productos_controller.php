<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productos_controller extends CI_Controller {
	
  function __construct() {
	  parent::__construct();
      $this ->load->model('productos_model');
	 
	}

  public function listaProductos()
  {            
    $titulo = array('titulo' => 'Productos');
    $data = array('productos' => $this->productos_model->ver_productos());
        
    $this->load->view('partes/header_view',$titulo);
    $this->load->view('partes/menuAdmin_view');
    $this->load->view('Administrador/productos',$data);
    $this->load->view('partes/footerAdmin_view');
  }

  public function altaProductos()
	{
		$titulo = array('titulo' => 'Altas de Productos');
    $categoria['categorias'] = $this->productos_model->seleccionar_categoria();

		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuAdmin_view');
		$this->load->view('Administrador/altas',$categoria);
		$this->load->view('partes/footerAdmin_view');
	}

  public function registrar_producto(){
    
    $this->form_validation->set_rules('nombre', 'Ingrese nombre del producto', 'required');
    $this->form_validation->set_rules('descripcion', 'Ingrese una breve descripción', 'required');
    $this->form_validation->set_rules('categoria', 'Seleccione una categoria', 'required');    
    $this->form_validation->set_rules('precio', 'Ingrese el precio del producto', 'required|numeric');
    $this->form_validation->set_rules('cantidad', 'Ingrese el stock disponible', 'required|numeric');
    $this->form_validation->set_rules('imagen','imagen','callback_validar_imagen');
		$this->form_validation->set_message('validar_imagen','*Este campo es obligatorio');

    $this->form_validation->set_message('required', ' %s *campo obligatorio');
    
    $this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');


    if($this->form_validation->run() == FALSE){
      $this->altaProductos();
    }else{
      $this->agregar_producto();
    }
  }

  public function agregar_producto(){
    $producto = array(
      'categoria_id'     =>$this->input->post('categoria'),
      'nombre'        =>$this->input->post('nombre'),
      'descripcion'   => $this->input->post('descripcion'),        
      'precio'        => $this->input->post('precio'),
      'stock'         => $this->input->post('cantidad'),
      'imagen'         => $_FILES['imagen']['name'],
      'estado' => 1
    );

    $this->productos_model->guardar_productos($producto);
    
    $this->altaProductos();
    return true;
    $nombre = $_FILES['imagen']['name'];
		$ruta = "uploads/"."imagenes" ."/". $nombre;
		$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
    
  }

  function validar_imagen() {
    $tipoArchivo=$_FILES['imagen']['type'];
    $tamañoArchivo=$_FILES['imagen']['size'];    
    $nombre_imagen=$_FILES['imagen']['name'];//elijo el nombre de la imagen
    if(empty($nombre_imagen) or (strstr($tipoArchivo,"jpeg")!="jpeg" and strstr($tipoArchivo,"jpg")!="jpg" and strstr($tipoArchivo,"png")!="png") or $tamañoArchivo>5000000) {
      return false;
    }else {
      return true;
    }   
 }

 public function modificacionProductos($id_producto)
	{    
		$titulo = array('titulo' => 'Modificaciones');
    $producto['productos'] = $this->productos_model->ver_productosId($id_producto);
    $producto['categorias'] = $this->productos_model->seleccionar_categoria();
    
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuAdmin_view');    
		$this->load->view('Administrador/modificaciones',$producto);
		$this->load->view('partes/footerAdmin_view');
    
	}

 public function modificar($id_producto=null){
  $this->form_validation->set_rules('nombre', 'Ingrese nombre del producto', 'required');
  $this->form_validation->set_rules('descripcion', 'Ingrese una breve descripción', 'required');
  $this->form_validation->set_rules('categoria', 'Seleccione una categoria', 'required');    
  $this->form_validation->set_rules('precio', 'Ingrese el precio del producto', 'required|numeric');
  $this->form_validation->set_rules('cantidad', 'Ingrese el stock disponible', 'required|numeric');
  $this->form_validation->set_rules('imagen','imagen','callback_validar_imagen');
  $this->form_validation->set_message('validar_imagen','*Este campo es obligatorio');

  $this->form_validation->set_message('required', ' %s *campo obligatorio');
  
  $this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');


  if($this->form_validation->run() == FALSE){
    $this->modificacionProductos($id_producto);
  }else{
    $producto = array(    
      'categoria_id'  =>$this->input->post('categoria_id'),
      'nombre'        =>$this->input->post('nombre'),
      'descripcion'   => $this->input->post('descripcion'),        
      'precio'        => $this->input->post('precio'),
      'stock'         => $this->input->post('cantidad'),
      'imagen'        => $_FILES['imagen']['name'],
      'estado' => 1
    );
    $this->productos_model->actualizar_productos($producto,$id_producto);
    redirect('listaProductos');
  }  
 }

  public function bajaLogica($id_producto){
    $producto = array(
      'estado' => 0
    );
    $this->productos_model->actualizar_productos($producto,$id_producto);  
    redirect('listaProductos');
  
 } 
 public function activacionLogica($id_producto){
  $producto = array(
    'estado' => 1
  );
  $this->productos_model->actualizar_productos($producto,$id_producto);  
  redirect('listaProductos');

} 
 
 public function bajaProductos()
 {
   $titulo = array('titulo' => 'baja de Productos');
   $data = array('productos' => $this->productos_model->ver_bajaProductos());

   $this->load->view('partes/header_view',$titulo);
   $this->load->view('partes/menuAdmin_view');
   $this->load->view('Administrador/productoBaja',$data);
   $this->load->view('partes/footerAdmin_view');
 }

}
