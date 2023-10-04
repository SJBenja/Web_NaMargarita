<hr class="featurette-divider">
    <section class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Contacto</h2>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0 text-aling-center text-justify">
                            <p class="md-4">Lunes a Viernes de 8 a 12hs y de 16 a 20 hs</p>
                            <ul class="infoContacto">
                                <li class="contact-item">
                                <a><i class="fas fa-user-check"><img src="assets/iconos/user-check-solid.svg" alt="" while=20 height=20> Margarita Productos</i></a></li>                                
                                <li class="contact-item">
                                <a><img src="assets/iconos/qrcode.svg" alt="" while=20 height=20> 30-5566332115-0
                                </a></li>
                                <li class="contact-item">                                    
                                    <a href="#" >
                                    <img src="assets/iconos/whatsapp-brands.svg" alt="" while=20 height=20>
                                    Tel: 3794468785</a>
                                </li>
                                <li class="contact-item">
                                    <a href=""><i class="fas fa-at">
                                    <img src="assets/iconos/arroba.svg" alt="" while=20 height=20> margarita.productos@gmail.com</i></a>
                                </li>
                                <li class="contact-item">
                                    <a href="https://goo.gl/maps/yZKPU7bReckVmaqN7"><i class="fas fa-map-marked-alt"><img src="assets/iconos/map.svg" alt="" while=20 height=20> San Juan 783, W3400CBE, W3400CBE Corrientes</i></a>
                                </li>
                                <li class="contact-item">
                                    <a href="https://www.instagram.com/margarita.productos/" >
                                        <img src="assets/iconos/instagram.svg" alt="" while=20 height=20> Visita nuestro instagram para mas informacion
                                        </a>
                                </li>
                            
                            </ul>
                        </blockquote>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header text-center">
                        <h2>Consulta</h2>
                    </div>
                    <div class="card-body ">
                        <blockquote class="blockquote mb-0 text-aling-center text-justify ">
                            <form class="w-100 mx-auto" method="POST" action="<?php echo base_url('consulta');?>" enctype="multipart/form-data">
                                 <!--perfil_usuario-->
                                 <input type="hidden" name="perfil_id" value="3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nombre</label>
                                    <input type="text"  name="nombre" class="form-control" id="formGroupExampleInput" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Email</label>
                                    <input type="text"  name="correo" class="form-control" id="formGroupExampleInput2" placeholder="correo@correo.com">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Mensaje</label>
                                    <textarea class="form-control"  name="mensaje" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                                <!--fecha-->
                                <input readonly type="hidden" name="fecha" value="<?php echo date('Y-m-d')?>">
                                <div class="form-group">
                                    <div class="col-md-12 text-center">
                                        <button class="boton1 btn" type="submit">Enviar</button>
                                    </div>
                                </div>
                               
                                
                            </form>
                        </blockquote>
                    </div>
                </div>                
            </div>
        </div>
    </section>