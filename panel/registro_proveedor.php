<?php 
  session_start();
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
    <title>Registro de Proveedores</title>

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
                    <br><br><br><br><img src="../images/kda1.png" alt="" width="180px"/>
                </a>
            </div>
            <br><br><br>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
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
                                        if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 2) || ($_SESSION['id_roluser'] == 3 || ($_SESSION['id_roluser'] == 4))){
                                            echo'
                                                <li class="has-sub">
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
                                            '<!--<li class=" has-sub">
                                                    <a href="nominasuper.php">Nómina</a>
                                            </li>-->
                                            <li class=" has-sub">
                                                <a href="ver_supervisor.php">Ver Supervisor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active has-sub">
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
                                    <h2 class="title-1">Registro de Proveedores</h2>
                                </div>
                            </div>
                        </div>
						<div>
							<br><br>
							<form action="" method="POST" enctype="multipart/form-data"> 
									<br><br>
									<label>Nombre: </label>	<input type="text" name="nomprove" style="width:220px" required="required" placeholder="	Nombre_Proveedor"/>
									<br><br>
									<label>Teléfono: </label>	<input type="text" name="telefono" style="width:220px" placeholder="	Teléfono"/>
									<br><br>
									<label>Correo: </label>	<input type="email" name="correo" style="width:220px" placeholder="	ejemplo@gmail.com"/>
									<br><br>
									<div class="overview-wrap">
										<button class="au-btn au-btn-icon au-btn--blue" name="Guardar">
											Guardar
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

	include ('../adm/conexion.php');
	
	@$nomprove = $_POST['nomprove'];
	@$tel = $_POST['telefono'];
	@$correo = $_POST['correo'];
	
	
	if(isset($nomprove) and isset($tel) and isset($correo))
	{
		$insertar=mysqli_query($conexion,"insert into proveedor values(NULL,'$nomprove','$tel','$correo');");
		    if($insertar){
                echo"<script>alert('Datos Guardados Correctamente'); window.location='ver_proveedor.php'</script>";
            }else{
				echo"<script>alert('Datos no insertados en la Base de datos \n Vuelve a intentarlo')</script>";
            }       
    }
	mysqli_close($conexion);
?>