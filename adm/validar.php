<?php
	session_start();
    include 'conexion.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
	
	$query = 'SELECT * FROM usuario WHERE email="'.$email.'" and password=sha2("'.$password.'",0)';
	
	$res_query = mysqli_query($conexion, $query);
    if (mysqli_num_rows($res_query) == 1) {
        $data = mysqli_fetch_array($res_query);
        // echo $data['email'];
        $_SESSION['id_usuario'] = $data['id_usuario'];
        $_SESSION['id_roluser'] = $data['id_roluser'];
        $_SESSION['nombre'] = $data['nombre_usuario'];
        $_SESSION['nombre_completo'] =  $data['nombre_usuario'].' '.$data['ap_paterno'].' '.$data['ap_materno'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['sesvar'] = $data['id_usuario'].$data['nombre_usuario'];
        echo '
            <script>
                window.location = "../panel/dashboard.php"
            </script>
            ';
    }//end if 
	else {
        echo '
            <script>
                window.location = "../"
            </script>
            ';
    }//end of else

?>