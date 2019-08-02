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

function agregardatosempleado(datos){
	d=datos.split('||');
  $('#idAct').val(d[0]);
	$('#nombreAct').val(d[1]);
	$('#apePAct').val(d[2]);
	$('#apeMAct').val(d[3]);
	$('#calleAct').val(d[4]);
  $('#numAct').val(d[5]);
  $('#cpAct').val(d[6]);
	$('#telefonoAct').val(d[7]);
	$('#puestoAct').val(d[8]);

}

$('#btnGuardarNuevoEmpleado').click(function(){
  vacios=validarFormVacio('formularioNuevoEmpleado');
  if(vacios > 0){
    alertify.warning("Debes llenar todos los campos :l");
    return false;
  }
	datos=$('#formularioNuevoEmpleado').serialize();
	$.ajax({
	  type:"POST",
		data:datos,
		url:"../adm/jsonRecursosHumanos.php?accion=agregarNuevoEmpleado",
		success:function(r){
      window.location = "RH_Empleados.php";
		}
	});
});

$('#btnActualizarEmpleado').click(function(){
  vacios=validarFormVacio('formularioActulizarEmpleado');
  if(vacios > 0){
    alertify.warning("Debes llenar todos los campos :l");
    return false;
  }
	datos=$('#formularioActulizarEmpleado').serialize();
	$.ajax({
	  type:"POST",
		data:datos,
		url:"../adm/jsonRecursosHumanos.php?accion=actualizarEmpleado",
		success:function(r){
      if(r){
        window.location = "RH_Empleados.php";
      }else{
        alertify.error("No se pudo actualizar intente de nuevo");
      }
		}
	});
});


function preguntarSiNoEliminarEmpleado(id){
	alertify.confirm('Eliminar Datos del empleado', '¿Esta seguro de eliminar a este empleado? la accion no podra ser revertida',
					function(){ eliminarDatosEmpleado(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosEmpleado(id){
	cadena="id=" + id;
		$.ajax({
			type:"POST",
			url:"../adm/jsonRecursosHumanos.php?accion=eliminarEmpleado",
			data:cadena,
			success:function(r){
			     window.location = "RH_Empleados.php";
			}
		});
}

$('#btnAgregarNomina').click(function(){
  vacios=validarFormVacio('formularioNuevaNomina');
  if(vacios > 0){
    alertify.warning("Debes llenar todos los campos :l");
    return false;
  }
	datos=$('#formularioNuevaNomina').serialize();
	$.ajax({
	  type:"POST",
		data:datos,
		url:"../adm/jsonRecursosHumanos.php?accion=agregarNomina",
		success:function(r){
      if(r){
        window.location = "RH_Nomina.php";
      }else{
        alertify.error("No se pudo actualizar intente de nuevo");
      }
		}
	});
});

function agregardatosnomina(datos){
	d=datos.split('||');
  $('#idNAct').val(d[0]);
	$('#nombreAct').val(d[1]);
	$('#horasAct').val(d[2]);
	$('#pagoAct').val(d[3]);
  $('#idEAct').val(d[5]);
}

$('#btnActualizarNomina').click(function(){
  vacios=validarFormVacio('formularioActulizarEmpleadoNomina');
  if(vacios > 0){
    alertify.warning("Debes llenar todos los campos :l");
    return false;
  }
	datos=$('#formularioActulizarEmpleadoNomina').serialize();
	$.ajax({
	  type:"POST",
		data:datos,
		url:"../adm/jsonRecursosHumanos.php?accion=actualizarNomina",
		success:function(r){
      if(r){
        window.location = "RH_Nomina.php";
      }else{
        alertify.error("No se pudo actualizar intente de nuevo");
      }
		}
	});
});

function preguntarSiNoEliminarNomina(id){
	alertify.confirm('Eliminar Datos del empleado', '¿Esta seguro de eliminar a este empleado? la accion no podra ser revertida',
					function(){ eliminarDatosNomina(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatosNomina(id){
	cadena="id=" + id;
		$.ajax({
			type:"POST",
			url:"../adm/jsonRecursosHumanos.php?accion=eliminarNomina",
			data:cadena,
			success:function(r){
        window.location = "RH_Nomina.php";
			}
		});
}

function ocultar(){
	$('#ordenNombre').hide();
	$('#ordenPuesto').hide();
	$('#todos').hide();
}

$('#btnOrdenarTodos').click(function() {
	ocultar();
	$('#todos').show();
});

$('#btnOrdenarPNom').click(function() {
	ocultar();
	$('#ordenNombre').show();
});

$('#btnOrdenarPpue').click(function() {
	ocultar();
	$('#ordenPuesto').show();
});

function llenarDatos(datos) {
		d=datos.split('||');
		$('#nombreEm').val(d[1]+" "+d[2]+" "+d[3]);
		$('#idE').val(d[0]);
		id = $('#idE').val();
		cadena="id=" + id;
			$.ajax({
				type:"POST",
				url:"../adm/jsonRecursosHumanos.php?accion=Determinar",
				data:cadena,
				success:function(r){
	       	if(r==1){
						$('#btnAgregarHoraEntrada').prop("disabled",false);
						$('#btnAgregarHoraSalida').prop("disabled",true);
						$('#btnFin').prop("disabled",true);
					}else if(r==0){
						$('#btnAgregarHoraEntrada').prop("disabled",true);
						$('#btnAgregarHoraSalida').prop("disabled",false);
						$('#btnFin').prop("disabled",true);
					}else if(r==2){
						$('#btnAgregarHoraEntrada').prop("disabled",true);
						$('#btnAgregarHoraSalida').prop("disabled",true);
						$('#btnFin').prop("disabled",false);
					}else{
						$('#btnAgregarHoraEntrada').prop("disabled",false);
						$('#btnAgregarHoraSalida').prop("disabled",false);
						$('#btnFin').prop("disabled",true);
					}
				}
			});
}

$('#btnAgregarHoraEntrada').click(function(){
	id = $('#idE').val();
	cadena = "id="+id;
	$.ajax({
		type:"POST",
		url:"../adm/jsonRecursosHumanos.php?accion=AgregarHoraEntrada",
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
	id = $('#idE').val();
	cadena = "id="+id;
	$.ajax({
		type:"POST",
		url:"../adm/jsonRecursosHumanos.php?accion=AgregarHoraSalida",
		data:cadena,
		success:function(r){
			if(r){
				window.location = "asistencia.php";
			}else{
				alert("No se pudo agregar la hora");
			}
		}
	});
});

$('#btnFin').click(function(){
	id = $('#idE').val();
	cadena = "id="+id;
	$.ajax({
		type:"POST",
		url:"../adm/jsonRecursosHumanos.php?accion=CalcularHoras",
		data:cadena,
		success:function(r){
			if(r){
				window.location = "asistencia.php";
			}else{
				alert("No se pudo agregar");
			}
		}
	});
});

function eliminar(datos){
	cadena = "id="+datos;
	$.ajax({
		type:"POST",
		url:"../adm/jsonRecursosHumanos.php?accion=EliminarDatosArchivo",
		data:cadena,
		success:function(r){
			if(r){
				window.location = "RH_RecursosSelecion.php";
			}else{
				alert("No se pudo agregar");
			}
		}
	});
}

function pagarNomina(datos){
	d = datos.split("||");
	id = d[0];
	idE = d[5];
	cadena = "id="+id+"&idE="+idE;
	$.ajax({
		type:"POST",
		url:"../adm/jsonRecursosHumanos.php?accion=PagarNomina",
		data:cadena,
		success:function(r){
			if(r){
				alert('Se ha solicitado el gago del empleado,Espere detalles del encargado de contabilidad');
				//window.location = "RH_Nomina.php";
			}else{
				alert("No se pudo agregar");
			}
		}
	});
}
