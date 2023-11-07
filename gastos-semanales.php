<?php
include("db-con.php");
?>
<?php
include("includes/header.php");
?>
<h4 class="text-center">GASTOS SEMANALES</h4>
<div class="row mx-auto col-md-3 mb-4">
	<select class="form-select" aria-label="Default select example">
		<option selected>Día de la semana</option>
		<option>Lunes</option>
		<option>Martes</option>
		<option>Miércoles</option>
		<option>Jueves</option>
		<option>Viernes</option>
		<option>Sábado</option>
		<option>Domingo</option>
	</select>
</div>
<div class="d-flex justify-content-center">
	<table class="table table-bordered w-75">
		<thead>
			<tr class="table-light">
				<th>Concepto</th>
				<th>Ingreso</th>
				<th>Concepto</th>
				<th>Egreso</th>
			</tr>
		</thead>
		<tbody>
			<form method="post">
				<tr id="col-1">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor1" name="ingreso-valor1">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor1" name="egreso-valor1">
					</td>
				</tr>
				<tr id="col-2">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor2" name="ingreso-valor2">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor2" name="egreso-valor2">
					</td>
				</tr>
				<tr id="col-3">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor3" name="ingreso-valor3">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor3" name="egreso-valor3">
					</td>
				</tr>
				<tr id="col-4">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor4" name="ingreso-valor4">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor4" name="egreso-valor4">
					</td>
				</tr>
				<tr id="col-5">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor5" name="ingreso-valor5">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor5" name="egreso-valor5">
					</td>
				</tr>
				<tr id="col-6">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor6" name="ingreso-valor6">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor6" name="egreso-valor6">
					</td>
				</tr>
				<tr id="col-7">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor7" name="ingreso-valor7">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor7" name="egreso-valor7">
					</td>
				</tr>
				<tr id="col-8">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor8" name="ingreso-valor8">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor8" name="egreso-valor8">
					</td>
				</tr>
				<tr id="col-9">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor9" name="ingreso-valor9">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor9" name="egreso-valor9">
					</td>
				</tr>
				<tr id="col-10">
					<td class="table-success"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_ingreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_ingreso)) { ?>
								<option value="1"><?php echo $row['ingreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="ingreso-valor10" name="ingreso-valor10">
					</td>
					<td class="table-danger"><select class="form-select" aria-label="Default select example">
							<option selected>Selecciona</option>
							<?php
							$query = "SELECT * FROM comunetti.conceptos";
							$resultados_egreso = mysqli_query($conexion, $query);
							while ($row = mysqli_fetch_array($resultados_egreso)) { ?>
								<option><?php echo $row['egreso'] ?></option>
							<?php } ?>
						</select></td>
					<td>
						<input class="form-control" type="number" id="egreso-valor10" name="egreso-valor10">
					</td>
				</tr>
				<tr>
					<td class="text-center fw-bold table-success">Total</td>
					<td class="table-success">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Obtener los valores ingresados por el usuario
							$valor1 = (float)$_POST["ingreso-valor1"];
							$valor2 = (float)$_POST["ingreso-valor2"];
							$valor3 = (float)$_POST["ingreso-valor3"];
							$valor4 = (float)$_POST["ingreso-valor4"];
							$valor5 = (float)$_POST["ingreso-valor5"];
							$valor6 = (float)$_POST["ingreso-valor6"];
							$valor7 = (float)$_POST["ingreso-valor7"];
							$valor8 = (float)$_POST["ingreso-valor8"];
							$valor9 = (float)$_POST["ingreso-valor9"];
							$valor10 = (float)$_POST["ingreso-valor10"];
							$resultadoi = 0;
							// Realizar la suma
							$resultadoi = $valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9 + $valor10;

							// Mostrar el resultado
							echo "<h6>Ingreso: $resultadoi</h6>";
						}
						?>
					</td>
					<td class="table-danger fw-bold text-center">Total</td>
					<td class="table-danger">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							// Obtener los valores ingresados por el usuario
							$valor1 = (float)$_POST["egreso-valor1"];
							$valor2 = (float)$_POST["egreso-valor2"];
							$valor3 = (float)$_POST["egreso-valor3"];
							$valor4 = (float)$_POST["egreso-valor4"];
							$valor5 = (float)$_POST["egreso-valor5"];
							$valor6 = (float)$_POST["egreso-valor6"];
							$valor7 = (float)$_POST["egreso-valor7"];
							$valor8 = (float)$_POST["egreso-valor8"];
							$valor9 = (float)$_POST["egreso-valor9"];
							$valor10 = (float)$_POST["egreso-valor10"];
							$resultadoe = 0;
							// Realizar la suma
							$resultadoe = $valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9 + $valor10;

							// Mostrar el resultado
							echo "<h6>Egreso: $resultadoe</h6>";
						}
						?>
					</td>
				</tr>
				<tr class="table-warning">
					<td class="text-center"><input class="btn btn-warning" type="submit"></td>
					<td class="table-light"></td>
					<td class="text-center fw-bold">Saldo</td>
					<td class="text-center fw-bold">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$saldo = $resultadoi - $resultadoe;
							echo "$saldo";
						}
						?>
					</td>
				</tr>
			</form>
		</tbody>
	</table>
</div>

<?php
include("includes/footer.php");
?>