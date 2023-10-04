<br>
<?php if(empty($productos)){?>
<h3 class="text-center">Productos sin stock en estos momentos disculpe las molestias</h3>
<?php }else{?>
<section class="productos">
    <div class="container-fluid">        
            <div class="card-group">
                <?php foreach($productos as $producto){?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo base_url('./uploads/imagenes/'.$producto->imagen); ?>" name="imagen" class="card-img-top" width = "150px" height = "300px">
                            <div class="card-body">
                                <!--ID_Producto-->
                                <input readonly type="hidden" name="id_producto" value="<?php echo $producto->id_producto;?>"">
                                <h4 name="nombre" class="card-title"><?php echo $producto->nombre; ?></h5>                            
                                <p name="precio" class="card-text">$ <?php echo $producto->precio; ?></p>
                                <div>
                                    <?php 
                                    if($this->session->userdata('usuario')){?>
                                        <form method="post" action="<?php echo base_url('agregarCarrito')?>">
                                            <button type="form-submit" id='producto' name='producto' class="btn btn-warning">Agregar A Carrito</button>
                                            <?php   
                                                echo form_hidden('imagen',$producto->imagen);
                                                echo form_hidden('id_producto',$producto->id_producto);
                                                echo form_hidden('nombre',$producto->nombre); 
                                                echo form_hidden('precio',$producto->precio)?>
                                        </form>
                                    <?php }else{?>
                                        <a href="<?php echo base_url('detalleProducto').$producto->id_producto;?>" class="btn btn-primary" >ver producto</a>
                                    <?php }?>                                
                                </div>                                             
                            </div>
                        </div>
                        <br>
                    </div>                
                <?php }?>
            </div>
    </div>
</section>
<?php }?>