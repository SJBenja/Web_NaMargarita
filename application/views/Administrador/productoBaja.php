<h1>Aqui van todos los eliminados para activarlos</h1>
<div class="container-fuid">
    <table class="table table-light table-hover table-sm table-responsive-lg text-center">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Categoria</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <?php foreach($productos as $row){?>
        
        <tbody>
            <tr>
                <td><?php echo $row->id_producto; ?></td>
                <td><img src="<?php echo base_url('./uploads/imagenes/'.$row->imagen); ?>" class="img-thumbnail" width="100"></td>

                <td><?php echo $row->nombreCate; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->descripcion; ?></td>                
                <td>$ <?php echo $row->precio; ?></td>
                <td><?php echo $row->stock; ?></td>
                <td>
                
                <a href="<?php echo base_url('activar/').$row->id_producto;?>" class="btn btn-warning" type="button">Activar</a>                            
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>    
</div>