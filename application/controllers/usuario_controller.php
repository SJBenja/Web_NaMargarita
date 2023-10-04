<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {
	
    function __construct() {
		parent::__construct();
		$this->load->model('usuarios_model');
				
	}

	public function registroLogin(){	
			
		$titulo = array('titulo' => 'Login y Registro');
		$this->load->view('partes/header_view',$titulo);
		$this->load->view('partes/menu_view');
		$this->load->view('nuevo/registroLogin');
		$this->load->view('partes/footer_view');
	}
	
/*Inicio funcion de registro */
	public function registrar_usuario(){
		$this->form_validation->set_rules('nombre', 'Ingrese su nombre', 'required');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');

		$this->form_validation->set_rules('apellido', 'Ingrese su Apellido', 'required');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		
		$this->form_validation->set_rules('correo', 'Correo', 'required|valid_email|is_unique[usuarios.correo]');
		$this->form_validation->set_message('valid_correo', 'El campo %s debe ser un correo válido');
		$this->form_validation->set_message('is_unique', 'cliente se encuentra registrado');
		
		$this->form_validation->set_rules('usuario', 'usuario', 'required|is_unique[usuarios.usuario]');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('is_unique', 'cliente se encuentra registrado');

		$this->form_validation->set_rules('pass', 'Contraseña invalida', 'trim|required|min_length[8]');
		$this->form_validation->set_message('min_length', 'El campo %s de contener como mínimo %d caracteres');
		//$this->form_validation->set_rules('passconf', 'Confirmar password', 'trim|required|matches[password]');
		//$this->form_validation->set_message('matches','Las contraseñas no coinciden');

		if ($this->form_validation->run() == FALSE){
			$this->registroLogin();
		}else{
			$this->insertar_usuario();
		}
	}
	public function insertar_usuario(){
		$data = array (
			'nombre'=> $this->input->post('nombre'),
			'apellido'=> $this->input->post('apellido'),
			'correo'=> $this->input->post('correo'),
			'usuario'=> $this->input->post('usuario'),
			'pass'=> base64_encode($this->input->post('pass')),
			'idPerfil' => 2,
			'estado' => 1
		);			
			$this->usuarios_model->guardar_usuario($data);
			echo 
				'<script>
					alert("Usuario registrado exitosamente ahora puede iniciar sesion");
				</script>';
			redirect('registroLogin');
		}
	/*Fin registro de usuario */	

	/*Inicio para el login de usuarios */
	public function iniciar_sesion(){
		$this->form_validation->set_rules('correoLogin', 'Correo', 'trim|required');
		$this->form_validation->set_rules('passLogin', 'pass', 'trim|required|callback_verificar_password');
		$this->form_validation->set_message('required','El campo %s es obligatorio');
		$this->form_validation->set_message('verificar_password','El usuario o contraseña son incorrectos');

		if($this->form_validation->run() == FALSE){				
			$this->registroLogin();
		}else{			
			$this->usuario_logueado();
		}
	}
	function verificar_password($pass){
		//Verifgicar que el usuario exista
		$correo = $this->input->post('correoLogin');
		$pass = $this->input->post('passLogin');
		
		$usuario = $this->usuarios_model->buscar_usuario($correo,base64_encode($pass));

		if($usuario){
			$this->crear_sesion($usuario);
			return true;
		}else{
			$this->form_validation->set_message('verificar_pasword', 
			'Usuario y/o Contraseña incorrectos');
			return false;
		}
	}

	public function crear_sesion($usuario){
		$datos_usuario = array(
			'id_usuario' => $usuario->id_usuario,
			'nombre' => $usuario->nombre,
			'apellido' => $usuario->apellido,
			'correo' => $usuario->correo,
			'usuario_nombre'=>$usuario->usuario,
			'perfil' => $usuario->idPerfil,
			'estado' => $usuario->estado,
			'logueado' => TRUE				
		);
		$datos_cliente=array(
			'usuario_id' => $usuario->id_usuario,
			
		);
		$this->session->set_userdata('usuario',$datos_usuario);

		$this->usuarios_model->guardar_cliente($datos_cliente);
	}

	public function usuario_logueado(){
		//se verifica el perfil del usuario para redireccionar a la pagina correspondiente
		$datos = $this->session->userdata('usuario');
		//var_dump($datos['nombre']);
		switch($datos['perfil']){
			case '1':
				
				redirect('listaProductos');
				break;
			case '2':
				redirect('indexU');
				break;
		}
	}
	/*Fin para el login de usuarios */

	public function insertar_consulta(){
		$consulta = array(
			'usuario'=> $this->input->post('nombre'),
			'correo'=> $this->input->post('correo'),
			'perfil_id'=>$this->input->post('perfil_id'),
			'mensaje'=> $this->input->post('mensaje'),
			'fecha' => $this->input->post('fecha'),
			'estado' => 1
		);			
			$this->load->model('usuarios_model');
			$this->usuarios_model->guardar_consulta($consulta);			
			echo "<script> alert('Consulta enviada correctamente. Le contestaremos a la brevedad');</script>";
			
			$datos = $this->session->userdata('usuario');		
			if($datos){
				redirect('consultaU');
			}else{
				redirect('contacto');
			}
		}

	/*Cerrar Session */
	public function cerrar_sesion(){
		$this->session->sess_destroy();
		redirect('index');
	}

	public function actualizarUsuario(){

		$this->form_validation->set_rules('direccion', 'Ingrese su direccion', 'required');
		$this->form_validation->set_rules('telefono', 'Ingrese su telefono', 'required|numeric');
		$this->form_validation->set_rules('codPostal', 'Ingrese su codigo postal', 'required|numeric');
		$this->form_validation->set_rules('ciudad', 'Ingrese su ciudad', 'required');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio');
		$this->form_validation->set_message('numeric', 'El campo %s debe ser un valor númerico');

		if ($this->form_validation->run() == FALSE){
			redirect('miCuenta');
		}else{
			$this->actualizar();
		}	
	}

	public function actualizar(){
		$usuario_id = $this->input->post('id');
			$data = array(
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'codigo_postal' => $this->input->post('codPostal'),
				'ciudad' => $this->input->post('ciudad'),
			);
			$this->usuarios_model->actualizarDatos($usuario_id,$data);
			redirect('miCuenta');
	}

}