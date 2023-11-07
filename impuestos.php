<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<h3 class="text-center">Control de impuestos<input class="btn btn-success m-2 w-auto" value="Guardar" type="submit" onclick="sendData(saveState())"></h3>
<div class="d-flex justify-content-center">
  <form method="post">
    <div id="tabla">
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js"></script>
  <script type="text/javascript">
    // Datos para la tabla
    var datos = [
      ["Inmobiliario", "Miguel", "", 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, 34, ],
      ["", 'Ale', ""],
      ["", 'Diego', ""],
      ["", '3 hermanos', ""],
      ["Agua", 'Miguel', ""],
      ["", 'Ale', ""],
      ["", 'Diego', ""],
      ["", '3 hermanos', ""],
      ["Luz", 'Miguel', ""],
      ["", 'Ale', ""],
      ["", 'Diego', ""],
      ["", '3 hermanos', ""],
      ["Gas", 'Miguel', ""],
      ["", 'Negocio', ""],
      ["Telefonica", '', ""],
      ["Propiedad Raiz", '', ""],
      ["Industria y Comercio", '', ""],
      ["Internet", 'Norma'],
      ["", 'Ale'],
      ["Seguros Autos", 'Mamá'],
      ["", 'Ale'],
      ["", 'Marinela'],
      ["Netflix", '', ""],
      ["Seguros", 'Negocio', ""],
      ["", 'Casa Mamá'],
      ["Patentes", 'Mamá', "", ''],
      ["", 'Ale'],
      ["", 'Marinela'],
      ["Claro", 'Mamá', ''],
      ["", 'Ale'],
      ["", 'Ampi'],
      ["Cuota Inglés"],
      ["Derecho de examen"],
      ["RTO autos", 'Mamá', ''],
      ["", 'Ale'],
      ["", 'Marinela'],
      ["Carnet de sanidad", 'Mamá'],
      ["", 'Ale'],
      ["Matafuegos", 'Negocio'],
      ["", 'Quincho'],
      ["", 'Taller'],
      ["", 'Auto Mamá'],
      ["", 'Auto Ale'],
      ["", 'Auto Ale2'],
    ];

    // Configuración de Handsontable
    var config = {
      data: datos,
      colHeaders: ['Impuesto', 'Propietario', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      rowHeaders: true,
      contextMenu: true,
      licenseKey: 'non-commercial-and-evaluation',
      persistentState: true,
      afterChange: function(changes, source) {
        // Manejar los cambios realizados en la tabla
        if (source === 'edit') {
          // Se ejecutará solo si los cambios fueron realizados al editar celdas
          for (var i = 0; i < changes.length; i++) {
            var fila = changes[i][0]; // Índice de la fila
            var columna = changes[i][1]; // Índice de la columna
            var valorAnterior = changes[i][2]; // Valor anterior de la celda
            var valorActual = changes[i][3]; // Valor actual de la celda

            // Aquí puedes realizar las acciones necesarias con los datos modificados
            console.log('Cambio en la fila ' + fila + ', columna ' + columna + ': ' + valorAnterior + ' -> ' + valorActual);
          }

          console.log(cambiosTabla)
          cambiosTabla.push(changes);
        }
      }
    };

    // Crear la tabla Handsontable
    var tabla = document.getElementById('tabla');
    var hot = new Handsontable(tabla, config);

    // Arreglo para almacenar los cambios en la tabla
    var cambiosTabla = [];
    // Función para enviar los datos modificados a PHP mediante AJAX
    function sendData() {
      const tableData = hot.getData(); // Obtener los datos de la tabla

      // Enviar todos los datos de la tabla al servidor
      const jsonData = {
        data: tableData
      };

      // Enviar los datos al servidor
      fetch('impuestos-server.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify(jsonData)
        })
        .then(response => response.text())
        .then(data => {
          // Respuesta del servidor, si es necesario
          console.log(data);
          showSavedData();
        })
   
    }

    function saveState() {
      const data = hot.getSourceData(); // Obtener los datos actuales de la tabla
      localStorage.setItem('handsontableData', JSON.stringify(data)); // Guardar los datos en el almacenamiento local
      alert('guardado.');
    }
    function showSavedData() {
      const savedData = localStorage.getItem('handsontableData');

      if (savedData) {
        const parsedData = JSON.parse(savedData);
        const tableContainer = document.getElementById('tabla');
        if (window.hot) {
          window.hot.destroy();
        }
        const hot = new Handsontable(tableContainer, {
          data: parsedData,
          colHeaders: ['Impuesto', 'Propietario', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
          rowHeaders: true,
          contextMenu: true,
          licenseKey: 'non-commercial-and-evaluation',
          persistentState: true,
          afterChange: function(changes, source) {
            // ... resto del código para manejar los cambios
          }
        });

        hot.render(); // Renderiza la tabla con los datos recuperados
        window.hot = hot;
      } else {
        console.log('No se encontraron datos en el almacenamiento local.');
      }
    }

    // Llamada a la función al cargar la página
    window.onload = function() {
      showSavedData();
    };
  </script>
</div>
<?php
include("includes/footer.php");
?>