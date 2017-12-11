


  function getParameterByName(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
          results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
      }





$(document).ready(function () {
	
		// var va = localStorage.getItem("user");
		
		$.getJSON( 'http://minkay.com.pe/app/list_obs.php?cd='+va, function (results) {
		$.each(results, function(i) {	    
		$("#mos").append("<tbody><tr><td style='text-align:center;'>"+results[i].fecha+"</td><td style='text-align:center;'>"+results[i].id_cod+"</td><<td style='text-align:center;'><a class='btn btn-danger btn-xs' href='detalle.html?id="+results[i].id_cod+"'>Editar</a></td></tr></tbody>"); 



						})	   
				});


     	 var pro = getParameterByName('user');
        //localStorage.setItem("codigo", pro);
        $("#usu").val(pro);

	
});