<?php
include("db-con.php");
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM personal WHERE id = $id";
  $resultado = mysqli_query($conexion, $query);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $nombre = $row['nombre'];
    $DNI = $row['dni'];
    $domicilio = $row['domicilio'];
    $celular = $row['celular'];
    $cuit = $row['cuit'];
    $obrasocial = $row['obrasocial'];
    $email = $row['email'];
    $fechainicio = $row['fechainicio'];
    $fechanacimiento = $row['fechanacimiento'];
  }
  $_SESSION['message'] = "Se ha editado la columna.";
  $_SESSION['message_type'] = "warning";
}
if (isset($_POST['actualizar'])) {
  echo $nombre;
  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $DNI = $_POST['DNI'];
  $domicilio = $_POST['domicilio'];
  $celular = $_POST['celular'];
  $cuit = $_POST['cuit'];
  $obrasocial = $_POST['obrasocial'];
  $email = $_POST['email'];
  $fechainicio = $_POST['fechainicio'];
  $fechanacimiento = $_POST['fechanacimiento'];

  $query = "UPDATE personal set nombre = '$nombre', dni= '$DNI', domicilio='$domicilio', celular='$celular', cuit='$cuit', obrasocial='$obrasocial', email='$email', fechainicio='$fechainicio', fechanacimiento='$fechanacimiento' WHERE id = $id";
  mysqli_query($conexion, $query);
  header("Location: datos-personal.php");
}

?>
<?php
include("includes/header.php")
?>
<div class="col-md-4">
  <div class="card card-body start-100">
    <p class="text-success text-center">EDITAR:</p>
    <div class="form-group">
      <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="post" class="p-2">
        <input name="nombre" class="form-control m-2" value="<?php echo $nombre; ?>"></input>
        <input name="DNI" class="form-control m-2" value="<?php echo $DNI; ?>"></input>
        <input name="domicilio" class="form-control m-2" value="<?php echo $domicilio; ?>"></input>
        <input name="celular" class="form-control m-2" value="<?php echo $celular; ?>"></input>
        <input name="cuit" class="form-control m-2" value="<?php echo $cuit; ?>"></input>
        <input name="obrasocial" class="form-control m-2" value="<?php echo $obrasocial; ?>"></input>
        <input name="email" class="form-control m-2" value="<?php echo $email; ?>"></input>
        <input name="fechainicio" class="form-control m-2" value="<?php echo $fechainicio; ?>"></input>
        <input name="fechanacimiento" class="form-control m-2" value="<?php echo $fechanacimiento; ?>"></input>
        <button name="actualizar" class="form-control btn btn-success m-2">Actualizar</button>
      </form>
    </div>
  </div>
</div>
<?php
include("includes/footer.php")
?>