<h1>Aqui van las ventas que se realizaron</h1>
<div class="container-fuid">
    <table class="table table-light table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Cantidad de Productos</th>
                <th>Total de compra</th>                
                <th>Fecha</th>                
                <th>Acciones</th>
            </tr>
        </thead>
        
            <tbody>
                <?php foreach ($ventas as $venta){;?>                       
                    <tr>
                        <th scope="row"><?php echo $venta->id_ventas;?></th>
                        <td><?php echo $venta->apellido?>, <?php echo $venta->nombre?></td>
                        <td><?php echo $this->carrito_model->cantidad_compra($venta->id_ventas)?></td>
                        <td>$ <?php echo $venta->total_venta;?></td>
                        <td><?php echo $venta->fecha;?></td>
                        <td>
                            <a href="<?php echo base_url('detalleVentasU').$venta->id_ventas; ?>" class="btn btn-outline-primary" type="button">
                                <i class="far fa-file-alt">
                                    <img src="assets/iconos/detalle.svg" alt="" while=25 height=25>            
                                </i>
                                Ver Detalle</a>
                        </td>                                                    
                    </tr> 
                <?php };?>
       
            </tbody>
    </table>    