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
<h3 class="mx-2 text-center">Gastos Departamentos 2023/ 2024<a href="nuevo-gastosdepto.php" class="btn btn-success mx-2">+ Crear Nuevo</a></h3>
<div class="d-flex justify-content-center">
    <table class="table table-bordered table-striped w-75">
        <thead>
            <tr class="table-light">
                <th class="p-2">Fecha</th>
                <th class="p-2">Concepto</th>
                <th class="p-2">Total</th>
                <th class="p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM comunetti.gastosdepto2023";
            $resultados_gastosdepto = mysqli_query($conexion, $query);
            while ($row = mysqli_fetch_array($resultados_gastosdepto)) { ?>
                <tr>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['concepto'] ?></td>
                    <td><?php echo $row['total'] ?></td>
                    <td>
            <a href="editar-gastosdepto.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Editar</a>
            <a href="eliminar-gastosdepto.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
          </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include("includes/footer.php");
?>