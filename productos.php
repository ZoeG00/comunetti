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
<h3 class="text-center">Productos<a href="nuevo-productos.php" class="btn btn-success mx-2">+ Crear Nuevo</a></h3>
<p class="text-center">Precio x cantidad</p>
<div class="d-flex justify-content-center">
  <table class="table table-bordered table-striped w-75">
    <thead>
      <tr class="table-light">
        <th class="p-2">Productos</th>
        <th class="p-2">Unidad</th>
        <th class="p-2">Porcion x1</th>
        <th class="p-2">Porcion x2</th>
        <th class="p-2">Porcion x3</th>
        <th class="p-2">Porcion x4</th>
        <th class="p-2">Docena</th>
        <th class="p-2">Kilo</th>
        <th class="p-2">Bandeja</th>
        <th class="p-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM comunetti.productos";
      $resultados_productos = mysqli_query($conexion, $query);
      while ($row = mysqli_fetch_array($resultados_productos)) { ?>
        <tr>
          <td><?php echo $row['producto'] ?></td>
          <td><?php echo $row['unidad'] ?></td>
          <td><?php echo $row['porcionx1'] ?></td>
          <td><?php echo $row['porcionx2'] ?></td>
          <td><?php echo $row['porcionx3'] ?></td>
          <td><?php echo $row['porcionx4'] ?></td>
          <td><?php echo $row['docena'] ?></td>
          <td><?php echo $row['kilo'] ?></td>
          <td><?php echo $row['bandeja'] ?></td>
          <td class="d-flex justify-content-between">
            <a href="editar-productos.php?id=<?php echo $row['id'] ?>" class="btn btn-success mx-2">Editar</a>
            <a href="eliminar-productos.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
include("includes/footer.php");
?>