
<section class="conteiner-nav">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand font-weight-bold text-center" href="<?php echo base_url('index');?>">ÑaMargarita</a>
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
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('productos'); ?>">Todos los Productos</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('yerbaMate'); ?>">Yerba Mate</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('vinos'); ?>">Vinos</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('dulces'); ?>">Dulces</a>
          <a class="dropdown-item font-weight-bold" href="<?php echo base_url('aderezos'); ?>">Aderezos</a>
        </div>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('quienesSomos'); ?>">Quienes Somos</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('contacto'); ?>">Contacto</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('comercializacion'); ?>">Comercializacion</a>
      </li>
      <li class="nav-item font-weight-bold active">
        <a class="nav-link" href="<?php echo base_url('terminos'); ?>">Terminos y Uso</a>
      </li>
      
    </ul>
    
  </div>
  <form class="form-inline my-2 my-lg-0">
      <button class="boton2 btn-outline" type="submit">
      <i class="far fa-user">
        <img src="assets/iconos/loggin.svg" alt="" while=25 height=25>
        <a href="<?php echo base_url('registroLogin')?>">Mi Cuenta</a>
      </i>
      </button>
    </form>
</nav>
   
</section>

 