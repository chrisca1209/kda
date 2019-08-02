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

function agregardatossupervisor(datos){
	d=datos.split('||');
  $('#idAct').val(d[0]);
	$('#nombreAct').val(d[1]);
	$('#apePAct').val(d[2]);
	$('#apeMAct').val(d[3]);
	$('#noLinea').val(d[4]);
}

$('#btnGuardarNuevoSupervisor').click(function(){
  vacios=validarFormVacio('formularioNuevoSupervisor');
  if(vacios > 0){
    alertify.warning("Debes llenar todos los campos :l");
    return false;
  }
	datos=$('#formularioNuevoSupervisor').serialize();
	$.ajax({
	  type:"POST",
		data:datos,
		url:"../adm/jsonSupervisores.php?accion=agregarNuevoSupervisor",
		success:function(r){
				alert('Datos Guardados Correctamente'); 
				window.location = "ver_supervisor.php";
			
		}
	});
});