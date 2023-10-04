
<h1>Historial de compras</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Detalles de compras</h5>
            
                <table class="table table-borded table-striped table-hover table-responsive text-center">
                    <thead>
                        <tr>
                            <th scope="col">Codigo Compra</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Cantidad de Productos</th>
                            <th scope="col">Total de la Compra</th>
                            <th colspan="1"> </td>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php foreach ($compra as $compras){;?>                       
                            <tr>
                                <th scope="row"><?php echo $compras->id_ventas;?></th>
                                <td><?php echo $compras->fecha;?></td>
                                <td><?php echo $this->carrito_model->cantidad_compra($compras->id_ventas)?></td>
                                <td>$ <?php echo $compras->total_venta;?></td>
                                <td>
                                    <a href="<?php echo base_url('detalleVentas').$compras->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                                    <i class="far fa-file-alt">
                                        <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                                    </i>
                                    Ver Detalle</a>
                                </td>                                                    
                            </tr> 
                        <?php };?>
                     </tbody>
                </table>
            
            <div class="form text-center">
                
                <a href="<?php echo base_url('productosU'); ?>" class="btn btn-outline-info" type="button">
                    <i class="fas fa-cart-plus">
                        <img src="assets/iconos/carrito.svg" alt="" while=25 height=25>            
                    </i>
                    Seguir Comprando</a>
            </div>
            
        </div>
    </div>
</div>