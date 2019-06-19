<?php

session_start();
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
<html lang="">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMM KDA</title>
    
    
     <script src="jquery-3.2.1.min.js"></script>
    
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
        #table1{
            text-align: center;
            background-color: white;
            font-family: serif;
            font-size: 18px;
            width: 570px;
            color:black;
            height: 40px;
            
        }
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
            height: 10px;
            position: fixed;
            top: 330px;
            right: 440px;
        }*/
    
    </style>
</head>

<body bgcolor="moccasin">
    <center>
        <h1><font color="darkblue"><font face="Harrington">Programa de mantenimiento de maquinaria</font></font></h1>
        <div id="etiqueta">
        <input type="image" src="Imagenes/cropped-boton-inicio-1.png" widht="80px" height="80px" onclick="location.href='index.php'"/>
        </div>
            <MARQUEE SCROLLAMOUNT=12 behavior="alternate"><font color="red"><font face="Bookman Old Style">INDUSTRIAS KDA S.A. DE C.V.</font></font></MARQUEE>
        <hr size="4px" width="100%" align="center" color="darkred"/>
    </center>
    
        <center>
            <h2><font face="Comic Sans MS" color="darkblue">Mantenimiento</font></h2>
            <input type="hidden" id="valorID" value="<?php echo $id;?>" />
            
            <?php
                if($contador>0){
                    ?>
            <div id="div1">
                <table id="table1" >
                        <tr style="text-align:center;font-family:Comic Sans MS;font-size:18px;background-color:lightgreen;color:blue;">
                            <td>Mantenimiento
                            </td>
                            <td>Fecha
                            </td>
                    </tr>
                    <?php
                    $sqlD="select * from mantenimiento where No_Inter_Maquina=".$id;
                    $consultaD=mysqli_query($conecta,$sqlD);
                    while($datos3=mysqli_fetch_array($consultaD)){
                    ?>
                    <tr>
                        <td><?php echo $datos3['Nombre_Mantenimiento'];?>
                        </td>
                        <td><?php echo $datos3['Fecha'];?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
            </div><br>
                        <textarea id="mantenimiento" placeholder="Ingresa el Mantenimiento " required="required" style='width: 210px; font-size: 16px; text-align: center'></textarea>
            
                        <div id="etiagregar">
                        <input value="Agregar" name="agregar" class="agregar" id="agregarcampo" style="height:20px;width:100px; text-align:center;"/>
                        </div>
            
                <?php
                }else{
                    ?>
                        <textarea id="mantenimiento" placeholder="Ingresa el Mantenimiento " required="required" style='width: 210px; font-size: 16px; text-align: center'></textarea>
                    <div id="etiagregar">
                        <input value="Agregar" name="agregar" class="agregar" id="agregarcampo" style="height:20px;width:100px; text-align:center;"/>
                        </div>

                <?php
                }
            ?>
            
            
        </center>
    
    
        <section>
            <div id="Botones"> 
                <center><br><br><br><br>
                    <div id="etipdf">
                        <a type="button" id="pdf" value="Exportar PDF" class="exportarpdf"><img src="Imagenes/pdf.ico" style="width:75px;height:75px;"/><font face="Arial" size="4px">Exportar a PDF</font></a>
                    </div>
                    <div id="etiexcel">
                        <a type="button" id="excel" value="Exportar Excel" class="exportarexcel"><img src="Imagenes/excel.ico" style="width:75px;height:75px;"/><font face="Arial" size="4px">Exportar a Excel</font></a>
                    </div>
                </center>
            </div>
        </section>
</body>
</html>

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
			//alert("Exportar a excel");
			num=$('#valorID').val();
			//alert(num);
			window.location="exportarexcel.php?val="+num;
		});
        
        
    });
</script>