<?php
include("db-con.php");
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM gastosdepto2023 WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $fecha = $row['fecha'];
        $concepto = $row['concepto'];
        $total = $row['total'];

        $_SESSION['message'] = "Se ha editado la columna.";
        $_SESSION['message_type'] = "warning";
    }
    if (isset($_POST['actualizar'])) {
        $id = $_GET['id'];
        $fecha = $_POST['fecha'];
        $concepto = $_POST['concepto'];
        $total = $_POST['total'];
        $query = "UPDATE gastosdepto2023 set fecha= '$fecha', concepto= '$concepto' total='$total' WHERE id = $id";
        mysqli_query($conexion, $query);
        header("Location: gastosdepto2023.php");
    }
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
                <input name="fecha" placeholder="Fecha" class="form-control m-2" value="<?php echo $fecha; ?>"></input>
                <input name="concepto" placeholder="Concepto" class="form-control m-2" value="<?php echo $concepto; ?>"></input>
                <input name="total" placeholder="Total" class="form-control m-2" value="<?php echo $total; ?>"></input>
                <button name="actualizar" class="form-control btn btn-success m-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>
<?php
include("includes/footer.php")
?>