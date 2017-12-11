/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

		


$('document').ready(function()
{ 

			/*$("#btn-aire").click(function () {	 
					alert($('input:radio[name=declara]:checked').val());
			
			});*/


			 $("input[maxlength]").keyup(function() {
                    var limit   = $(this).attr("maxlength"); // Límite del textarea
                    var value   = $(this).val();             // Valor actual del textarea
                     var current = value.length;              // Número de caracteres actual
                     if (limit < current) {                   // Más del límite de caracteres?
                         // Establece el valor del textarea al límite
                        $(this).val(value.substring(0, limit));
                    }
               });


			$('.ser').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				    
				});


			$('.minto').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});


			$('.logis').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});

			$('.et').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});
			$('.tec').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});
			$('.intn').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});
			$('.mbl').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});
			$('.eqto').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});

			$('.obv').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});

			$('.extr').click(function(){
				    if(!$(this).hasClass('red'))
				          $(this).addClass('red');
				});


			


			var lg ="";

			   $('a.minto').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#doc").val(lg);

                	var option = $(this).attr('value');
       
	               if(option=="1"){
	               	 $("#observac").html("LOGISTICA");
	               	 $("#texobs").html("AB. ECONOMATO, AB. FORMATERIA,  SERVICIO");
	                }else if(option=="2"){
	               	 $("#observac").html("SERVICIOS");
	               	 $("#texobs").html("ENERGIA ELECTRICA, AGUA, TELEFONIA, PROGRAM. VEHICULAR");
	                }
	                else if(option=="3"){
	               	 $("#observac").html("INF. EXTERNA");
	               	 $("#texobs").html("FRISO LUMINOSO O LETRERO C. HISTÓRICO, PUERTA PRINCIPAL, VIDRIOS DE FACHADA, RETIRO MUNIIPAL, VEREDA");
	                }
	                else if(option=="4"){
	               	 $("#observac").html("INF.. INTERNA");
	               	 $("#texobs").html("HALL DE ATENCION, OPERACIONES, CAJA, ASESORES, RECUPERACIONES, SALA DE REUNION, SSHH, KICHENET,ETC");
	                }
	                else if(option=="5"){
	               	 $("#observac").html("MOBILIARIO");
	               	 $("#texobs").html("MODULOS DE ATENCION, SILLONERIA, CREDENZAS, ANAQUELES, ETC");
	                }
	                else if(option=="6"){
	               	 $("#observac").html("EQUIPAMIENTO");
	               	 $("#texobs").html("AIRE ACONDICIONADO, LUMINARIAS, EXTINTORES, SIST DE VIDEO, DISPENSADOR DE AGUA, PROYECTOR");
	                }


                });


			   


			  $('a.logis').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#logi").val(lg);
                });

			  $('a.ser').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#ser").val(lg);
                });

			  $('a.et').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#ext").val(lg);
                });

			   $('a.tec').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#techo").val(lg);
                });

			   $('a.intn').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#interna").val(lg);
                });

			    $('a.mbl').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#mo").val(lg);
                });

                 $('a.eqto').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#eq").val(lg);
                });

                $('a.obv').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#obc").val(lg);
                });

                 $('a.extr').click(function(e) {
                	lg = $(this).attr('value');
                	$("#oc").toggle("hide");
                	$("#mos").toggle("slow");
                	$("#extra").val(lg);
                });

              

			 



			  $('#atras').click(function() {
                	$("#oc").toggle("slow");
                	$("#mos").toggle("hide");
					$("#at2").prop("checked","checked");
					$("#ct2").prop("checked","checked");
					$("#st2").prop("checked","checked");
					$("#bt2").prop("checked","checked");
					$("#observac").html("OBSERVACIONES");
                	
                });


			 
			/* var cod = localStorage.getItem("codigo");
             $("#usu").val(cod);$("#usu2").val(cod);$("#usu3").val(cod);$("#usu4").val(cod);



             function item(code) {
    
				    $.post('https://www.minkay.com.pe/appsystem/SelectItem.php', {code : code}, 	
				     function(data){
							if (data != "[]") {
						        var item = $.parseJSON(data);
						        $.each(item, function (i, valor) {						           
						            if (valor.nombre !== null) {									  
									    $("a.minto").each(function(){
							        	    var it = $(this).attr("id");
							        	    if(valor.doc==it){
										    	$(".minto#"+ valor.doc).addClass("red");
										    	//alert(valor.doc + " es igual a " + it);
										    }

							        	});
									}
						        });
						    }
						return false;
				    });
				}

				if(cod!=""){
					item(cod);
				}*/
				


             $("input[name='declara']").click(function () {
		            if ($("#radio1").is(":checked")) {
		                //$("#obs1").show();
		                //$("#opc1").hide();
		               // $('#nuevo').trigger('reset');
		                $("#at2").removeAttr("checked");
		                $("#ct2").removeAttr("checked");
		                $("#st2").removeAttr("checked");
		                $("#bt2").removeAttr("checked");
		            } else {
		            	 $("#opc1").show();
		                $("#obs1").hide();
		                $("#at2").prop("checked","checked");
		                $("#ct2").prop("checked","checked");
		                $("#st2").prop("checked","checked");
		                $("#bt2").prop("checked","checked");
		            }
		        });

             $("input[name='formateria']").click(function () {
		            if ($("#radio2").is(":checked")) {
		                $("#fbs1").show();
		                $("#fpc1").hide();
		            } else {
		            	 $("#fpc1").show();
		                $("#fbs1").hide();
		            }
		        });

               $("input[name='courier']").click(function () {
		            if ($("#radio4").is(":checked")) {
		                $("#fbs1ser").show();
		                $("#fpc1ser").hide();
		            } else {
		            	 $("#fpc1ser").show();
		                $("#fbs1ser").hide();
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

		$("#sede").validate({

		   submitHandler: man	
	       });  

		function man()

	   {		
		
						
			var imge = $('#imagen').val();
			var valNew = imge.split('\\');
			$("#imge").val(valNew[2]);



	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#sede").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsedes/mantenimiento/mantenimiento.php?funcion=sede',
				data : data,
				success :  function(response)
				   {				
				   		//alert(data);
				   		$("#subim").click();
						if(response=="ok"){
							
								alert("Su registro fue un éxito");
								var value1 = $("input#usu").val();
								$('#sede').trigger('reset');
								$("input#usu").val(value1);

							/*	$('#nuevo').each (function(){
								    this.reset();
								});*/
								  $(".messages").css("display","none");							
				                  /*$("#oc").toggle("slow");
                				  $("#mos").toggle("hide");*/
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



		$("#nuevore").validate({

				   submitHandler: regnu
			       });  
				   /* validation */
	   
	   /* login submit */
	   function regnu()
	   {		


	   	/*		var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
				var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);

  */
				


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#nuevore").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsedes/mantenimiento/mantenimiento.php?funcion=regnu',
				data : data,
				success :  function(response)
				   {					
				   		//alert(data);
				   		$("#subim").click();
						if(response=="ok"){
							
								alert("Su registro fue un éxito");
								//var value1 = $("input#usu").val();
								$('#nuevore').trigger('reset');
								setTimeout(' window.location.href = "presentacion.html"; ',1000);
								/*$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");

								$('#reg_logistica').each (function(){
								  this.reset();
								});
								$(".messages").css("display","none");							
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");*/
							}
						else{
									
							alert("El usuario o email ya ha sido registrado, revise sus datos.");
							//setTimeout(' window.location.href = "presentacion.html"; ',1000);
						}
				  }
				});
					return false;
	   		}

			
		}


$("#reg_servicios").validate({

				   submitHandler: reg_serv
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_serv()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
				var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);



	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_servicios").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=servicios',
				data : data,
				success :  function(response)
				   {						
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_servicios').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");

							/*$('#reg_servicios').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");
								
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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


		$("#reg_infra_ext").validate({

				   submitHandler: reg_servi
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_servi()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
				var total = n1 +" - " + n2 +" - " + n3 +" - "+ n4 
					
				//alert(total);


				var punt = total.split("NO").length - 1;
				//alert(punt);
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

				//alert(taje);

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
				var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_infra_ext").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=externa',
				data : data,
				success :  function(response)
				   {						
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_infra_ext').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");

						/*	$('#reg_infra_ext').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");							
				                $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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

		$("#reg_techo").validate({

				   submitHandler: reg_techo
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_techo()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
					var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_techo").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=techo',
				data : data,
				success :  function(response)
				   {						
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_techo').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");


						/*	$('#reg_techo').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");
						
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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

		

		$("#reg_interna").validate({

				   submitHandler: reg_intern
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_intern()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
				var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_interna").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=interna',
				data : data,
				success :  function(response)
				   {						
				   		
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_interna').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");


						/*	$('#reg_interna').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");								
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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


$("#reg_mobil").validate({

				   submitHandler: reg_mob
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_mob()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
					var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_mobil").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=mobi',
				data : data,
				success :  function(response)
				   {						
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_mobil').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");


						/*	$('#reg_mobil').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");
								
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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


		$("#reg_equipo").validate({

				   submitHandler: reg_eq
			       });  
				   /* validation */
	   
	   /* login submit */
	   function reg_eq()
	   {		


	   			var n1 = $('input:radio[name=tiempo]:checked').val();
				var n2 = $('input:radio[name=can]:checked').val();
				var n3 = $('input:radio[name=sum]:checked').val();
				var n4 = $('input:radio[name=bun]:checked').val();
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

				$("#ptje").val(taje);
				//alert(punt);
				//alert($("#opc1 input:checked").length)
				
					var imge = $('#imagen').val();
				var valNew = imge.split('\\');
				$("#imge").val(valNew[2]);

				var imge2 = $('#imagen2').val();
				var valNew2 = imge2.split('\\');
				$("#imge2").val(valNew2[2]);

				var imge3 = $('#imagen3').val();
				var valNew3 = imge3.split('\\');
				$("#imge3").val(valNew3[2]);

				var imge4 = $('#imagen4').val();
				var valNew4 = imge4.split('\\');
				$("#imge4").val(valNew4[2]);


	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#reg_equipo").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=equipo',
				data : data,
				success :  function(response)
				   {						
				   		$("#subim").click();
						if(response=="ok"){
							
							alert("Su registro fue un éxito");
							var value1 = $("input#usu").val();
								$('#reg_equipo').trigger('reset');
								$("input#usu").val(value1);
								$("#at2").prop("checked","checked");
				                $("#ct2").prop("checked","checked");
				                $("#st2").prop("checked","checked");
				                $("#bt2").prop("checked","checked");


						/*	$('#reg_equipo').each (function(){
								  this.reset();
								});*/
								$(".messages").css("display","none");
								
				                  $("#oc").toggle("slow");
                				$("#mos").toggle("hide");
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


		$("#obser").validate({

		   submitHandler: observacion
	       });  

		function observacion()

	   {		
		
						
			var imge = $('#imagen').val();
			var valNew = imge.split('\\');
			$("#imge").val(valNew[2]);



	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#obser").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=obser',
				data : data,
				success :  function(response)
				   {				
				   		
				   		$("#subim").click();
						if(response=="ok"){
							
								alert("Su registro fue un éxito");
								var value1 = $("input#usu").val();
								$('#obser').trigger('reset');
								$("input#usu").val(value1);

							/*	$('#nuevo').each (function(){
								    this.reset();
								});*/
								$(".messages").css("display","none");							
				                  $("#oc").toggle("slow");
                				  $("#mos").toggle("hide");
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



		$("#extr").validate({

		   submitHandler: extras	
	       });  

		function extras()

	   {		
		
						
			var imge = $('#imagen').val();
			var valNew = imge.split('\\');
			$("#imge").val(valNew[2]);



	   		var us = $("#username").val();
	   		var pa = $("#password").val();


	   		if(us=="" && pa==""){
	   				alert("Debes llenar tus datos");
	   		}
	   		else{

	   			var data = $("#extr").serialize();		

				$.ajax({				
				type : 'POST',
				url  : 'https://www.minkay.com.pe/appsystem/mantenimiento/mantenimiento.php?funcion=extras',
				data : data,
				success :  function(response)
				   {				
				   		
				   		$("#subim").click();
						if(response=="ok"){
							
								alert("Su registro fue un éxito");
								var value1 = $("input#usu").val();
								$('#extr').trigger('reset');
								$("input#usu").val(value1);

							/*	$('#nuevo').each (function(){
								    this.reset();
								});*/
								$(".messages").css("display","none");							
				                  $("#oc").toggle("slow");
                				  $("#mos").toggle("hide");
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