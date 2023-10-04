<?php $usuario = $this->session->userdata('usuario');?>
<section class="conteiner-nav">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand font-weight-bold text-center" href="<?php echo base_url('listaProductos');?>">ÑaMargarita</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle font-weight-bold" 
        href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('listaProductos'); ?>">Productos actuales</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('altaProductos'); ?>">Alta de productos</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('bajaProductos'); ?>">Productos Eliminados</a>
        </div>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('controlVentas'); ?>">Control de Ventas</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('consultas'); ?>">Consultas</a>
      </li> 
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('usuarios'); ?>">Control de Usuarios</a>
      </li>       
    </ul>
    
  </div>
  <form class="form-inline my-2 my-lg-0">        
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">      
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle font-weight-bold" 
            href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $usuario['usuario_nombre']?>
          </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item font-weight-bold" href="<?php echo base_url('cerrarSesion'); ?>">Cerrar Sesion</a>
              
            </div>
        </li>  
      </ul>     
    </div>
  </form>    
</nav>

   
</section>

 