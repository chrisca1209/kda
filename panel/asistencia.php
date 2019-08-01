<?php 
	session_start();
	if (!isset($_SESSION['sesvar'])) {
		echo '
			<script>
				window.location = "../"
			</script>
		';
	}//end of if

	include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Asistencia</title>

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
	<link rel="stylesheet" type="text/css" href="../plugins/data-tables/DataTables-1.10.18/css/jquery.dataTables.min.css">
	

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="./dashboard.php">
                    <br><br><br><br><img src="../images/kda1.png" alt="" width="180px"/>
                </a>
            </div>
            <br><br><br>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                           <li class=" has-sub">
                                    <a class="js-arrow" href="./dashboard.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                </li>
                                <?php 
                            if($_SESSION['id_roluser'] == 1){
                                echo 
                                '
                                <li class=" has-sub">
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
                                 </li>';
                                }
                                ?>
                                <?php 
                                        if(($_SESSION['id_roluser'] == 3) || ($_SESSION['id_roluser'] == 5) || ($_SESSION['id_roluser'] == 4 || ($_SESSION['id_roluser'] == 1))){
                                            echo'
                                                <li class="active has-sub">
                                                    <a class="js-arrow" href="asistencia.php">
                                                    <i class="fas fa-circle"></i>Asistencia</a>
                                                </li>
                                            ';
                                        }
                                    ?>
                               <li class=" has-sub">
                                       <a class="js-arrow" href="#">
                                            <i class="fas fa-chart-bar"></i>Cantidad de Producción</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <?php
                                               if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 3)){
                                                        echo '
                                                        <li class="  has-sub">
                                                            <a href="linea1.php">Línea 1</a>
                                                        </li>';
                                                }
                                                if(($_SESSION['id_roluser'] == 1 || ($_SESSION['id_roluser'] == 5))){
                                                        echo '
                                                        <li>
                                                           <a href="linea2.php">Línea 2</a>
                                                        </li>';
                                               }
                                                if(($_SESSION['id_roluser'] == 1 || ($_SESSION['id_roluser'] ==4))){
                                                   echo '
                                                        <li>
                                                           <a href="linea3.php">Línea 3</a>
                                                        </li>';
                                               }
                                        ?>
                                        </ul>
                                    </li>
                                <?php 
                                if(($_SESSION['id_roluser'] == 1)){
                                    echo
                                    '<li class=" has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="far fa-check-square"></i>Supervisores</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            ';
                                }?>
                                    <?php 
                                if($_SESSION['id_roluser'] == 1){
                                    echo
                                            '<li class=" has-sub">
                                                    <a href="nominasuper.php">Nómina</a>
                                            </li>
                                            <li class=" has-sub">
                                                <a href="ver_supervisor.php">Ver Supervisor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-sub">
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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <!--<button class="au-btn--submit" type="submit">
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
                                    <h2 class="title-1">Registro de Asistencia</h2>
                                </div>
                            </div>
                        </div>
						<br>
						<button type="button" class="btn btn-success mb-1" data-toggle="modal" data-target="#staticModal">Asistencia</button>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
    
    <!-- Modal Section-->
    <!-- modal static -->
			<div class="modal fade" id="staticModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
			 data-backdrop="static">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticModalLabel">Pasar Asistencia</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<center>
					            <input type="text" id="nombreEm" name="nombreEn" class="form-control" style="text-align: center; font-size: 20px;" readonly="readonly" value="<?php echo $_SESSION['nombre_completo'];?>">
				            </center>
				            <div style="width:10;height:10px;"></div>
				            <div class="col-md-12">
					            <div class="row">
					            <center>
						            <div class="col-md-1">
							            <input type="hidden" id="idE" name="idE" value="<?php echo $_SESSION['id_usuario']; ?>">
						            </div>
						            <div class="col-md-12">
							            <button type="button" id="btnAgregarHoraEntrada" class="btn btn-info btn-block">Agregar Hora     Entrada</button><br>
						            </div>
						            <div class="col-md-12">
							            <button type="button" id="btnAgregarHoraSalida" class="btn btn-info btn-block">Agregar Hora de         Salida</button>
						            </div>
						          </center>
						          <div class="col-md-1"></div>
					            </div>
				            </div>
					<div style="width:100;height:50px;"></div>
					<div style="width:100;height:50px;"></div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="button" id="btnActualizarEmpleado" class="btn btn-primary">Guardar</button>
						</div>
					</div>
				</div>
			</div>
			
			<!-- end modal static -->

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
	
	<script type="text/javascript" language="javascript" src="../plugins/data-tables/DataTables-1.10.18/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="../plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
        
        <script type="text/javascript" src="../js/funcionesJSEmpleado.js"></script>
			
	<script type="text/javascript">
		$(document).ready(function() {
			$('#productos').DataTable();
		} );
	</script>

</body>

</html>
<!-- end document-->