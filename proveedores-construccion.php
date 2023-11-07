<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset();
} ?>
<h3 class="mx-2 text-center">Proveedores Construcción<a href="nuevo-prov-construccion.php" class="btn btn-success mx-2">+ Crear Nuevo</a></h3>
<div class="d-flex justify-content-center">
    <table class="table table-bordered table-striped w-75">
        <thead>
            <tr class="table-light">
                <th class="p-2">Nombre</th>
                <th class="p-2">Rubro</th>
                <th class="p-2">Direccion</th>
                <th class="p-2">Telefono</th>
                <th class="p-2">Correo electronico</th>
                <th class="p-2">Alias</th>
                <th class="p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM comunetti.proveedoresconstruccion";
            $resultados_proveedores = mysqli_query($conexion, $query);
            while ($row = mysqli_fetch_array($resultados_proveedores)) { ?>
                <tr>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['rubro'] ?></td>
                    <td><?php echo $row['direccion'] ?></td>
                    <td><?php echo $row['telefono'] ?></td>
                    <td><?php echo $row['correo'] ?></td>
                    <td><?php echo $row['alias'] ?></td>
                    <td class="d-flex justify-content-between p-full">
                        <a href="editar-prov-construccion.php?id=<?php echo $row['id'] ?>" class="btn btn-success mx-2">Editar</a>
                        <a href="eliminar-prov-construccion.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include("includes/footer.php");
?>