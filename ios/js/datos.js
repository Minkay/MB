function cargarzona(id) {
    
    $.post('https://www.minkay.com.pe/appsedes/user.php', {id : id}, 
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					
					    $("a#nomape").text(valor.no_nombre + " " + valor.no_apellido);
					    $(".avatar").append("<img src='" +valor.foto_perfil+"'>");


					}
		        });
		    }
		return false;
    });
}


function cargarSolicitudes(us) {
    
    $.post('https://www.minkay.com.pe/appsedes/solicitudes.php', {us : us}, 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				//$("#pais").append('<option value="0">Seleccionar Region</option>');
				$("#desti").empty();
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    //$("#dest").append('<option value="' + valor.id_region + '">' + valor.region + '</option>')
					    var str= valor.no_solicitud;
					    var n=str.substr(0,19);
					    var str2= valor.no_descripcion;
					    var n2=str2.substr(0,60);


					    $("#desti").append('<div class="media"><div class="media-left media-middle"><a href="detalle.html?sol=' + valor.id_solicitud + '">'
                        + '<img class="media-object" src="' + valor.img_solicitud + '"  style="width: 90px;margin: 6px;"></a></div><div class="media-body" style="text-align: left;"><h4 style="color: #8e9fa6;font-weight: bolder;font-size: 16px;'
                        + 'class="media-heading">' + n + '</h4><p style="font-size: 13px;">' + n2 + ' .. </p></div><div class="media-left media-middle">'
                        + '<a href="detalle.html?sol=' + valor.id_solicitud + '"><img class="media-object" src="images/ee.png" ></a></div><div class="media-left media-middle">'
                        + '<a href="eliminar.html?eli=' + valor.id_solicitud + '"><img class="media-object" src="images/tas.png" ></a></div></div>'
                        + '<hr style="margin: -5px;border-color: #d8babe;">');



					}
		        });
		    }
		return false;
    });


}

function cargarTecnico(id) {
    
    $.post('https://www.minkay.com.pe/appsedes/soltecnico.php', {id : id}, 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				//$("#pais").append('<option value="0">Seleccionar Region</option>');
				$("#desti").empty();
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    //$("#dest").append('<option value="' + valor.id_region + '">' + valor.region + '</option>')
					    var str= valor.no_solicitud;
					    var n=str.substr(0,19);
					    var str2= valor.no_descripcion;
					    var n2=str2.substr(0,60);


					    $("#desti").append('<div class="media"><div class="media-left media-middle" ><a href="detalletec.html?sol=' + valor.id_solicitud + '">'
                        + '<img class="media-object" src="' + valor.img_solicitud + '"  style="width: 90px;margin: 6px;"></a></div><div class="media-body" style="text-align: left;"><h4 style="color: #8e9fa6;font-weight: bolder;font-size: 16px;'
                        + 'class="media-heading">' + n + '</h4><p style="font-size: 13px;">' + n2 + ' .. </p></div><div class="media-left media-middle">'
                        + '<a href="detalletec.html?sol=' + valor.id_solicitud + '"><img class="media-object" src="images/ee.png" ></a></div></div>'
                        + '<hr style="margin: -5px;border-color: #d8babe;">');


	/*$no_descripcion=$row['no_descripcion'];
	    $img_solicitud=$row['img_solicitud'];
	    $no_solicitud=$row['no_solicitud']; */
    



					}
		        });
		    }
		return false;
    });


}


			function sol(){

					var pto = getParameterByName('id');
					cargarSolicitudes(pto);

			}

			function soltec(){

					var pto = getParameterByName('id');
					cargarTecnico(pto);

			}

/*function cargarPaises(zona) {
    
    $.post('https://www.minkay.com.pe/appsystem/region.php', {zona : zona}, 	
     function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#pais").append('<option value="0">Seleccionar Region</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#pais").append('<option value="' + valor.id_region + '">' + valor.region + '</option>');	
					}
		        });
		    }
		return false;
    });
}

function cargarDepartamentos(region) {
    
	$.post('https://www.minkay.com.pe/appsystem/provincia.php', {region : region},
	function(data){
			if (data != "[]") {
		        var item = $.parseJSON(data);
		        //recorremos todas las filas del resultado del proceso que obtenemos en Json
				$("#departamento").append('<option value="0">Seleccionar provincia</option>');
		        $.each(item, function (i, valor) {
		            //introducimos los option del Json obtenido
		            if (valor.nombre !== null) {
					    $("#departamento").append('<option value="' + valor.id_prov + '">' + valor.provincia + '</option>');	
					}
		        });
		    }
		return false;
    });
}

function cargarCiudades(pro) {
    
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


	 var pro = getParameterByName('id');
	cargarzona(pro);
    //cargarPaises();

  /*  $( "#zona" ).change(function() {
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
		$("#agencia").html('');
		$("#direccion").html('');
	   // cargarDepartamentos(idPais);
	   	cargarAgencia(idPais);
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
	});	*/
	

     	 var pro = getParameterByName('user');
        //localStorage.setItem("codigo", pro);
        $("#usu").val(pro);

	
});