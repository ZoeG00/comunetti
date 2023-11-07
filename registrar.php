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
    header("Location: datos.php");
}
