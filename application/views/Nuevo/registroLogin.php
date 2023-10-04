<main>
    <section class="contenedor_todo">
        <div class="caja_trasera">
            <div class="caja_trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la pagina</p>
                <button id="btn_iniciar-sesion">Iniciar Sesión</button>
            </div>

            <div class="caja_trasera-registro">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Registrate para que puedas iniciar sesión</p>
                <button id="btn_registrarse">Registrarse</button>
            </div>
        </div>
        <!--formulario de login y regiostro-->
        <div class="contenedor_login-registro">
            <!--Login-->
            <form action="<?php echo base_url();?>login" method="POST" class="formularioLogin">
                <h2>Iniciar Sesión</h2>
                <input type="email" id="correo" placeholder="Correo" name="correoLogin" autofocus="autofocus"  value="<?php echo set_value('correo') ;?>">
                <span class="text-danger"><?php echo form_error('correo');?></span>
                <input type="password" id="pass" placeholder="Contraseña" name="passLogin" autofocus="autofocus" value="<?php echo set_value('pass') ;?>">
                <span class="text-danger"><?php echo form_error('pass');?></span>
                <button>Entrar</button> 
            </form>
            <!--Registro-->
            <form action="<?php echo base_url();?>registro" method="POST" class="formularioRegistro" >
                <h2>Registrarse</h2>
                <input type="text" id="nombre" class="form-control"  placeholder="Nombre" name="nombre" autofocus="autofocus" value="<?php echo set_value('nombre') ;?>">                
                <span class="text-danger"><?php echo form_error('nombre');?></span>
                <input type="text" id="apellido" class="form-control" placeholder="Apellido" name="apellido" autofocus="autofocus"  value="<?php echo set_value('apellido') ;?>">
                <span class="text-danger"><?php echo form_error('apellido');?></span>
                <input type="email" id="correo" class="form-control" placeholder="Correo Electronico" name="correo" autofocus="autofocus"  value="<?php echo set_value('correo') ;?>">
                <span class="text-danger"><?php echo form_error('correo');?></span>
                <input type="text" id="usuario" class="form-control" placeholder="Usuario" name="usuario" autofocus="autofocus" value="<?php echo set_value('usuario') ;?>">
                <span class="text-danger"><?php echo form_error('usuario');?></span>
                <input type="password" id="pass" class="form-control" placeholder="Contraseña" name="pass" autofocus="autofocus" value="<?php echo set_value('pass') ;?>">
                <span class="text-danger"><?php echo form_error('pass');?></span>
                <button>Registrarse</button>
            </form>
        </div>
    </section>
</main>