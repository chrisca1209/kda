<?php 
    $accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
    switch($accion){
            
    case 'AgregarHoraEntrada':
         include 'conexion.php';
        $sql = "select time(now()) as hora";
            //echo $sql;
        $consulta = mysqli_query($conexion,$sql);
        $datos = mysqli_fetch_array($consulta);
        $hora = $datos[0];
            //echo $hora;
        header('Content-Type: application/json');
        $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
        $sentenciaSQL = $pdo->prepare("INSERT INTO asistencia (horaEntrada,id_supervisor) VALUES (:hor,:id_supervisor)");
        //$sentenciaSQL = $pdo->prepare("update asistencia set horaEntrada=:hor where id_supervisor=:id");
        $respuesta = $sentenciaSQL->execute(array("hor"=>$hora,"id_supervisor"=>$_POST['id']));
            echo json_encode($respuesta);            
    break;
    case 'agregarNuevoSupervisor':
      //instruccion de agregad
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("INSERT INTO supervisor (Nombre,ap_paterno,ap_materno,No_linea) VALUES (:ne,:ap,:am,:noLinea)");
      $respuesta = $sentenciaSQL ->execute(array(
        "ne" => $_POST['nomemp'],
        "ap" => $_POST['app'],
        "am" => $_POST['apm'],
        "noLinea" => $_POST['noli']
      ));
            echo json_encode($respuesta);
      //echo "jhjhghjgkjj";      
     // echo "agregarNuevoEmpleado";
    //  echo $_POST['nomemp']." ".$_POST['app'];
    break;
            
    /*case 'AgregarHoraEntrada':
      include 'conexion.php';
    $sql = "select time(now()) as hora";
            echo $sql;
  //    $consulta = mysqli_query($conexion,$sql);
  //    $datos = mysqli_fetch_array($consulta);
//      $hora = $datos[0];
        //echo $hora;
      /*header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("INSERT INTO asistencia (horaEntrada,id_supervisor) VALUES (:hor,:id_supervisor)");
      //$sentenciaSQL = $pdo->prepare("update asistencia set horaEntrada=:hor where id_supervisor=:id");
      $respuesta = $sentenciaSQL->execute(array("hor"=>$hora,"id"=>$_POST['id']));
      echo json_encode($respuesta);*/
      /*echo $hora;
      break;*/
    case 'AgregarHoraSalida':
      include 'conexion.php';
      $sql = "select time(now()) as hora";
      $consulta = mysqli_query($conexion,$sql);
      $datos = mysqli_fetch_array($consulta);
      $hora = $datos[0];
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("update asistencia set horaSalida=:hor where id_supervisor=:id");
      $respuesta = $sentenciaSQL->execute(array("hor"=>$hora,"id"=>$_POST['id']));
      echo json_encode($respuesta);
      break;
    case 'actualizarSupervisor':
        //instruccion de agregado
        header('Content-Type: application/json');
        $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
        $sentenciaSQL = $pdo -> prepare("UPDATE supervisor SET
            Nombre=:ne,
            ap_paterno=:ap,
            am_materno=:am,
            No_linea=:noli
            
            WHERE id_supervisor=:ID
          ");
          $respuesta = $sentenciaSQL->execute(array(
            "ID"=>$_POST['idAct'],
            "ne"=>$_POST['nombreAct'],
            "ap"=>$_POST['apePAct'],
            "am"=>$_POST['apeMAct'],
            "noli"=>$_POST['numLinea']
          ));
          echo json_encode($respuesta);
  //    echo "actualizarEmpleado";
      break;
    }
    
?>