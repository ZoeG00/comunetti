<?php
include("db-con.php");
?>
<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row =mysqli_fetch_array($resultado);
        $producto = $row['producto'];
        $unidad = $row['unidad'];
        $porcionx1 = $row['porcionx1'];
        $porcionx2 = $row['porcionx2'];
        $porcionx3 = $row['porcionx3'];
        $porcionx4 = $row['porcionx4'];
        $docena = $row['docena'];
        $kilo = $row['kilo'];
        $bandeja = $row['bandeja'];
    }
    $_SESSION['message'] = "Se ha editado la columna.";
    $_SESSION['message_type'] = "warning";
 }
if(isset($_POST['actualizar'])) {
    echo $nombre;
    $id = $_GET['id'];
    $producto = $_POST['producto'];
    $unidad = $_POST['unidad'];
    $porcionx1 = $_POST['porcionx1'];
    $porcionx2 = $_POST['porcionx2'];
    $porcionx3 = $_POST['porcionx3'];
    $porcionx4 = $_POST['porcionx4'];
    $docena = $_POST['docena'];
    $kilo = $_POST['kilo'];
    $bandeja = $_POST['bandeja'];
    

    $query = "UPDATE productos set producto = '$producto', unidad= '$unidad', porcionx1='$porcionx1', porcionx2='$porcionx2', porcionx3='$porcionx3', porcionx4='$porcionx4', docena='$docena', kilo='$kilo', bandeja='$bandeja' WHERE id = $id";
    mysqli_query($conexion, $query);
    header("Location: productos.php");
}

?>
<?php 
include("includes/header.php")
?>
<div class="col-md-4">
      <div class="card card-body start-100">
      <p class="text-success text-center">EDITAR:</p>
        <div class="form-group">
          <form action="editar-productos.php?id=<?php echo $_GET['id'];?>" method="post" class="p-2">
            <input name="producto" placeholder="nombre del producto" class="form-control m-2" value="<?php echo $producto; ?>"></input>
            <input name="unidad" placeholder="precio unitario" class="form-control m-2" value="<?php echo $unidad; ?>"></input>
            <input name="porcionx1" placeholder="precio x1" class="form-control m-2" value="<?php echo $porcionx1; ?>"></input>
            <input name="porcionx2" placeholder="precio x2" class="form-control m-2" value="<?php echo $porcionx2; ?>"></input>
            <input name="porcionx3" placeholder="precio x3" class="form-control m-2" value="<?php echo $porcionx3; ?>"></input>
            <input name="porcionx4" placeholder="precio x4" class="form-control m-2" value="<?php echo $porcionx4; ?>"></input>
            <input name="docena"placeholder="precio docena" class="form-control m-2" value="<?php echo $docena; ?>"></input>
            <input name="kilo" placeholder="precio kilo" class="form-control m-2" value="<?php echo $kilo; ?>"></input>
            <input name="bandeja" placeholder="precio bandeja" class="form-control m-2" value="<?php echo $bandeja; ?>"></input>
            <button name="actualizar" class="form-control btn btn-success m-2">Actualizar</button>
          </form>
        </div>
      </div>
    </div>
<?php 
include("includes/footer.php")
?>