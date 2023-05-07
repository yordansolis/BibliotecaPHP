<?php  
session_start();
			
      	$nombreUsuario =  $_SESSION['nombre'];
	if (isset($_SESSION['id_trabajadores'])) {
		
		include "../layout/header_users.php";
	?>	
			
			 <?php 	echo $nombreUsuario;?>

				<h1> Dasboar de users :)  !</h1>
    
<?php 
		include "../layout/footer.php";

	}else {
			header("location: ../../login.php");
	}

?>

    