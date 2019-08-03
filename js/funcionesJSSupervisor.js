
function validarFormVacio(formulario){
	datos=$('#' + formulario).serialize();
	d=datos.split('&');
	vacios=0;
	for(i=0;i< d.length;i++){
			controles=d[i].split("=");
			if(controles[1]=="A" || controles[1]==""){
        vacios++;
			}
	}
	return vacios;
}

function agregarDatos(){
	vacios=validarFormVacio('formularioNuevoEmpleado');
	if(vacios > 0){
		alertify.warning("Debes llenar todos los campos :l");
		return false;
	}
	datos=$('#formularioNuevoSupervisor').serialize();
	cadena=datos;
	$.ajax({
		type:"POST",
		url:"../adm/jsonSupervisores.php?accion=agregarNuevoSupervisor",
		data:cadena,
		success:function(r){
		alert(r);
		if(r){
			window.location='ver_supervisor.php'
		}else{
			alert('NO se pudo');
		}
		}
	});
}

$('#btnAgregarHoraEntrada').click(function(){
	//alert("ASDFSD");
	id = $('#idE').val();
cadena = "id="+id;
//alert(cadena);
	$.ajax({
		type:"POST",
		url:"../adm/jsonSupervisores.php?accion=AgregarHoraEntrada",
		data:cadena,
		success:function(r){
			alert(r);
			if(r){
				window.location = "asistencia.php";
			}else{
				alert("No se pudo agregar la hora");
			}
		}
	});
});

$('#btnAgregarHoraSalida').click(function(){
	//alert("ASDFSD");
	id = $('#idE').val();
cadena = "id="+id;
//alert(cadena);
	$.ajax({
		type:"POST",
		url:"../adm/jsonSupervisores.php?accion=AgregarHoraSalida",
		data:cadena,
		success:function(r){
			alert(r);
			if(r){
				window.location = "asistencia.php";
			}else{
				alert("No se pudo agregar la hora");
			}
		}
	});
});

function editarDatos(arregloRecibido){

	alert(""+arregloRecibido);
}