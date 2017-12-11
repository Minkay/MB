function cargardoc() {
    
    $.post('http://minkay.com.pe/appsystem/doc_mante_periodico.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#doc").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#doc").append('<option value="' + valor.id_doc + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}


function cargarlog() {
    
    $.post('http://minkay.com.pe/appsystem/list_logistica.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#logi").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#logi").append('<option value="' + valor.id_log + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}



function cargarser() {
    
    $.post('http://minkay.com.pe/appsystem/list_servicios.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#ser").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#ser").append('<option value="' + valor.id_ser + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}



function cargarext() {
    
    $.post('http://minkay.com.pe/appsystem/list_externa.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#ext").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#ext").append('<option value="' + valor.id_inex + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}


function cargartecho() {
    
    $.post('http://minkay.com.pe/appsystem/list_techo.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#techo").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#techo").append('<option value="' + valor.id_te + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}


function cargarinter() {
    
    $.post('http://minkay.com.pe/appsystem/list_interna.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#interna").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#interna").append('<option value="' + valor.id_inter + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}

function cargarmobi() {
    
    $.post('http://minkay.com.pe/appsystem/list_mobiliario.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#mo").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#mo").append('<option value="' + valor.id_mo + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}

function cargarequi() {
    
    $.post('http://minkay.com.pe/appsystem/lista_equipamiento.php', 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#eq").append('<option value="0">--Seleccionar--</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#eq").append('<option value="' + valor.id_equi + '">' + valor.titulo + '</option>');	
					}
		        });
		    }
		return false;
    });
}



  function getParameterByName(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
          results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }





$(document).ready(function () {
	//se cargan automaticamente los paises porque no dependen de otro item
	//cargardoc();
	/*//cargarlog();
	//cargarser();
	//cargarext();
	cargartecho();
	cargarinter();
	cargarmobi();
	cargarequi();*/


    //cargarPaises();

    $( "#zona" ).change(function() {
	    var idPais = $("#zona").val();	
		$("#pais").html('');
		$("#departamento").html('');
		$("#ciudad").html('');
		$("#agencia").html('');
		$("#direccion").html('');
	    cargarPaises(idPais);
	});
	
	$( "#pais" ).change(function() {
	    var idPais = $("#pais").val();	
		$("#departamento").html('');
		$("#ciudad").html('');
	    cargarDepartamentos(idPais);
	});
	
	$( "#departamento" ).change(function() {	   
	    var idDpto = $("#departamento").val();	
		$("#ciudad").html('');
	    cargarCiudades(idDpto);
	});	

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
        $("#usu").val(pro);

	
});