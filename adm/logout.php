<?php
	session_start();
	unset($_SESSION['id_usuario']);
    unset($_SESSION['nombre']);
    unset($_SESSION['email']);
    unset($_SESSION['sesvar']);
    unset($_SESSION['nombre_completo']);
	session_destroy();
	
	echo '<script type="text/javascript">
				window.location = "../"
				</script>';
?>