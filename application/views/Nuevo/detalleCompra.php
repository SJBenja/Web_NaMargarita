<h1>Productos Comprados</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalle de la compra</h5>
            <div class="d-flex justify-content">
                <table class="table table-borded table-striped table-hover table-responsive">
                    <thead>
                        <tr>                        
                            <th scope="col">Codigo Detalle</th>
                            <th scope="col">Nombre Producto</th>
                            <th scope="col">Unidades</th>
                            <th scope="col">Precio</th>
                            <th scope="col">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($compra as $productos){;?> 
                            <tr>                                
                                <th scope="row"><?php echo $productos->id_detalle;?></td>
                                <td><?php echo $productos->nombre;?></td>
                                <td><?php echo $productos->cantidad;?></td>
                                <td>$ <?php echo $productos->precio;?></td>
                                <td>$ <?php echo $productos->total;?></td>                        
                            </tr>
                        <?php };?>
                       
                     </tbody>
                </table>                
                <h5>Total de la compra: $<?php echo $productos->total_venta?></h5>
            </div><br>
            <div>
                <?php 
                    //se verifica el perfil del usuario para redireccionar a la pagina correspondiente
		            $datos = $this->session->userdata('usuario');
                    switch($datos['perfil']){
                        case '1':?>
                        <div class="form text-center">                           
                            <a href="<?php echo base_url('controlVentas'); ?>" class="btn btn-outline-primary" type="button">
                                <i class="fas fa-undo">
                                    <img src="assets/iconos/volver.svg" while=25 height=25>
                                </i>
                                Volver
                            </a>
                        </div>                            
                        <?php 
                            break;
                        case '2':?>
                            <div class="form text-center">
                                <a href="#" class="btn btn-warning" type="button">
                                    <i class="fas fa-file-download">
                                        <img src="assets/iconos/descargar.svg" while=25 height=25>
                                    </i>
                                    Descargar Factura
                                </a>
                                <a href="<?php echo base_url('misCompras'); ?>" class="btn btn-outline-primary" type="button">
                                    <i class="fas fa-undo">
                                        <img src="assets/iconos/volver.svg" while=25 height=25>
                                    </i>
                                    Volver a mis Compras
                                </a>
                            </div>                            
                        <?php break;}?>
            </div>    
        </div>
    </div>
</div>