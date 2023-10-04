<hr class="featurette-divider">
    <!--Pie de pagina general-->

<footer class="static bootom">
    <div>
        <?php 
            if($this->session->userdata('usuario')){?>
            <div class="row">       
                <div class="col partFooter">
                    <h4>Ña Margarita</h4>
                    <a href="<?php echo base_url('quienesSomosU'); ?>">Quienes Somos</a>
                    <a href="<?php echo base_url('terminosU');?>">Terminos y Usos</a>
                </div>
                <div class="col partFooter">
                    <h4>Comercializacion</h4>
                    <a href="<?php echo base_url('comoComprarU')?>">Como Comprar</a>
                    <a href="<?php echo base_url('enviosU')?>">Envios</a>
                    <a href="<?php echo base_url('formaPagoU')?>">Formas de pago</a>
                </div>
                <div class="col partFooter">
                    <h4>Informacion de la Tienda</h4>
                    <a href="<?php echo base_url('contactoU'); ?>">Contacto</a>
                </div>
                <div class="col partFooter">
                    <h4>Suscribite</h4>
                    <div class="social-media">
                        <a href="https://www.facebook.com/namargarita.productos/" target="_blank" class="btn btn-social-icon btn-facebook">
                            <img src="assets/iconos/facebook.svg" alt="" while=20 height=20>
                        </a>
                        
                        <a href="https://www.instagram.com/margarita.productos/" target="_blank" class="btn btn-social-icon btn-instagram">
                            <img src="assets/iconos/instagram.svg" alt="" while=20 height=20>
                        </a>
                    </div>
                </div>
            </div>
                <?php }else{?>
            <div class="row">
                <div class="col partFooter">
                    <h4>Ña Margarita</h4>
                    <a href="<?php echo base_url('quienesSomos'); ?>">Quienes Somos</a>
                    <a href="<?php echo base_url('terminos');?>">Terminos y Usos</a>
                </div>
                <div class="col partFooter">
                    <h4>Comercializacion</h4>
                    <a href="<?php echo base_url('comoComprar')?>">Como Comprar</a>
                    <a href="<?php echo base_url('envios')?>">Envios</a>
                    <a href="<?php echo base_url('formaPago')?>">Formas de pago</a>
                </div>
                <div class="col partFooter">
                    <h4>Informacion de la Tienda</h4>
                    <a href="<?php echo base_url('contacto'); ?>">Contacto</a>
                </div>
                <div class="col partFooter">
                    <h4>Suscribite</h4>
                    <div class="social-media">
                        <a href="https://www.facebook.com/namargarita.productos/" target="_blank" class="btn btn-social-icon btn-facebook">
                            <img src="assets/iconos/facebook.svg" alt="" while=20 height=20>
                        </a>
                        
                        <a href="https://www.instagram.com/margarita.productos/" target="_blank" class="btn btn-social-icon btn-instagram">
                            <img src="assets/iconos/instagram.svg" alt="" while=20 height=20>
                        </a>
                    </div>
                </div>
            </div>
        <?php }?>        
    </div>
    
</footer>
    <!-- JQuery -->
    <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
