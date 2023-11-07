<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body start-50 mb-4">
                <div class="col-md-11">
                    <div class="form-group p-2">
                        <p class="text-success text-center">CREAR NUEVO PRODUCTO:</p>
                        <form method="post" class="p-2">
                            <input name="producto" placeholder="nombre del producto" class="form-control m-2"></input>
                            <input name="unidad" placeholder="precio unitario" class="form-control m-2"></input>
                            <input name="porcionx1" placeholder="precio x1" class="form-control m-2"></input>
                            <input name="porcionx2" placeholder="precio x2" class="form-control m-2"></input>
                            <input name="porcionx3" placeholder="precio x3" class="form-control m-2"></input>
                            <input name="porcionx4" placeholder="precio x4" class="form-control m-2"></input>
                            <input name="docena" placeholder="precio docena" class="form-control m-2"></input>
                            <input name="kilo" placeholder="precio kilo" class="form-control m-2"></input>
                            <input name="bandeja" placeholder="precio bandeja" class="form-control m-2"></input>
                            <button name="crear" class="form-control btn btn-success m-2">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST["crear"])) {
                if (
                    strlen($_POST["producto"]) >= 1 &&
                    strlen($_POST["unidad"]) >= 1 &&
                    strlen($_POST["porcionx1"]) >= 1 &&
                    strlen($_POST["porcionx2"]) >= 1 &&
                    strlen($_POST["porcionx3"]) >= 1 &&
                    strlen($_POST["porcionx4"]) >= 1 &&
                    strlen($_POST["docena"]) >= 1 &&
                    strlen($_POST["kilo"]) >= 1 &&
                    strlen($_POST["bandeja"]) >= 1
                ) {
                    $producto = trim($_POST["producto"]);
                    $unidad = trim($_POST["unidad"]);
                    $porcionx1 = trim($_POST["porcionx1"]);
                    $porcionx2 = trim($_POST["porcionx2"]);
                    $porcionx3 = trim($_POST["porcionx3"]);
                    $porcionx4 = trim($_POST["porcionx4"]);
                    $docena = trim($_POST["docena"]);
                    $kilo = trim($_POST["kilo"]);
                    $bandeja = trim($_POST["bandeja"]);
                    $consulta = "INSERT INTO `productos`(producto, unidad, porcionx1, porcionx2, porcionx3, porcionx4, docena, kilo, bandeja) VALUES ('$producto','$unidad','$porcionx1',' $porcionx2','$porcionx3',' $porcionx4',' $docena','$kilo',' $bandeja')";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        echo ("Formulario enviado con exito");
                    }
                }
                $_SESSION['message'] = "Se ha cargado correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: productos.php");
            }
            ?>
            <?php
            include("includes/footer.php");
            ?>