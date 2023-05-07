<?php  
session_start();
			
	$nombreUsuario =  $_SESSION['nombre'];
	if (isset($_SESSION['id_admin'])) {

		include "../layout/header_admin.php";
	?>		

			 <?php 	echo $nombreUsuario;?>
				<h1> Dasboar de  id_administrador  !</h1>
  
			
<?php 
		include "../layout/footer.php";

	}else {
		header("location: ../../login.php");

		
	}

?>    
