<?php

  $accion = (isset($_GET['accion']))?$_GET['accion']:'leer';
  switch($accion){
    case 'agregarNuevoEmpleado':
      //instruccion de agregad
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("INSERT INTO empleado (nombre_empleado,ap_empleado,am_empleado,calle,numero,CP,telefono,tipo_empleado) VALUES (:ne,:ap,:am,:calle,:num,:cp,:tel,:tipoE)");
      $respuesta = $sentenciaSQL ->execute(array(
        "ne" => $_POST['nombreNuevo'],
        "ap" => $_POST['apePNuevo'],
        "am" => $_POST['apeMNuevo'],
        "calle" => $_POST['CalleNuevo'],
        "num" => $_POST['numeroNuevo'],
        "cp" => $_POST['cpNuevo'],
        "tel" => $_POST['telefonoNuevo'],
        "tipoE" => $_POST['puestoNuevo']
      ));
      echo json_encode($respuesta);
      //echo "agregarNuevoEmpleado";
      break;
    case 'actualizarEmpleado':
        //instruccion de agregado
        header('Content-Type: application/json');
        $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
        $sentenciaSQL = $pdo -> prepare("UPDATE empleado SET
            nombre_empleado=:ne,
            ap_empleado=:ap,
            am_empleado=:am,
            calle=:calle,
            numero=:num,
            CP=:cp,
            telefono=:tel,
            tipo_empleado=:tip
            WHERE id_empleado=:ID
          ");
          $respuesta = $sentenciaSQL->execute(array(
            "ID"=>$_POST['idAct'],
            "ne"=>$_POST['nombreAct'],
            "ap"=>$_POST['apePAct'],
            "am"=>$_POST['apeMAct'],
            "calle"=>$_POST['calleAct'],
            "num"=>$_POST['numAct'],
            "cp"=>$_POST['cpAct'],
            "tel"=>$_POST['telefonoAct'],
            "tip"=>$_POST['puestoNuevo']
          ));
          echo json_encode($respuesta);
  //    echo "actualizarEmpleado";
      break;
    case 'eliminarEmpleado':
      //instruccion de eliminar
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
      $respuesta=false;
      if(isset($_POST['id'])){
        $sentenciaSQL = $pdo->prepare("DELETE FROM empleado WHERE id_empleado=:ID");
        $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['id']));
      }
      echo json_encode($respuesta);
    //  echo "eliminarEmpleado";
      break;
    case 'agregarNomina':
    include 'conexion.php';
    $id=$_POST['empleado'];
    $sqla ="select hrs_trabajadas from empleado where id_empleado=".$id;
    $consulta = mysqli_query($conexion,$sqla);
    $da = mysqli_fetch_array($consulta);
    $hra = $da[0];
    $pago = $hra*$_POST['pagoNuevo'];
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
      $sentenciaSQL = $pdo->prepare("INSERT INTO pagos_empleados (id_empleado,pago_por_hora,hrs_trabajadas,total_pagar) VALUES (:ie,:ph,:hr,:pa)");
      $respuesta = $sentenciaSQL ->execute(array(
        "ie" => $_POST['empleado'],
        "ph" => $_POST['pagoNuevo'],
        "hr" => $hra,
        "pa" => $pago
      ));
      echo json_encode($respuesta);
      break;
    case 'actualizarNomina':
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
    $sentenciaSQL = $pdo -> prepare("UPDATE pagos_empleados SET
        id_empleado=:ide,
        hrs_trabajadas=:ht,
        pago_por_hora=:ph,
        total_pagar=:pa
        WHERE id_pagos=:ID
      ");
      $pago = $_POST['horasAct'] * $_POST['pagoAct'];
      $respuesta = $sentenciaSQL->execute(array(
        "ID"=>$_POST['idNAct'],
        "ht"=>$_POST['horasAct'],
        "ph"=>$_POST['pagoAct'],
        "pa"=>$pago,
        "ide"=>$_POST['idEAct']
      ));
      echo json_encode($respuesta);
      break;
    case 'eliminarNomina':
    header('Content-Type: application/json');
    $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
      $respuesta=false;
      if(isset($_POST['id'])){
        $sentenciaSQL = $pdo->prepare("DELETE FROM pagos_empleados WHERE id_pagos=:ID");
        $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['id']));
      }
      echo json_encode($respuesta);
      break;
    case 'Determinar':
      include 'conexion.php';
      $id = $_POST['id'];
      $sql2 = "select * from asistencia where id_empleado=".$id;
      $consultaV = mysqli_query($conexion,$sql2);
      $contador = 0;
      while($datos = mysqli_fetch_array($consultaV)){
        $contador = $contador + 1;
      }
      if($contador > 0){
      }else{
        $sql1= "insert into asistencia (id_empleado) values ('$id')";
        $ejecutar = mysqli_query($conexion,$sql1);
      }
      $sqlD = "select * from asistencia where id_empleado='$id'";
      $consultaD = mysqli_query($conexion,$sqlD);
      $datoId = mysqli_fetch_array($consultaD);
      $horaIE = $datoId['horaEntrada'];
      $horaIS = $datoId['horaSalida'];
      $horao = "00:00:00";
      if($horaIE == $horao and $horaIS == $horao){
        $suma = 3;
      }else{
        if($horaIS == $horao){
          $suma = 0;
        }else{
          $suma = 2;
        }
      }
      if($suma==1){
        $val = 1;
      }else if($suma==0){
        $val = 0;
      }else if($suma==2){
        $val = 2;
      }else{
        $val=3;
      }
      echo $r=$val;
      break;
    case 'AgregarHoraEntrada':
          
        //  echo $_POST['id'];
        include 'conexion.php'; 
          
          $sql = "select time(now()) as hora";
      $consulta = mysqli_query($conexion,$sql);
      $datos = mysqli_fetch_array($consulta);
      $hora = $datos[0];
          
        //echo $hora;
      
          
      //$sql = "select time(now()) as hora";
      //$consulta = mysqli_query($conexion,$sql);
      //$datos = mysqli_fetch_array($consulta);
      //$hora = $datos[0];
      header('Content-Type: application/json');
          
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
     $sentenciaSQL = $pdo->prepare("INSERT INTO asistencia (horaEntrada,id_supervisor) VALUES (:hora,:id)");
    //  $sentenciaSQL = $pdo->prepare("update asistencia set horaEntrada=:hor where id_supervisor=:id");
      $respuesta = $sentenciaSQL->execute(array("hora"=>$hora,"id"=>$_POST['id']));
      echo json_encode($respuesta);
      //echo $hora;
      break;
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
    case 'CalcularHoras':
      include 'conexion.php';
      $id = $_POST['id'];
      $sql1 = "SELECT TIMESTAMPDIFF(minute , horaEntrada, horaSalida ) AS diferencia from asistencia where id_usuario=".$id;
      $ejecutarC = mysqli_query($conexion,$sql1);
      $dat = mysqli_fetch_array($ejecutarC);
      $restante = $dat['diferencia'];
      $fin = $restante / 60;
      $sacar = "select hrs_trabajadas from usuario where id_usuario=".$id;
      $ejectu = mysqli_query($conexion,$sacar);
      $da = mysqli_fetch_array($ejectu);
      $ha = $da[0];
      $fsum = $fin + $ha;
      $horao = "00:00:00";
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=kda;host=localhost","root","");
      $sentenciaSQL1 = $pdo->prepare("update asistencia set horaEntrada=:hore,horaSalida=:hors where id_usuario=:id");
      $respuesta1 = $sentenciaSQL1->execute(array("id"=>$id,"hore"=>$horao,"hors"=>$horao));
      $sentenciaSQL = $pdo->prepare("update usuario set hrs_trabajadas=:hor where id_usuario=:id");
      $respuesta = $sentenciaSQL->execute(array("hor"=>$fsum,"id"=>$id));
      echo json_encode($respuesta);
      break;
    case 'agregarRecurso':
      include 'conexion.php';
      $nomparchivo=$_FILES['archivo']['name'];
      $origena=$_FILES['archivo']['tmp_name'];
      $destinoa="../dist/RH/archivos/".$nomparchivo;
      copy($origena,$destinoa);
      $nom = $_POST['nombre'];
      mysqli_query($conexion,"INSERT INTO recursos VALUES (null,'$nom','$nomparchivo')");
      echo '<script>window.location = "../panel/RH_RecursosSelecion.php";</script>';
      break;
    case 'EliminarDatosArchivo':
      header('Content-Type: application/json');
      $pdo = new PDO("mysql:dbname=asise;host=localhost","root","");
        $respuesta=false;
        if(isset($_POST['id'])){
          $sentenciaSQL = $pdo->prepare("DELETE FROM recursos WHERE id_recurso=:ID");
          $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['id']));
        }
      echo json_encode($respuesta);
      break;
    case 'PagarNomina':
      include 'conexion.php';
      $sql = "delete from pagos_empleados where id_pagos=".$_POST['id'];
      $consulta = mysqli_query($conexion,$sql);
      $id = $_POST['idE'];
      $sql1 = "update empleado set hrs_trabajadas=0 where id_empleado='$id'";
      $consulta2 = mysqli_query($conexion,$sql);
      echo $r=1;
      break;
    default:
      echo "sin accion";
      break;
  }
 ?>
