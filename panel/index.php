<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMM KDA</title>
    
     <script src="jquery-3.2.1.min.js"></script>
    
    <!--<style>
        form{
            width: 50%;margin: 0 auto;
        }
        input[type="texty"]{
            width: 100%;padding: 10px; margin-top: 10px; margin-bottom: 10px;
        }
        input[type="button"]{
            padding: 10px;
        }
        /*.exportarpdf{
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
            background-color: lime;
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
            color: lime;
            background-color: red;
        }*/
        .buscar{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: red;
            border-radius: 15px;
            border: 4px solid red;
        }
        .buscar:hover{
            color: red;
            background-color: white;
        }
        /*.guardar{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: dodgerblue;
            border-radius: 15px;
            border: 4px solid blue;
        }
        .guardar:hover{
            color: lime;
            background-color: red;
        }*/
        .mantenimiento{
            text-decoration: none;
            padding: 10px;
            font-weight: 600;
            font-size: 20px;
            color: white;
            background-color: dodgerblue;
            border-radius: 15px;
            border: 4px solid dodgerblue;
        }
        .mantenimiento:hover{
            color: dodgerblue;
            background-color: white;
        }
    
    
    </style>-->
</head>

<body bgcolor="moccasin">
    <!--<center>
        <h1><font color="darkblue"><font face="Harrington">Programa de mantenimiento de maquinaria</font></font></h1>
            <MARQUEE SCROLLAMOUNT=12 behavior="alternate"><font color="red"><font face="Bookman Old Style">INDUSTRIAS KDA S.A. DE C.V.</font></font></MARQUEE>
        <hr size="4px" width="100%" align="center" color="darkred"/>
    </center>-->
    
        <center>
            <h2><font face="Comic Sans MS" color="darkblue">Número de Máquina</font></h2>
            
            <form id="formualariobusqueda">
            <input type="text" id="busqueda" name="busqueda" placeholder="No. Máquina" required="required" style='width: 130px; font-size: 20px; text-align: center'/>
            <br><br>
            <input type="button" class="buscar" value="Buscar" id="enviar_datos_ajax"/>
            </form>
            
            
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
            </table>
                <br>
                <input type="submit" class="mantenimiento" name="Mantenimiento" id="Mantenimiento" value="Mantenimiento"/>
            </div> 
        </center>
    
    
</body>
</html>

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
