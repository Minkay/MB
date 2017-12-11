


function cargarPaises(zona) {
    
    $.post('http://minkay.com.pe/app/region.php', {zona : zona}, 	
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


  function getParameterByName(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
          results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }





$(document).ready(function () {
	//se cargan automaticamente los paises porque no dependen de otro item
	cargarzona();
    //cargarPaises();

    

	$( "#agencia" ).change(function() {	   
	    var idDpto = $("#agencia").val();	
		$("#direccion").html('');
	    cargarDireccion(idDpto);
	});	
	



     	 var pro = getParameterByName('user');
        //localStorage.setItem("codigo", pro);
        $("#usu").val(pro);

	
});