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
    <title>Registro de Mantenimiento</title>

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
                            <a class="js-arrow" href="mante.php">
                                <i class="fas fa-table"></i>Ver maquina</a>
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
                            <form class="form-header" action="" method="">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <!--<button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>-->
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
                                    <h2 class="title-1">Ver Máquina</h2>
                                </div>
                            </div>
                        </div>
						<center>
							<div><br><br>
								<form id="formualariobusqueda">
									<input type="text" id="busqueda" name="busqueda" placeholder="No. Máquina" required="required" style='width: 130px; font-size: 20px; text-align: center'/>
									<br><br>
									<input type="button" class="buscar" value="Buscar" id="enviar_datos_ajax"/>
									<!--<div class="buscar">
										<button class="au-btn au-btn-icon au-btn--blue" name="Buscar" id="enviar_datos_ajax" value="Buscar">
											Mantenimiento
										</button>
									</div>-->
								</form>
				
								<br><br>
								<div id="mostrardatos">
									<table align=center> <tr>
										<td>Número Interno</td>
										<td><input type="number" style="font-size: 18px; text-align: center" name="numcon" id="numcon" value="" readonly="readonly"/></td>
										</tr>
										<tr>
										<td>Supervisor</td>
										<td><input type="text" style="font-size: 18px; text-align: center" name="super" id="supervi" value="" readonly="readonly"/></td>
										</tr>
										<tr>
										<td>Tipo de Maquina</td>
										<td><input type="text" style="font-size: 18px; text-align: center" name="tipo_maquina" id="tipoma" value="" readonly="readonly"/></td>
										</tr>
										<tr>
										<td>Marca</td>
										<td><input type="text" style="font-size: 18px; text-align: center" name="marca" id="marca" value="" readonly="readonly"/></td>
										</tr>
										<tr>
										<td>No.Serie</td>
										<td><input type="text" style="font-size: 18px; text-align: center" name="numserie" id="numserie" value="" readonly="readonly"/></td>
										</tr>
										<tr>
									</table><br>
									<center>
										<div class="mantenimiento">
											<input type="submit" class="mantenimiento" name="Mantenimiento" id="Mantenimiento" value="Mantenimiento"/>
											<!--<button class="au-btn au-btn-icon au-btn--blue" name="Mantenimiento" id="Mantenimiento" value="Mantenimiento">
												Mantenimiento
											</button>-->
										</div>
									</center>
								</div>
							</div><br>
						</center>
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
    function esconder(){
         $('#mostrardatos').hide();
        $('#Botones').hide();
    }
    esconder();
    $('#Mantenimiento').click(function(){
        
        id=$('#numcon').val();
        //alert(id);
        window.location='Mantenimiento.php?var='+id;
    });
    /*$('#Mantenimiento').click(function(){
        id=$('#busqueda').val();
        mante=$('#mantenimiento').val();
        cadena="valor="+id+"&mante="+mante;
        alert(cadena);
        $.ajax({
           type:"POST",
            data:cadena,
            url:'procesos/Mante.php',
            success:function(r){
                alert(20);
                $('#mostrardatos').hide();
                $('#Botones').show();
            }
        });
    });*/
    $('#enviar_datos_ajax').click(function(){
        vacios=validarcampos('formualariobusqueda');
        //b = $('#busqueda').val();
        //alert (b);
        //cadena = "b="+b;
        //alert(vacios);
        if(vacios>0){
            alert("¡Ingresa un valor por favor!");
            return false;
           }
        
        cadena=$('#formualariobusqueda').serialize();
        $.ajax({
            type:"POST",
            url:'procesos/verificar.php',
            data:cadena,
            success:function(r){
            if(r==1){
               //alert("¡Maquina Existente en la Base de datos!\n\n***Felicidades***");
                llenardatos();
                $('#mostrardatos').show();
               }  else{
                      alert("¡La maquina No Existe en la Base de Datos!\n\n***Ingresa un número de maquina valido***");
                   $('#mostrardatos').hide();
                   }
            }
        });
        
    });
    
    function llenardatos(){
        $('#numcon').val();
        $('#supervi').val();
        $('#tipoma').val();
        id=$('#busqueda').val();
        cadena="id="+id;
        //alert(cadena);
        datos=new Array();
        $.ajax({
            type:"POST",
            data:cadena,
            url:'procesos/datos.php',
            success:function(r){
            datos = r.split('|');
            id = datos[0];
            supervi = datos[1];
            tipo = datos[2];
            marca = datos[3];
            modelo = datos[4];
            serie = datos[5];
            propie = datos[6];
            
                $('#numcon').val(id);
                $('#supervi').val(supervi);
                $('#tipoma').val(tipo);
                $('#marca').val(marca);
                $('#modelo').val(modelo);
                $('#numserie').val(serie);
                $('#propi').val(propie);
        }
        });
    }
    $('#pdf').click(function(){
        alert("Exportar a pdf");
        num=$('#numcon').val();
        alert(num);
        window.location="pdf/reporte.php?val="+num;
    });
    
    function validarcampos(formulario){
        datos=$('#'+formulario).serialize();
        d=datos.split('&');
        vacios=0;
        for(i=0;i<d.length;i++){
            controles=d[i].split("=");
            if(controles[1]=="A" || controles[1]==""){
                vacios++;
            }
        }
        //alert(vacios);
        return vacios;
    }
    
});
    
    
    
</script>
