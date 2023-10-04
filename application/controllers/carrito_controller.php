<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class carrito_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('carrito_model');
		$this->load->model('productos_model');
        $this->load->library('cart');
	}

    public function carrito()
	{
		$titulo = array('titulo' => 'Carrito');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('nuevo/carrito');
		$this->load->view('partes/footer_view');
	}

    //Agrega elemento al carrito
    public function agregarCarrito(){
        //$producto = $this->productos_model->ver_productosId($id_producto);
		$data = array(
            'id' => $this->input->post('id_producto'),
            'img' => $this->input->post('imagen'),
            'qty'     => 1,
            'price'   => $this->input->post('precio'),
            'name'    => $this->input->post('nombre'),
        );
    
        $this->cart->insert($data);
        //print_r($data);
        redirect('productosU');
	}
		
	//Elimina elemento del carrito o el carrito entero
	public function quitar_carrito($rowid){
		$this->cart->remove($rowid);
		redirect('mostrar_carrito');
	}
	public function remove($rowid){
		$this->cart->remove($rowid);
		redirect('carrito');
	}

	
    //Actualiza el carrito que se muestra
	
	//Muestra los detalles de la venta y confirma(función guarda_compra())
	public function comprarCarrito(){
		$session_data = $this->session->userdata('usuario');
		$data['id_usuario'] = $session_data['id_usuario'];
		$total = $this->cart->total();		
		$venta = array(
			'fecha' 		=> date('Y-m-d'),
			'usuario_id' 	=> $data['id_usuario'],
			'total_venta'	=> $total
		);	
		$venta_id = $this->carrito_model->insert_venta($venta); //inserta en la tabla venta_cabecera		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$venta_detalle = array(
					'venta_id' 		=> $venta_id,
					'producto_id' 	=> $item['id'],
					'cantidad' 		=> $item['qty'],
					'precio' 		=> $item['price'],
					'total' 		=> $item['subtotal']
					);
            
            	$cust_id = $this->carrito_model->insert_venta_detalle($venta_detalle); //inserta en la tabla venta_detalle

            	//Descuenta del stock y lo guarda en la base de datos
            	$producto = $this->productos_model->edit_producto($item['id']);
            	foreach ($producto->result() as $row) 
				{
					$stock = $row->stock;
				}

            	$stock_edit = $stock - 	$item['qty'];

            	$stock_nuevo = array(
            		'stock'	=> $stock_edit
            		);

            	$modifica = $this->productos_model->actualizar_productos($stock_nuevo,$item['id']);

			endforeach;
		endif;	

		$final = $this->cart->destroy();
		redirect('detalleVenta');
	}
    //Guarda los datos de la venta en la base de datos    
    
    //Borra los datos del carrito
    public function actualizar_carrito(){
		$data = $this->input->post();

		$this->cart->update($data); 
		redirect('carrito','refresh');
	}

	public function eliminarCarrito() {
		$this->cart->destroy();
		
		redirect('carrito');
	}

	public function detalleVenta(){
		$id_venta = $this->uri->segment(2);
		//$data=$this->session->userdata('usuario');
		$compra['compra']=$this->carrito_model->ver_compraId($id_venta);
		$titulo = array('titulo' => 'Detalle de Compra');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menuUser_view');
		$this->load->view('Nuevo/detalle',$compra);
		$this->load->view('partes/footer_view');
	}
}