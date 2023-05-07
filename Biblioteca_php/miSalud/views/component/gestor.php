<?php
session_start();

if (isset($_SESSION['nombre'])) {

	include "../layout/header_admin.php";


?>
	<?php echo $_SESSION['nombre']; ?>
	<div class="container  mt-3">
		<h1 class="splay-4">Gestor</h1>
		<div id="tablaGestorArchivos"> </div>
	</div>

	
	<?php
		include "../layout/footer.php";
	?>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#tablaGestorArchivos").load("tabla/tabla_Gestora.php")
		})
	</script>
<?php
} else {

	header("location: ../login.php");
}
?>