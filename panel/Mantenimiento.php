<?php 
  session_start();
  include("../adm/conexion.php");
  if (!isset($_SESSION['sesvar'])) {
    echo '
        <script>
            window.location = "../"
        </script>
    ';
}//end of if

if(isset($_SESSION['cambio'])){
    $cajasC=2;
}else{
    $cajasC=1;
}
   
$cajas=$cajasC;

$id=$_GET['var'];
$conecta=mysqli_connect('localhost','root','','kda');
$sql="select * from mantenimiento where No_Inter_Maquina=".$id;
$consulta=mysqli_query($conecta,$sql);
$contador=0;
while($datos=mysqli_fetch_array($consulta)){
    $contador=$contador+1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Mantenimiento</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link rel="icon" href="" type="image/ico">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <link href="../css/style.css" rel="stylesheet" media="all">
	
	<style>

    <link rel="stylesheet" href="estilos.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KDA</title>
    
    
    <style>
        form{
            width: 50%;margin: 0 auto;
        }
        input[type="texty"]{
            width: 100%;padding: 10px; margin-top: 10px; margin-bottom: 10px;
        }
        input[type="button"]{
            padding: 10px;
        }
        .agregar{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            font-family: cursive;
            color: white;
            background-color: red;
            border-radius: 15px;
            border: 4px solid red;
        }
        .agregar:hover{
            color: red;
            background-color: white;
        }
        .guardarM{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: dodgerblue;
            border-radius: 15px;
            border: 4px solid blue;
        }
        .guardarM:hover{
            color: blue;
            background-color: white;
        }
        .exportarpdf{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: dodgerblue;
            border-radius: 15px;
            border: 4px solid blue;
        }
        .exportarpdf:hover{
            color: red;
            background-color: white;
        }
        .exportarexcel{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: dodgerblue;
            border-radius: 15px;
            border: 4px solid blue;
        }
        .exportarexcel:hover{
            color: green;
            background-color: white;
        }
        
        /*.inicio{
            background-image: url(Imagenes/cropped-boton-inicio-1.png);background-repeat: no-repeat;background-position: left;padding-left: 17px;
            border:solid 1px blue;
        }*/
        
        #div1{
            height: 100px;
            width: 593px;
            overflow: auto;
            overflow-x: hidden;
        }
        /*#table1{
            text-align: center;
            background-color: white;
            font-family: serif;
            font-size: 18px;
            width: 570px;
            color:black;
            height: 40px;
            
        }*/
        #etiqueta{
            width: 300px;
            height: 300px;
            position: fixed;
            top: 11px;
            right: 2px;
        }
        #etipdf{
            width: 300px;
            height: 300px;
            position: fixed;
            top: 470px;
            right: 730px;
        }
        
        #etiexcel{
            width: 300px;
            height: 300px;
            position: fixed;
            top: 470px;
            right: 330px;
        }
        /*#etiagregar{
            width: 100px;
            height: 100px;
            position: fixed;
            top: 330px;
            right: 440px;
        }*/
    
    </style>
	

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="./dashboard.php">
                    <img src="" alt="" width="180px"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=" has-sub">
                            <a class="js-arrow" href="./dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<li class="active has-sub">
                            <a class="js-arrow" href="verma.php">
                                <i class="fas fa-table"></i>Ver Máquina</a>
                            <!--<ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class=" has-sub">
                                    <a href="registro_producto.php">Registrar Nuevo Producto</a>
                                </li>
                                <li>
                                    <a href="ver_producto.php">Ver Productos Existentes</a>
                                </li>
                            </ul>-->
                        </li>
                       <li class=" has-sub">
                           <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Cantidad de Producción</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="  has-sub">
                                    <a href="linea1.php">Línea 1</a>
                                </li>
                                <li>
                                   <a href="linea2.php">Línea 2</a>
                                </li>
								<li>
                                   <a href="linea3.php">Línea 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" has-sub">
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Empleados</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li >
                                    <a href="registro_empleado.php">Registrar Nuevo Empleado</a>
                                </li>
                                <li class=" has-sub">
                                    <a href="ver_empleado.php">Ver Empleado</a>
                                </li>
                            </ul>
                        </li>
						<li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-star"></i>Proveedores</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="  has-sub">
                                    <a href="registro_proveedor.php">Registrar Nuevo Proveedor</a>
                                </li>
                                <li>
                                    <a href="ver_proveedor.php">Ver Proveedores</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="" alt="" width="300px" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['nombre']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <img src="" alt="" width="300px" />
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <label><?php echo $_SESSION['nombre']; ?></label>
                                                    </h5>
                                                    <label><?php echo $_SESSION['email']; ?></label>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../adm/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Mantenimiento</h2>
                                </div>
                            </div>
                        </div>
						<div>
							<center>
								<input type="hidden" id="valorID" value="<?php echo $id;?>" /><br><br>
									<?php
										if($contador>0){
									?>
								<div id="div1">
									<table id="table1" >
										<tr style="text-align:center;font-family:Comic Sans MS;font-size:18px;background-color:lightgreen;color:blue;">
											<td>Mantenimiento</td>
											<td>Fecha</td>
										</tr>
										<?php
											$sqlD="select * from mantenimiento where No_Inter_Maquina=".$id;
											$consultaD=mysqli_query($conecta,$sqlD);
											while($datos3=mysqli_fetch_array($consultaD)){
										?>
										<tr>
											<td><?php echo $datos3['Nombre_Mantenimiento'];?></td>
											<td><?php echo $datos3['Fecha'];?></td>
										</tr>
										<?php
											}
										?>
									</table>
								</div>
								<br>
								<textarea id="mantenimiento" placeholder="Ingresa el Mantenimiento " required="required" style='width: 220px; font-size: 16px; text-align: center'></textarea>
							
								<div id="etiagregar">
									<input value="Agregar" name="agregar" class="agregar" id="agregarcampo" style="height:35px;width:150px; text-align:center;"/>
								</div>
            
								<?php
									}else{
								?>
								<textarea id="mantenimiento" placeholder="Ingresa el Mantenimiento " required="required" style='width: 220px; font-size: 16px; text-align: center'></textarea>
								<div id="etiagregar">
									<input value="Agregar" name="agregar" class="agregar" id="agregarcampo" style="height:35px;width:150px; text-align:center;"/>
								</div>

								<?php
									}
								?>
							</center>
							<section>
								<div id="Botones"> 
									<center><br><br><br><br>
										<div id="etipdf">
											<a type="button" id="pdf" value="Exportar PDF" class="exportarpdf"><img src="Imagenes/pdf.ico" style="width:40px;height:40px;"/><font face="Arial" size="4px">Exportar a PDF</font></a>
										</div>
										<div id="etiqexcel">
											<a type="button" id="excel" value="Exportar Excel" class="exportarexcel"><img src="Imagenes/excel.ico" style="width:40px;height:40px;"/><font face="Arial" size="4px">Exportar a Excel</font></a>
										</div>
									</center>
								</div>
							</section>
						</div>
						<br>
                        <!--<div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Business Technology. All rights reserved. Template by <a href="#">Business Technology</a>.</p>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
<script>
    $(document).ready(function(){
        $('#agregarcampo').click(function(){
            id = $('#valorID').val();
            mante=$('#mantenimiento').val();
            cadena="id="+id+"&mante="+mante;
            $.ajax({
               type:"post",
                data:cadena,
                url: "procesos/agregar.php",
                success:function(r){
                    //alert(r);
                document.location.reload();
                }
                    
            });
            //alert(id);
            
        });  
        
        $('#pdf').click(function(){
			//alert("Exportar a pdf");
			num=$('#valorID').val();
			//alert(num);
			window.location="pdf/reporte.php?val="+num;
		});
       
        $('#excel').click(function(){
			//	alert("Exportar a excel");
			num=$('#valorID').val();
			//alert(num);
			window.location="exportarexcel.php?val="+num;
		});
        
        
    });
</script>