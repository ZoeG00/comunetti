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
                        <p class="text-success text-center">CREAR NUEVO PERSONAL:</p>
                        <form method="post" class="p-2">
                            <input name="nombre" class="form-control m-2" placeholder="Nombre"></input>
                            <input name="DNI" class="form-control m-2" placeholder="Dni"></input>
                            <input name="domicilio" class="form-control m-2" placeholder="Domicilio"></input>
                            <input name="celular" class="form-control m-2" placeholder="Celular"></input>
                            <input name="cuit" class="form-control m-2" placeholder="Cuit"></input>
                            <input name="obrasocial" class="form-control m-2" placeholder="Obra Social"></input>
                            <input name="email" class="form-control m-2" placeholder="Email"></input>
                            <input name="fechainicio" class="form-control m-2" placeholder="Fecha de inicio"></input>
                            <input name="fechanacimiento" class="form-control m-2" placeholder="Fecha de nacimiento"></input>
                            <button name="crear" class="form-control btn btn-success m-2">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST["crear"])) {
                if (
                    strlen($_POST["nombre"]) >= 1 &&
                    strlen($_POST["DNI"]) >= 1 &&
                    strlen($_POST["domicilio"]) >= 1 &&
                    strlen($_POST["celular"]) >= 1 &&
                    strlen($_POST["cuit"]) >= 1 &&
                    strlen($_POST["obrasocial"]) >= 1 &&
                    strlen($_POST["email"]) >= 1 &&
                    strlen($_POST["fechainicio"]) >= 1 &&
                    strlen($_POST["fechanacimiento"]) >= 1
                ) {
                    $nombre = trim($_POST["nombre"]);
                    $DNI = trim($_POST["DNI"]);
                    $domicilio = trim($_POST["domicilio"]);
                    $celular = trim($_POST["celular"]);
                    $cuit = trim($_POST["cuit"]);
                    $obrasocial = trim($_POST["obrasocial"]);
                    $email = trim($_POST["email"]);
                    $fechainicio = trim($_POST["fechainicio"]);
                    $fechanacimiento = trim($_POST["fechanacimiento"]);
                    $consulta = "INSERT INTO `personal`(nombre, dni, domicilio, celular, cuit, obrasocial, email, fechainicio, fechanacimiento) VALUES ('$nombre','$DNI','$domicilio',' $celular','$cuit',' $obrasocial',' $email','$fechainicio',' $fechanacimiento')";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        echo ("Formulario enviado con exito");
                    }
                }
                $_SESSION['message'] = "Se ha cargado correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: datos-personal.php");
            }
            ?>
            <?php
            include("includes/footer.php");
            ?>