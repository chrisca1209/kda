<?php 
session_start();
  if (!isset($_SESSION['sesvar'])) {
    echo '
        <script>
            window.location = "../"
        </script>
    ';
}//end of if
include ('../adm/conexion.php');
?>
   <head>
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
		<link href="../vendor/DataTables/datatables.css" rel="stylesheet" media="all">
	
	<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../plugins/data-tables/DataTables-1.10.18/css/jquery.dataTables.min.css">

</head>

<body >
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
                            <a href="./dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						<?php 
                        if($_SESSION['id_roluser'] == 1){
                            echo 
                            '
                            <li class=" has-sub">
                                <a class="" href="verma.php">
                                    <i class="fas fa-table"></i>Ver Máquina</a>
                             </li>';
                            }
                            ?>
                            <?php 
                                        if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 2) || ($_SESSION['id_roluser'] == 3 || ($_SESSION['id_roluser'] == 4))){
                                            echo'
                                                <li class=" has-sub">
                                                    <a class="" href="asistencia.php">
                                                    <i class="fas fa-circle"></i>Asistencia</a>
                                                </li>
                                            ';
                                        }
                                    ?>
                               <li class="active has-sub">
                                       <a class="js-arrow" href="#">
                                            <i class="fas fa-chart-bar"></i>Cantidad de Producción</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                        <?php
                                               if(($_SESSION['id_roluser'] == 1) || ($_SESSION['id_roluser'] == 2)){
                                                        echo '
                                                        <li class="active  has-sub">
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
                                    <li class="has-sub">
                                        <a class="js-arrow" href="#">
                                            <i class="fas fa-star"></i>Proveedores.</a>
                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                            <li class="  has-sub">
                                                <a href="registro_proveedor.php">Registrar Nuevo Proveedor</a>
                                            </li>
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
                                <input class="au-input au-input--xl" type="hidden" name="search" />
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
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['nombre_completo']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <img src="../images/kda1.png" alt="" width="300px" />
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <label><?php echo $_SESSION['nombre_completo']; ?></label>
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
                                    <h2 class="title-1">Registro de Producción.<br>Linea de Moises</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <br><br>
    				<div class="row"> 
						<div class="col-md-7">
							<div class="overview-wrap">
										<button class="au-btn au-btn-icon au-btn--blue" name="Guardar" data-toggle="modal" data-target="#modal-cantidad-dia">
											Agregar Producción del día.
										</button>
							</div>
						</div>
							
						</div>
						<div>
							
									<div class="overview-wrap">
										<button class="au-btn au-btn-icon au-btn--blue" name="Guardar">
											Guardar
										</button>
									</div>
							
							<?php 
								$query = 'SELECT * FROM linea_1;';
								$query_result = mysqli_query($conexion,$query);
							?>
						<br><br>
						<table id="produccion" style="text-align:center">
								<thead style="">
									<th>Numero</th>
									<th>Cantida</th>
									<th>Descripción</th>
									<th>Fecha</th>
									<th>Id_Supervisor</th>
								</thead>
								<tbody style="text-align:center;">
									<?php
										while(($row = mysqli_fetch_array($query_result)) != null){
										
											echo '<tr>
												<td>'.$row['id_linea1'].'</td>
												<td>'.$row['cantidad'].'</td>
												<td>'.$row['descripcion'].'</td>
												<td>'.$row['fecha'].'</td>
												<td>'.$row['id_superv'].'</td>
												
											</tr>';
										}//end while
									?>
								</tbody>
							</table>
						</div>
						<br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Business Technology. All rights reserved. Template by <a href="#">Business Technology</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
		<div class="modal" tabindex="-1" role="dialog" id="modal-cantidad-dia">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar Producción del Día.</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="row">
			<div class="col-md-12">
			<label>
				<h4>Cantidad Producción.</h4>
			</label>
			
			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<input type="number" name="cantidad-dia" id="modal-numeroProduccion" placeholder="Numero de Producción" class="form-control"><h4>Descripción de Producción.</h4>    
    	<input type="text" name="cantidad-dia" id="modal-descripcion" placeholder="Descripción de Producción" class="form-control">
			<input type="hidden" name="id_supervisor" id="id_supervisor" placeholder="Descripción de Producción" value="<?php echo $_SESSION['id_usuario']?>" class="form-control">
			

			</div>
			</div>
        <p><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnagregarlinea1" class="btn btn-primary">Agregar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="Producción-dia">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
			<?php
			$con=mysqli_connect('localhost','root','','kda');
			$consulta=mysqli_query($con,"select curdate()");
			$fecha=mysqli_fetch_array($consulta);
			?>
        <h5 class="modal-title">Producción del Día <?php echo $fecha[0];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="row">
			<div class="col-md-12">
			<label>
				<h4>Cantidad Producción.</h4>
			</label>
			
			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<input type="number" name="cantidad-dia" id="modal-cantidad-dia" placeholder="Numero de Producción" class="form-control">
			</div>
			</div>
        <p><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Ver Producción</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="Producción-periodo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Producción por Periodo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="row">
			<div class="col-md-6">
			<label>
				<h4>Fecha Inicio</h4>
				
			</label>
			
			</div>
			<div class="col-md-6">
			<label>
				<h4>Fecha Fin</h4>
				
			</label>
			
			</div>
			</div>
			<div class="row">
			<div class="col-md-6">
			<input type="date" name="cantidad-dia" id="modal-cantidad-dia" placeholder="Numero de Producción" class="form-control">
			
			</div>
			<div class="col-md-6">
			<input type="date" name="cantidad-dia" id="modal-cantidad-dia" placeholder="Numero de Producción" class="form-control">
			
			</div>
			</div>
        <p><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Ver Producción</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="Producción-mes">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Producción del Mes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<div class="row">
			<div class="col-md-12">
			<label>
				<h4>Elige el Mes de Producción.</h4>
			</label>
			
			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
			<select class="js-example-basic-single" name="mes">
			<option value="enero"> 
			Enero
			</option>
			<option value="febrero"> 
			Febrero
			</option>
			<option value="marzo"> 
			Marzo
			</option>
			<option value="abril"> 
			Abril
			</option>
			<option value="mayo"> 
			Mayo
			</option>
			<option value="junio"> 
			Junio
			</option>
			<option value="julio"> 
			Julio
			</option>
			<option value="agosto"> 
			Agosto
			</option>
			<option value="septiembre"> 
			Septiembre
			</option>
			<option value="octubre"> 
			Octubre
			</option>
			<option value="noviembre"> 
			Noviembre
			</option>
			<option value="diciembre"> 
			Diciembre
			</option>
			</select>
			
			</div>
			</div>
        <p><p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Ver Producción</button>
      </div>
    </div>
  </div>
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
		<script src="../vendor/DataTables/datatables.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
		<script src="../js/funciones_lineas.js">
		</script>
<script type="text/javascript" language="javascript" src="../plugins/data-tables/DataTables-1.10.18/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="../plugins/data-tables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
			
			<script type="text/javascript">
				$(document).ready(function(){
					$('#produccion').DataTable();
					
				});
				</script>

</body>
</html>