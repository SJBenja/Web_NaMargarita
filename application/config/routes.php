<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*Rutas de las paginas de las funciones */
$route['comercializacion'] = 'Index/comercializacion';
$route['quienesSomos'] = 'Index/qSomos';
$route['terminos'] = 'Index/terminos';
$route['contacto'] = 'Index/contacto';
$route['consulta'] = 'usuario_controller/insertar_consulta';
$route['comoComprar'] = 'Index/comoComprar';
$route['envios'] = 'Index/envios';
$route['formaPago'] = 'Index/formaPago';
$route['productos'] = 'Index/productos';
$route['detalleProducto(:num)'] = 'Index/detalleProducto/$1';
$route['yerbaMate'] = 'Index/yerbaMate';
$route['vinos'] = 'Index/vinos';
$route['dulces'] = 'Index/dulces';
$route['aderezos'] = 'Index/aderezos';


/*Control de login */
$route['registroLogin'] = 'usuario_controller/registroLogin';
$route['registro'] = 'usuario_controller/registrar_usuario';
$route['login'] = 'usuario_controller/iniciar_sesion';
$route['cerrarSesion'] = 'usuario_controller/cerrar_sesion';

/*Administrador*/
$route['listaProductos'] = 'productos_controller/listaProductos';
$route['altaProductos'] = 'productos_controller/altaProductos';
$route['alta'] = 'productos_controller/registrar_producto';
$route['modificacionProductos(:num)'] = 'productos_controller/modificacionProductos/$1';
$route['modificar(:num)'] = 'productos_controller/modificar/$1';
$route['baja/(:num)'] = 'productos_controller/bajaLogica/$1';
$route['activar/(:num)'] = 'productos_controller/activacionLogica/$1';
$route['bajaProductos'] = 'productos_controller/bajaProductos';
$route['controlVentas'] = 'Administrador/controlVentas';
$route['consultas'] = 'Administrador/consultas';
$route['usuarios'] = 'Administrador/usuarios';
$route['detalleUsuarios(:num)'] = 'Administrador/detalleUsuarios/$1';
$route['detalleVentasU(:num)'] = 'Administrador/detalleVentasU/$1';
$route['paginaError'] = 'Index/actualizacion';

/*Usuario Registrado*/
$route['indexU'] = 'UsuarioRegistrado/indexU';
$route['comercializacionU'] = 'UsuarioRegistrado/comercializacion';
$route['quienesSomosU'] = 'UsuarioRegistrado/qSomos';
$route['terminosU'] = 'UsuarioRegistrado/terminos';
$route['contactoU'] = 'UsuarioRegistrado/contacto';
$route['consultaU'] = 'UsuarioRegistrado/consulta';
$route['comoComprarU'] = 'UsuarioRegistrado/comoComprar';
$route['enviosU'] = 'UsuarioRegistrado/envios';
$route['formaPagoU'] = 'UsuarioRegistrado/formaPago';
$route['productosU'] = 'UsuarioRegistrado/productos';
$route['yerbaMateU'] = 'UsuarioRegistrado/yerbaMate';
$route['vinosU'] = 'UsuarioRegistrado/vinos';
$route['dulcesU'] = 'UsuarioRegistrado/dulces';
$route['aderezosU'] = 'UsuarioRegistrado/aderezos';
$route['misCompras'] = 'UsuarioRegistrado/misCompras';
$route['detalleVentas(:num)'] = 'UsuarioRegistrado/detalleVentas/$1';
$route['miCuenta'] = 'UsuarioRegistrado/miCuenta';
$route['actualizar'] = 'usuario_controller/actualizarUsuario/';

//Carrito
$route['carrito'] = 'carrito_controller/carrito';
$route['agregarCarrito'] = 'carrito_controller/agregarCarrito';
$route['actualizarCarrito'] = 'carrito_controller/actualizar_carrito';
$route['eliminarUnidad/(:num)'] = 'carrito_controller/remove/$';
$route['vaciarCarrito'] = 'carrito_controller/eliminarCarrito';
$route['comprarCarrito(:num)'] = 'carrito_controller/comprarCarrito/$1';
$route['detalleVenta'] = 'carrito_controller/detalleVenta';