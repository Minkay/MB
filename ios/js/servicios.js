/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

		


$('document').ready(function()
{ 

			/*$("#btn-aire").click(function () {	 
					alert($('input:radio[name=declara]:checked').val());
			
			});*/
			 var cod = localStorage.getItem("codigo");
             $("#usu53").val(cod);$("#usu54").val(cod);$("#usu355").val(cod);$("#usu4").val(cod);

	
             $("input[name='opinion']").click(function () {
		            if ($("#radio13").is(":checked")) {
		                $("#obs153").show();
		                $("#opc153").hide();
		            } else {
		            	 $("#opc153").show();
		                $("#obs153").hide();
		            }
		        });

             $("input[name='ener']").click(function () {
		            if ($("#radio254").is(":checked")) {
		                $("#fbs154").show();
		                $("#fpc154").hide();
		            } else {
		            	 $("#fpc154").show();
		                $("#fbs154").hide();
		            }
		        });

               $("input[name='aga']").click(function () {
		            if ($("#radio455").is(":checked")) {
		                $("#fbs155").show();
		                $("#fpc155").hide();
		            } else {
		            	 $("#fpc155").show();
		                $("#fbs155").hide();
		            }
		        });
                 $("input[name='a_bienes']").click(function () {
		            if ($("#radio6").is(":checked")) {
		                $("#fbs1bien").show();
		                $("#fpc1bien").hide();
		            } else {
		            	 $("#fpc1bien").show();
		                $("#fbs1bien").hide();
		            }
		        });






// METODOS DEL PROCESO


	$("#vehicular").validate({

				   submitHandler: vehicular_en	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function vehicular_en()
	   {		


	   			var n1 = $('input:radio[name=tiempo53]:checked').val();
				var n2 = $('input:radio[name=can53]:checked').val();
				var n3 = $('input:radio[name=sum53]:checked').val();
				var n4 = $('input:radio[name=bun53]:checked').val();
				var total = n1 +" - " + n2 +" - " + n3 +" - "+ n4 
				
				var punt = total.split("NO").length - 1;
				var punt1 = total.split("SI").length - 1;

				var taje ="";
				//alert(punt);
				if(punt=="4"){
						taje = "1";
				}
				else if(punt=="3"){
						taje = "2";
				}
				else if(punt=="2"){
						taje = "3";
				}
				else if(punt=="1"){
						taje = "4";
				}
				else if(punt=="0" && punt1=="0" ){
						taje = "";
				}
				else{
						taje = "5";
				}	

				$("#ptje53").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#vehicular").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=vehicular',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#at153").removeAttr("checked");$("#at253").removeAttr("checked");
							$("#ct153").removeAttr("checked");$("#ct253").removeAttr("checked");
							$("#st153").removeAttr("checked");$("#st253").removeAttr("checked");
							$("#bt153").removeAttr("checked");$("#bt253").removeAttr("checked");
							$("#radio13").removeAttr("checked");$("#radio53").removeAttr("checked");
							//$("#comment").value("");
							$("#ectrica").click();
						
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


		$("#energ").validate({

				   submitHandler: vehicular_en	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function vehicular_en()
	   {		


	   			var n1 = $('input:radio[name=tiempo54]:checked').val();
				var n2 = $('input:radio[name=can54]:checked').val();
				var n3 = $('input:radio[name=sum54]:checked').val();
				var n4 = $('input:radio[name=bun54]:checked').val();
				var total = n1 +" - " + n2 +" - " + n3 +" - "+ n4 
				
				var punt = total.split("NO").length - 1;
				var punt1 = total.split("SI").length - 1;

				var taje ="";
				//alert(punt);
				if(punt=="4"){
						taje = "1";
				}
				else if(punt=="3"){
						taje = "2";
				}
				else if(punt=="2"){
						taje = "3";
				}
				else if(punt=="1"){
						taje = "4";
				}
				else if(punt=="0" && punt1=="0" ){
						taje = "";
				}
				else{
						taje = "5";
				}	

				$("#ptje54").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#energ").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=energia',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#at1254").removeAttr("checked");$("#at2254").removeAttr("checked");
							$("#ct2254").removeAttr("checked");$("#ct354").removeAttr("checked");
							$("#st1154").removeAttr("checked");$("#st2254").removeAttr("checked");
							$("#bt1154").removeAttr("checked");$("#bt2254").removeAttr("checked");
							$("#radio254").removeAttr("checked");$("#radio354").removeAttr("checked");
							//$("#comment").value("");
							$("#agua").click();
						
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


		$("#aguac").validate({

				   submitHandler: aguac_en	
			       });  
				   /* validation */
	   
	   /* login submit */
	   function aguac_en()
	   {		


	   			var n1 = $('input:radio[name=tiempo55]:checked').val();
				var n2 = $('input:radio[name=can255]:checked').val();
				var n3 = $('input:radio[name=sum2355]:checked').val();
				var n4 = $('input:radio[name=bun2355]:checked').val();
				var total = n1 +" - " + n2 +" - " + n3 +" - "+ n4 
				
				var punt = total.split("NO").length - 1;
				var punt1 = total.split("SI").length - 1;

				var taje ="";
				//alert(punt);
				if(punt=="4"){
						taje = "1";
				}
				else if(punt=="3"){
						taje = "2";
				}
				else if(punt=="2"){
						taje = "3";
				}
				else if(punt=="1"){
						taje = "4";
				}
				else if(punt=="0" && punt1=="0" ){
						taje = "";
				}
				else{
						taje = "5";
				}	

				$("#ptje55").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#aguac").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'http://minkay.com.pe/pais/mantenimiento/mantenimiento.php?funcion=agua',
				data : data,
				success :  function(response)
				   {						
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							$("#at12355").removeAttr("checked");$("#at22355").removeAttr("checked");
							$("#ct2255").removeAttr("checked");$("#ct355").removeAttr("checked");
							$("#st11355").removeAttr("checked");$("#st22355").removeAttr("checked");
							$("#bt11355").removeAttr("checked");$("#bt22355").removeAttr("checked");
							$("#radio455").removeAttr("checked");$("#radio3355").removeAttr("checked");
							//$("#comment").value("");
							$("#limpie").click();
						
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