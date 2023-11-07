<?php
include("db-con.php");
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM proveedoresconstruccion WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $nombre = $row['nombre'];
        $rubro = $row['rubro'];
        $direccion = $row['direccion'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $alias = $row['alias'];
    }
    $_SESSION['message'] = "Se ha editado la columna.";
    $_SESSION['message_type'] = "warning";
}
if (isset($_POST['actualizar'])) {
    echo $nombre;
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $rubro = $_POST['rubro'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $alias = $_POST['alias'];

    $query = "UPDATE proveedoresconstruccion set nombre = '$nombre', rubro= '$rubro', direccion='$direccion', telefono='$telefono', correo='$correo', alias='$alias' WHERE id = $id";
    mysqli_query($conexion, $query);
    header("Location: proveedores-construccion.php");
}

?>
<?php
include("includes/header.php")
?>
<div class="col-md-4">
    <div class="card card-body start-100">
        <p class="text-success text-center">EDITAR:</p>
        <div class="form-group">
            <form action="editar-prov-construccion.php?id=<?php echo $_GET['id']; ?>" method="post" class="p-2">
                <input name="nombre" placeholder="nombre del proveedor" class="form-control m-2" value="<?php echo $nombre; ?>"></input>
                <input name="rubro" placeholder="rubro" class="form-control m-2" value="<?php echo $rubro; ?>"></input>
                <input name="direccion" placeholder="direccion" class="form-control m-2" value="<?php echo $direccion; ?>"></input>
                <input name="telefono" placeholder="telefono" class="form-control m-2" value="<?php echo $telefono; ?>"></input>
                <input name="correo" placeholder="correo" class="form-control m-2" value="<?php echo $correo; ?>"></input>
                <input name="alias" placeholder="alias" class="form-control m-2" value="<?php echo $alias; ?>"></input>
                <button name="actualizar" class="form-control btn btn-success m-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<?php
include("includes/footer.php")
?>