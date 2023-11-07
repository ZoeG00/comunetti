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
                        <p class="text-success text-center">AGREGAR GASTO:</p>
                        <form method="post" class="p-2">
                            <input name="fecha" class="form-control m-2" placeholder="Fecha"></input>
                            <input name="concepto" class="form-control m-2" placeholder="Concepto"></input>
                            <input name="total" class="form-control m-2" placeholder="Total"></input>
                            <button name="agregar" class="form-control btn btn-success m-2">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST["agregar"])) {
                if (
                    strlen($_POST["fecha"]) >= 1 &&
                    strlen($_POST["concepto"]) >= 1 &&
                    strlen($_POST["total"]) >= 1 
                ) {
                    $fecha = trim($_POST["fecha"]);
                    $concepto = trim($_POST["concepto"]);
                    $total = trim($_POST["total"]);
                    $consulta = "INSERT INTO `gastosdepto2023`(fecha, concepto, total) VALUES ('$fecha', '$concepto', '$total')";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        echo ("Formulario enviado con exito");
                    }
                }
                $_SESSION['message'] = "Se ha cargado correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: gastosdepto2023.php");
            }
            ?>
            <?php
            include("includes/footer.php");
            ?>