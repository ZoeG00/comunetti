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
                        <p class="text-success text-center">CREAR NUEVO PROVEEDOR:</p>
                        <form method="post" class="p-2">
                            <input name="nombre" class="form-control m-2" placeholder="Nombre"></input>
                            <input name="rubro" class="form-control m-2" placeholder="Rubro"></input>
                            <input name="direccion" class="form-control m-2" placeholder="Direccion"></input>
                            <input name="telefono" class="form-control m-2" placeholder="Telefono"></input>
                            <input name="correo" class="form-control m-2" placeholder="Correo Electronico"></input>
                            <input name="alias" class="form-control m-2" placeholder="Alias"></input>
                            <button name="crear" class="form-control btn btn-success m-2">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST["crear"])) {
                if (
                    strlen($_POST["nombre"]) >= 1 &&
                    strlen($_POST["rubro"]) >= 1 &&
                    strlen($_POST["direccion"]) >= 1 &&
                    strlen($_POST["telefono"]) >= 1 &&
                    strlen($_POST["correo"]) >= 1 &&
                    strlen($_POST["alias"]) >= 1
                ) {
                    $nombre = trim($_POST["nombre"]);
                    $rubro = trim($_POST["rubro"]);
                    $direccion = trim($_POST["direccion"]);
                    $telefono = trim($_POST["telefono"]);
                    $correo = trim($_POST["correo"]);
                    $alias = trim($_POST["alias"]);
                    $consulta = "INSERT INTO `proveedoresconstruccion`(nombre, rubro, direccion, telefono, correo, alias) VALUES ('$nombre','$rubro','$direccion','$telefono','$correo','$alias')";
                    $resultado = mysqli_query($conexion, $consulta);
                    if ($resultado) {
                        echo ("Formulario enviado con exito");
                    }
                }
                $_SESSION['message'] = "Se ha cargado correctamente";
                $_SESSION['message_type'] = "success";
                header("Location: proveedores-construccion.php");
            }
            ?>
            <?php
            include("includes/footer.php");
            ?>