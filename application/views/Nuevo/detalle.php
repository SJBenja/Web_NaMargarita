<h1>Usted compro los sigientes productos</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detalle de la compra</h5>
            <div class="d-flex justify-content-center" style="background-image: url('assets/img/fondo1.jpg')">
                <table class="table table-borded table-striped table-hover table-responsive">
                    <thead>
                        <tr>
                        <th scope="col">Codigo Compra</th>
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
                                <th scope="row"><?php echo $productos->venta_id;?></th>
                                <td><?php echo $productos->id_detalle;?></td>
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
            <div class="form text-center">
                <a href="#" class="btn btn-secondary" type="button">Descargar Factura</a>
                <a href="<?php echo base_url('productosU'); ?>" class="btn btn-secondary" type="button">Seguir Comprando</a>
            </div>
            
        </div>
    </div>
</div>