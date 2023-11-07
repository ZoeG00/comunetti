<?php
include("db-con.php");
?>
<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos enviados desde JavaScript
    $jsonData = json_decode(file_get_contents('php://input'), true);
    $data = $jsonData['data']; // Los datos de la tabla Handsontable
    // Iterar sobre los datos y guardarlos en la base de datos
    foreach ($data as $row) {
      $impuesto = $row[0];
      $propietario = $row[1];
      $enero = $row[2];
      $febrero = $row[3];
      $marzo = $row[4];
      $abril = $row[5];
      $mayo = $row[6];
      $junio = $row[7];
      $julio = $row[8];
      $agosto = $row[9];
      $septiembre = $row[10];
      $octubre = $row[11];
      $noviembre = $row[12];
      $diciembre = $row[13];
      // Ejecutar consulta para insertar en la base de datos
      $query = "INSERT INTO `impuestos` (impuesto, propietario, enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre, diciembre) VALUES ('$impuesto', '$propietario', '$enero', '$febrero', '$marzo', '$abril', '$mayo', '$junio', '$julio', '$agosto', '$septiembre', '$octubre', '$noviembre', '$diciembre')";
      $resultado = mysqli_query($conexion, $query);
    }
  }
  ?>
