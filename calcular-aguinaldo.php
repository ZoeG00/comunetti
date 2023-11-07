<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<h3 class="text-center"><a href="calcular-aguinaldo.php">Calculadora de Aguinaldo</a></h3>
<div class="d-flex justify-content-center">
    <form method="post" action="">
        <label for="hours_worked">Horas Trabajadas:</label>
        <input class="form-control" type="number" name="hours_worked" min="0" required>
        <br>
        <label for="days_worked">Días Trabajados:</label>
        <input class="form-control" type="number" name="days_worked" min="0" required>
        <label for="hour_price">Precio x hora:</label>
        <input class="form-control" type="number" name="hour_price" min="0" required>
        <br>
        <input class="btn btn-success" type="submit" value="Calcular Aguinaldo">
    </form>
</div>
<div class="mt-4 d-inline-block"></div>
<div class="text-center fw-bold alert alert-success">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $hoursWorked = (float)$_POST['hours_worked'];
        $daysWorked = (int)$_POST['days_worked'];
        $hourPrice = (int)$_POST['hour_price'];
        $aguinaldo = 0;

        if ($hoursWorked <= 0 || $daysWorked <= 0) {
            echo "<p style='color: red;'>Error: Ingresa valores válidos para las horas y los días trabajados.</p>";
        } else {
            // Calcular el aguinaldo
            $aguinaldo = ($hoursWorked * $daysWorked) * 4 * $hourPrice / 2;
        }
        echo "<p>El aguinaldo que corresponde es de $ {$aguinaldo}</p>";
    }
    ?>
</div>
    
<?php
include("includes/footer.php")
?>