    <section class="container">
        <div id="carouselExampleControls" class="carousel slide text-center" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carrucel/1.jpeg" class="d-block w-100" alt="Imagen1" while=108s0 height=480>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrucel/2.jpeg" class="d-block w-100" alt="Imagen2" while=108s0 height=480>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrucel/3.jpeg" class="d-block w-100" alt="Imagen3" while=108s0 height=480>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carrucel/4.jpg" class="d-block w-100" alt="Imagen3" while=108s0 height=480>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Atras</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        
    </section>

    <section>
    <hr class="featurette-divider">
    <div class="card">
        <div class="card-header text-center">
            <h2>Sobre Nosotros</h2>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0 text-justify">
                <p>Tenemos el agrado de invitarte a formar parte del lanzamiento de la Tienda Online. 
                Hace ya tiempo que venimos trabajando en el desarrollo de esta nueva opción para hacer llegar los productos elaborados por las Escuelas Agrotécnicas Salesianas ( EAS) 
                a cualquier persona que lo desea sin necesidad que ésta tenga a su alcance alguno de los Almacenes Don Bosco instalados en nuestras Obras.</p>
                <p>Todos los productos que encuentras en nuestra tienda son producidos de forma integral en Casas Salesianas de toda la Argentina, y elaborados con materias primas 
                provenientes de cultivos, tambos y fincas propias de la Obra, bajo los estándares de calidad más exigentes y amigables con el medio ambiente.
                        </p>      
            </blockquote>
        </div>
    </div>
    </section>
    
    <section class="product">
        <hr class="featurette-divider">
        <div class="card">
        <div class="card-header text-center">
            <h2>Productos en Promociones</h2>
        </div>
        <div class="card-body">
        <?php 
            if($this->session->userdata('usuario')){?>
            <blockquote class="blockquote mb-0 text-center text-justify">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <a href="<?php echo base_url('aderezosU'); ?>" class="href">
                            <div class="card-producto">
                                <img src="assets/img/promocion1.jpg" class="card-img-top img-fluid rounded-circle" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Saborizantes y Aderezos</h6>
                                    <p class="card-text text-center text-justify">Lo que no puede faltarte en tus comidas</p>    
                                </div>
                            </div>
                        </a>                        
                    </div>
                    <div class="col mb-4">
                        <a href="<?php echo base_url('vinosU'); ?>" class="href">
                            <div class="card-producto">
                                <img src="assets/img/promocion2.jpg" class="card-img-top img-fluid rounded-circle " alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Vinos a eleccion</h6>
                                    <p class="card-text text-center text-justify">Para acompañar en la mesa</p>    
                                </div>
                            </div>
                        </a>                        
                    </div>
            </blockquote>
            <?php }else{?>
            <blockquote class="blockquote mb-0 text-center text-justify">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-4">
                        <a href="<?php echo base_url('aderezos'); ?>" class="href">
                            <div class="card-producto">
                                <img src="assets/img/promocion1.jpg" class="card-img-top img-fluid rounded-circle" alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Saborizantes y Aderezos</h6>
                                    <p class="card-text text-center text-justify">Lo que no puede faltarte en tus comidas</p>    
                                </div>
                            </div>
                        </a>                        
                    </div>
                    <div class="col mb-4">
                        <a href="<?php echo base_url('vinos'); ?>" class="href">
                            <div class="card-producto">
                                <img src="assets/img/promocion2.jpg" class="card-img-top img-fluid rounded-circle " alt="...">
                                <div class="card-body">
                                    <h6 class="card-title">Vinos a eleccion</h6>
                                    <p class="card-text text-center text-justify">Para acompañar en la mesa</p>    
                                </div>
                            </div>
                        </a>                        
                    </div>
            </blockquote>
            <?php }?> 
        </div>
    </section>