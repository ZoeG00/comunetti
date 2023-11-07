<?php
include('db-con.php');
?>
<?php
 if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM personal WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("Fail");
    }

    $_SESSION['message'] = "Eliminado";
    $_SESSION['message_type'] = "danger";
    header("Location: datos-personal.php");
 }
?>