<?php $usuario = $this->session->userdata('usuario');?>

<section class="conteiner-nav">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand font-weight-bold text-center" href="<?php echo base_url('indexU');?>">ÑaMargarita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle font-weight-bold" 
        href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('productosU'); ?>">Todos los Productos</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('yerbaMateU'); ?>">Yerba Mate</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('vinosU'); ?>">Vinos</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('dulcesU'); ?>">Dulces</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('aderezosU'); ?>">Aderezos</a>
        </div>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('quienesSomosU'); ?>">Quienes Somos</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('contactoU'); ?>">Contacto</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('consultaU'); ?>">Consultas</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('comercializacionU'); ?>">Comercializacion</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('terminosU'); ?>">Terminos y Uso</a>
      </li>
          
    </ul>
    
  </div>
  <form class="form-inline my-2 my-lg-0">        
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">      
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle font-weight-bold" 
            href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $usuario['apellido']?><?php echo ", "?><?php echo $usuario['nombre']?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item font-weight-bold" href="<?php echo base_url('miCuenta'); ?>">Mi cuenta</a>
            <a class="dropdown-item font-weight-bold" href="<?php echo base_url('misCompras'); ?>">Mis compras</a>              
            <a class="dropdown-item font-weight-bold" href="<?php echo base_url('cerrarSesion'); ?>">Cerrar Sesion</a>              
          </div>
        </li>  
      </ul>     
    </div>
  </form>    
    <form class="form-inline my-2 my-lg-0">
      <button class="boton2 btn-outline" type="submit">
        <a href="<?php echo base_url('carrito')?>">
          <i class="fas fa-cart-plus">
            <img src="assets/iconos/carrito.svg" alt="" while=25 height=25>            
          </i>
          Carrito (<?php echo $this->cart->total_items()?> )
        </a>
        
      </button>
    </form>
</nav>

   
</section>

 