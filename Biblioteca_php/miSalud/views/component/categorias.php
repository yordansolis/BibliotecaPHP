<?php
session_start();

if (isset($_SESSION['nombre'])) {
	include "../layout/header_admin.php";
?>



	<div class="container ">
		<div class="pt-5 ">
			<h1> categorias</h1>
			<div class="row">
				<div class="col-ms-12">

					<section class="row">
						<article class="col-sm-4">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoriaadd">Add

						</article>
					</section>

					<div id="tablaCategorias"></div>
				</div>
			</div>
		</div>
	</div>





	<!-- Modal -->
	<div class="modal fade" id="categoriaadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body  text-center">
					<form action="frmCategorias">
						<label for="nombreDeCategoria"> Nombre de la categoria</label>
						<input type="text" name="nombreDeCategoria" class="close" id="nombreDeCategoria">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
					<button type="button" class="btn btn-primary" id="guardarCategoria">Save </button>
				</div>
			</div>
		</div>
	</div>




	<?php
	include "../layout/footer.php";

	?>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#tablaCategorias").load("tablaCategorias/t_categorias.php");

			$('#guardarCategoria').click(function() {
				var categoria = $('#nombreDeCategoria').val();
				if (categoria == "") {
					swal("Debe agregar una categoria");
				} else {
					$.ajax({
						type: "POST",
						data: "categoria=" + categoria,
						url: "../controller/usuarios/categorias/categorias.php",

					})
				}
			});
		})
	</script>

<?php
} else {

	header("location: ../login.php");
}
?>