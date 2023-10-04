<?php $usuario = $this->session->userdata('usuario');?>
<div class="container col-8 justify-content-md-center">
    <div class="card ">
        <div class="card-header text-center">
            <h2>Consulta</h2>
        </div>
        <div class="card-body ">
            <blockquote class="blockquote mb-0 text-aling-center text-justify ">
                <form class="w-100 mx-auto" method="POST" action="<?php echo base_url('consulta');?>" enctype="multipart/form-data">
                    <!--ID_Producto-->
                    <input readonly type="hidden" name="perfil_id" value="<?php echo $usuario['perfil'];?>">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombre</label>
                        <input readonly type="text"  name="nombre" class="form-control" id="formGroupExampleInput" value="<?php echo $usuario['apellido'];?><?php echo ", ";?><?php echo $usuario['nombre'];?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Email</label>
                        <input readonly type="text"  name="correo" class="form-control" id="formGroupExampleInput2" value="<?php echo $usuario['correo'];?>">
                    </div>                                
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Mensaje</label>
                        <textarea class="form-control"  name="mensaje" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                     <!--fecha-->
                     <input type="hidden" name="fecha" value="<?php echo date('Y-m-d')?>">
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
                    