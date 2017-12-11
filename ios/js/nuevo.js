

function cargarArea() {
    
    $.post('https://www.minkay.com.pe/appsedes/area.php',
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#area").append('<option value="0">- División -</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#area").append('<option value="' + valor.id_area + '">' + valor.no_area + '</option>');	
					}
		        });
		    }
		return false;
    });
} 

function cargarCargo(area) {
    
	$.post('https://www.minkay.com.pe/appsedes/cargo.php', {area : area},
	function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#cargo").append('<option value="0">- Gerencia -</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#cargo").append('<option value="' + valor.id_cargo + '">' + valor.no_cargo + '</option>');	
					}
		        });
		    }
		return false;
    });
}

/*function cargarCiudades(pro) {
    
	$.post('https://www.minkay.com.pe/appsystem/distritos.php', {pro : pro},
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#ciudad").append('<option value="0">Seleccionar distrito</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#ciudad").append('<option value="' + valor.id_dis + '">' + valor.distrito + '</option>');	
					}
		        });
		    }
		return false;
    });
}


function cargarAgencia(dis) {
    
	$.post('https://www.minkay.com.pe/appsystem/agencia.php', {dis : dis},
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#agencia").append('<option value="0">Seleccionar agencia</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#agencia").append('<option value="' + valor.id_age + '">' + valor.agencia + '</option>');	
					    
					}

						
		        });
		    }
		return false;
    });
}


function cargarDireccion(age) {
    
	$.post('https://www.minkay.com.pe/appsystem/direccion.php', {age : age},
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				//$("#agencia").append('<option value="0">Seleccionar agencia</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {

		            	$("#direccion").val(valor.direccion);	
					  //  $("#agencia").append('<option value="' + valor.id_age + '">' + valor.agencia + '</option>');
					 //  $("#dir").append('<input type="text" class="form-control" name="direccion" id="direccion" placeholder="Cargar dirección" value="'+valor.direccion+'" readonly="readonly">');	
					    
					}

					
		        });
		    }
		return false;
    });
}*/

  function getParameterByName(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
          results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
   }





$(document).ready(function () {
	//se cargan automaticamente los paises porque no dependen de otro item


	// var pro = getParameterByName('id');
	
    cargarArea();

   /* $( "#zona" ).change(function() {
	    var idPais = $("#zona").val();	
		$("#pais").html('');
		$("#departamento").html('');
		$("#ciudad").html('');
		$("#agencia").html('');
		$("#direccion").html('');
	    cargarPaises(idPais);
	}); 
	
	$( "#area" ).change(function() {
	    var idPais = $("#area").val();	
		$("#departamento").html('');
		$("#ciudad").html('');
		$("#agencia").html('');
		$("#direccion").html('');
	   // cargarDepartamentos(idPais);
	   	cargarAgencia(idPais);
	}); */
	
	$( "#area" ).change(function() {	   
	    var idDpto = $("#area").val();	
		$("#cargo").html('');
	    cargarCargo(idDpto);
	});	



/* 
	$( "#ciudad" ).change(function() {	   
	    var idDpto = $("#ciudad").val();	
		$("#agencia").html('');
	    cargarAgencia(idDpto);
	});	

	$( "#agencia" ).change(function() {	   
	    var idDpto = $("#agencia").val();	
		$("#direccion").html('');
	    cargarDireccion(idDpto);
	});	
	

     	 var pro = getParameterByName('user');
        //localStorage.setItem("codigo", pro);
        $("#usu").val(pro); */

	
});