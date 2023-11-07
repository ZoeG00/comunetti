<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<h3 class="mx-2 text-center">Gastos Departamentos 2021/ 2022</h3>
<div class="d-flex justify-content-center">
    <table class="table table-bordered table-striped w-75">
        <thead>
            <tr class="table-light">
                <th class="p-2">Fecha</th>
                <th class="p-2">Concepto</th>
                <th class="p-2">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM comunetti.gastosdepto2021";
            $resultados_gastosdepto = mysqli_query($conexion, $query);
            while ($row = mysqli_fetch_array($resultados_gastosdepto)) { ?>
                <tr>
                    <td><?php echo $row['fecha'] ?></td>
                    <td><?php echo $row['concepto'] ?></td>
                    <td><?php echo $row['total'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<?php
include("includes/footer.php");
?>