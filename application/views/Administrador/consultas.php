<h1>Aqui van las consultas de todos los usuarios</h1>
<div class="container-fuid">
    <table class="table table-light table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Perfil</th>
                <th>Consulta</th>
                <th>Fecha</th>                
                <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach($consultas as $consulta){?>
            <tbody>
                <tr>
                    <td><?php echo $consulta->id_consulta?></td>
                    <td><?php echo $consulta->usuario?></td>
                    <td><?php echo $consulta->correo?></td>
                    <td><?php echo $consulta->perfilTipo?></td>
                    <td><?php echo $consulta->mensaje?></td>
                    <td><?php echo $consulta->fecha?></td>
                    <td>
                        <a href="" class="btn btn-primary" type="button">Responder</a>             
                        <a href="" class="btn btn-danger" type="button">Borrar</a></td>
                
                </tr>
        <?php }?>
            </tbody>
    </table>    
</div>