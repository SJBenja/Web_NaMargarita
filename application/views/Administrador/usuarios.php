<h1>Aqui van las usuarios de todos los usuarios</h1>
<div class="container-fuid">
    <table class="table table-light table-hover text-center">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Perfil</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Ciudad</th>
                <th>Codigo Postal</th>               
            </tr>
        </thead>
        <?php foreach($usuarios as $usuario){?>
            <tbody>
                <tr>
                    <td><?php echo $usuario->id_usuario?></td>
                    <td><?php echo $usuario->usuario?></td>
                    <td><?php echo $usuario->correo?></td>
                    <td><?php echo $usuario->perfilTipo?></td>
                    <td><?php echo $usuario->telefono?></td>
                    <td><?php echo $usuario->direccion?></td>
                    <td><?php echo $usuario->ciudad?></td>  
                    <td><?php echo $usuario->codigo_postal?></td>                         
                </tr>
        <?php }?>
            </tbody>
    </table>    
</div>