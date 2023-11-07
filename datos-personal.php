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
<h3 class="mx-2 text-center">Datos Personal<a href="nuevo-personal.php" class="btn btn-success mx-2">+ Crear Nuevo</a></h3>
<div class="d-flex justify-content-center">
  <table class="table table-bordered table-striped w-75">
    <thead>
      <tr class="table-light">
        <th class="p-2">Nombre</th>
        <th class="p-2">Dni</th>
        <th class="p-2">Domicilio</th>
        <th class="p-2">Celular</th>
        <th class="p-2">Cuit</th>
        <th class="p-2">Obra Social</th>
        <th class="p-2">Email</th>
        <th class="p-2">Fecha de inicio</th>
        <th class="p-2">Fecha de nacimiento</th>
        <th class="p-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM comunetti.personal";
      $resultados_personal = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($resultados_personal)) { ?>
        <tr>
          <td><?php echo $row['nombre'] ?></td>
          <td><?php echo $row['dni'] ?></td>
          <td><?php echo $row['domicilio'] ?></td>
          <td><?php echo $row['celular'] ?></td>
          <td><?php echo $row['cuit'] ?></td>
          <td><?php echo $row['obrasocial'] ?></td>
          <td><?php echo $row['email'] ?></td>
          <td><?php echo $row['fechainicio'] ?></td>
          <td><?php echo $row['fechanacimiento'] ?></td>
          <td class="d-flex justify-content-between p-4">
            <a href="editar-personal.php?id=<?php echo $row['id'] ?>" class="btn btn-success mx-2">Editar</a>
            <a href="eliminar-personal.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
include("includes/footer.php");
?>
