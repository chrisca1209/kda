<?php 
    $accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
    switch($accion){
    case 'agregarNuevoSupervisor':
      //instruccion de agregad
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("INSERT INTO supervisor (Nombre,ap_paterno,ap_materno,No_linea) VALUES (:ne,:ap,:am,:noLinea)");
      $respuesta = $sentenciaSQL ->execute(array(
        "ne" => $_POST['nomsup'],
        "ap" => $_POST['app'],
        "am" => $_POST['apm'],
        "noLinea" => $_POST['noli']
      ));
      echo json_encode($respuesta);
            
      //echo "agregarNuevoEmpleado";
      break;
    }
?>