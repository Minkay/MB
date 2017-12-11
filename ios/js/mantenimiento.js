/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/


$('document').ready(function()
{ 

			/*$("#btn-aire").click(function () {	 
					alert($('input:radio[name=declara]:checked').val());
			
			});*/
	

		   $('a.minto').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#doc").val(lg);
                });


		    $('#atras').click(function() {
                	$("#oc").toggle("slow");
                	$("#mos").toggle("hide");
                	
                });

		$("#nuevo").validate({

				   submitHandler: man	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function man()
	   {		



         if($('#doc').val()=="0" )
              {
                alert("Debes seleccionar un elemento de la lista");
                $('#doc').focus();
              }
	   		else{

	   			var data = $("#nuevo").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=man',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							//alert("Su rssss");
							$("#doc").val("0");
							$("#radio1").removeAttr("checked");
							$("#radio5").removeAttr("checked");
							
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
							alert(response);
							alert("Falló en registrarse");
							$("#doc").val();
							$("#radio5").removeAttr("checked");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}



		$("#extinto").validate({

				   submitHandler: extintores	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function extintores()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#extinto").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=extintores',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio2").removeAttr("checked");
							$("#radio3").removeAttr("checked");
							$("#grupo").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}



		$("#grupoe").validate({

				   submitHandler: grupoelectro	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function grupoelectro()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#grupoe").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=grupo',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio4").removeAttr("checked");
							$("#radio55").removeAttr("checked");
							$("#luces").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}


		$("#lucese").validate({

				   submitHandler: luces	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function luces()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#lucese").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=luces',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio66").removeAttr("checked");
							$("#radio77").removeAttr("checked");
							$("#pozo").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}


		$("#potierra").validate({

				   submitHandler: posotierra	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function posotierra()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes ingresar tus datos");
	   		}
	   		else{

	   			var data = $("#potierra").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=pozo',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio8").removeAttr("checked");
							$("#radio9").removeAttr("checked");
							$("#fumigacion").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}

		$("#fumi").validate({

				   submitHandler: fumigacion	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function fumigacion()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes ingresar tus datos");
	   		}
	   		else{

	   			var data = $("#fumi").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=fumi',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio10").removeAttr("checked");
							$("#radio11").removeAttr("checked");
							$("#certificado").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}

		$("#cer").validate({

				   submitHandler: certificacion	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function certificacion()
	   {		

	   		var us2 = $("#username").val();
	   		var pa2 = $("#password").val();


	   		if(us2=="" && pa2==""){
	   				alert("Debes ingresar tus datos");
	   		}
	   		else{

	   			var data = $("#cer").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=certi',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#radio12").removeAttr("checked");
							$("#radio13").removeAttr("checked");
							$("#continuar").click();
							//setTimeout(' window.location.href = "mantenimiento.html"; ',1000);
						}
						else{
									
							alert("Falló en registrarse");
							//setTimeout(' window.location.href = "panel.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}


	
});