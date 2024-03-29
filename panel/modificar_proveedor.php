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
    <title>Modificar Proveedor</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link rel="icon" href="../images/kda1.ico" type="image/ico">

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
	

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="./dashboard.php">
                 <br><div class="sidebar-brand-text mx-3"><h2 style="font-size:40px;font-family:Constantia;color:darkblue;text-align:center;">Industrias KDA</h2><h6 style="font-size:15px;font-family:Constantia;color:darkblue;text-align:center;">S.A. de C.V</h6></div>
                    <!--<br><img src="../images/kda1.png" alt="" width="100px" class="redonded-circle"/>-->
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">
                          <hr class="sidebar-divider">
                           <li class="has-sub">
                                    <a class="js-arrow" href="./dashboard.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <?php 
                            if($_SESSION['id_roluser'] == 1){
                                echo 
                                '
                                <hr class="sidebar-divider">
                                <div class="sidebar-heading">
                                    <h6 style="color:blue">Mantenimiento</h6>
                                </div>
                                <li class=" has-sub">
                                    <a class="" href="verma.php">
                                        <i class="fas fa-table"></i>Ver Máquina</a>
                                    <!--<ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <li class=" has-sub">
                                            <a href="registro_producto.php">Registrar Nuevo Producto</a>
                                        </li>
                                        <li>
                                            <a href="ver_producto.php">Ver Productos Existentes</a>
                                        </li>
                                    </ul>-->
                                 </li>';
                                }
                                ?>
                                    <hr class="sidebar-divider">
                                <div class="sidebar-heading">
                                    <h6 style="color:blue">Producción</h6>
                                </div>
                               <li class=" has-sub">
                                       <a class="js-arrow" href="#">
                                            <i class="fas fa-chart-bar"></i>Líneas</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <?php
                                               if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 2)){
                                                        echo '
                                                        <li class="  has-sub">
                                                            <a href="linea1.php">Línea 1</a>
                                                        </li>';
                                                }
                                                if(($_SESSION['id_roluser'] == 1 || ($_SESSION['id_roluser'] == 3))){
                                                        echo '
                                                        <li>
                                                           <a href="linea2.php">Línea 2</a>
                                                        </li>';
                                               }
                                                if(($_SESSION['id_roluser'] == 1 || ($_SESSION['id_roluser'] ==4))){
                                                   echo '
                                                        <li class="has-sub">
                                                           <a href="linea3.php">Línea 3</a>
                                                        </li>';
                                               }
                                        ?>
                                        </ul>
                                    </li>
                                    <?php 
                                        if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 2) || ($_SESSION['id_roluser'] == 3 || ($_SESSION['id_roluser'] == 4))){
                                            echo'
                                                 <hr class="sidebar-divider">
                                                    <div class="sidebar-heading">
                                                        <h6 style="color:blue">Pase de Asistencia</h6>
                                                    </div>
                                                <li class="has-sub">
                                                    <a class="" href="asistencia.php">
                                                    <i class="fas fa-circle"></i>Asistencia</a>
                                                </li>
                                            ';
                                        }
                                    ?>
                                <?php 
                                if(($_SESSION['id_roluser'] == 1)){
                                    echo
                                    '
                                    <hr class="sidebar-divider">
                                <div class="sidebar-heading" style="font-size:15px;color:">
                                    <h6 style="color:blue">Supervisores y Proveedores</h6>
                                </div>
                                    <li class=" has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="far fa-check-square"></i>Supervisores</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            ';
                                }?>
                                    <?php 
                                if($_SESSION['id_roluser'] == 1){
                                    echo
                                            '<!--<li class=" has-sub">
                                                    <a href="nominasuper.php">Nómina</a>
                                            </li>-->
                                            <li class=" has-sub">
                                                <a href="ver_supervisor.php">Ver Supervisor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" active has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-star"></i>Proveedores.</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li>
                                                <a href="ver_proveedor.php">Ver Proveedores</a>
                                            </li>
                                        </ul>
                                    </li>';
                                }
                            ?>
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
                                <input class="au-input au-input--xl" type="hidden" name="search" />                                <!--<button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>-->
                            </form>
                            <div class="header-button">
                                <!--<div class="noti-wrap">
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
                                </div>-->
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/user.png" alt="" width="300px" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['nombre']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <img src="../images/kda1.png" alt="" width="300px" />
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
                                    <h2 class="title-1">Modificar Proveedor</h2>
                                </div>
                            </div>
                        </div>
						<div>
							<?php  
								include("../adm/conexion.php");
								$id_g=$_GET['id'];
								$consulta_genero=mysqli_query($conexion,"select * from proveedor where id_proveedor='$id_g';");
								
								while($r=mysqli_fetch_array($consulta_genero)){
									$id=$r['id_proveedor'];
									$nomprove=$r['nombre_proveedor'];
									$telefono=$r['telefono'];
									$correo=$r['correo'];
								}
							
							?>
							<br><br>
							<form method="POST"> 
								
									<label hidden="hidden">ID: </label>	<input type="text" name="idprove" value="<?php echo $id; ?>" style="width:220px" readonly="readonly" placeholder="	Nombre_Producto" hidden="hidden"/>
									<br><br>
									<label>Nombre: </label>	<input type="text" name="nomprove" value="<?php echo $nomprove; ?>" style="width:220px" required="required" placeholder="	Nombre_Proveedor"/>
									<br><br>
									<label>Telefono: </label>	<input type="text" name="telefono" value="<?php echo $telefono; ?>" style="width:220px" placeholder="	Telefono"/>
									<br><br>
									<label>Correo: </label>	<input type="text" name="correo" value="<?php echo $correo; ?>" style="width:220px" placeholder="	Correo"/>
									<br><br>
									<div class="overview-wrap">
										<h3>¿Desea Actualizar el registro?</h3>
										<input type="submit" class="au-btn au-btn-icon au-btn--blue" name="Si" value="Si">
											<!--Si-->
										<button type="button" class="au-btn au-btn-icon au-btn--blue" name="no" value="no" onclick="javascript:window.location='ver_proveedor.php';">
											No
										</button>
									</div>
							</form>
						</div>
						<br>
                        <div class="row">
                            <!--<div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Business Technology. All rights reserved. Template by <a href="#">Business Technology</a>.</p>
                                </div>
                            </div>-->
                        </div>
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
<?php
	
	@$id=$_POST['idprove'];
	@$nomprove=$_POST['nomprove'];
	@$telefono=$_POST['telefono'];
	@$correo=$_POST['correo'];
	
		if(isset($id)){
			//$insertar=mysqli_query($conexion,"update producto set nombre='$nomprodu', color='$color', talla='$talla', estado_origen='$estadoori', id_proveedor='$proveedor', id_categoria='$categoria',precio='$precioad', gasto_indi='$gastoin' where id_producto='$id';");
			$sql = 'update proveedor set nombre_proveedor = "'.$nomprove.'", telefono="'.$telefono.'", correo = "'.$correo.'" where id_proveedor='.$id.';';
			echo "Mi SQL es: ".$sql;
			$insertar = mysqli_query($conexion,$sql);
				if($insertar){
					echo"<script>alert('Datos Actualizados Correctamente'); window.location='ver_proveedor.php'</script>";
				}else{
					echo"<script>alert('Datos no insertados en la Base de datos \n Vuelve a intentarlo')</script>";
				}
		}
	mysqli_close($conexion);
?>