/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

		


$('document').ready(function()
{ 

		
	// MENSAJES PERSONALIZADOS


				var com ;
				var cvar;	
				$('#at1').click(function(e) {
                	mi = $("#interna").val(); 
                	varia = $("#varia").val();              	
                	
                	switch(mi) {	
                				case '1':
							         com ="En el área de caja,";
							        break;

                				case '2':
							         com ="En el área de espera,";
							        break;

							    case '3':
							         com ="En el área de plataforma,";
							        break;
							    case '4':
							         com="En el área de asesores de negocios,";
							        break;    
							    case '5':
							         com="En la sala de reuniones,";
							          break; 
							    case '6':
							         com="En el área de rack,";
							          break; 
							    case '7':
							         com="En el área de archivo,";
							          break; 
							    case '8':
							         com="En el área de economato,";
							          break;
							    case '9':
							         com ="En el kitchen,";
							        break;
							    case '10':
							         com="En el lactario,";
							        break;    
							    case '11':
							         com="Las paredes de la escalera,";
							          break; 
							    case '12':
							         com="En los servicios higíenicos,";
							          break; 

							}

					/*	switch(varia) {	
                				case 'Pared / Piso / Techo / Iluminacion':
							         cvar =" las paredes";
							        break;

                				case 'Piso':
							         cvar =" el piso";
							        break;

							    case 'Techo':
							         cvar =" el techo";
							        break;
							    case 'Aparatos sanitarios':
							         cvar=" algunos aparatos sanitarios como ";
							        break;    
							    case 'Equipamiento/Accesoerios de baño':
							         cvar=" algunos accesorios de baño como ";
							          break; 
							}*/
						
						var concat = com ; //+ cvar 

					 $("textarea").text(concat);

                });




				$('#ct1').click(function(e) {
                	mi = $("#interna").val(); 
                	varia = $("#varia").val();              	
                	
                	switch(mi) {	
                				case '1':
							         com ="En el área de caja,";
							        break;

                				case '2':
							         com ="En el área de espera,";
							        break;

							    case '3':
							         com ="En el área de plataforma,";
							        break;
							    case '4':
							         com="En el área de asesores de negocios,";
							        break;    
							    case '5':
							         com="En la sala de reuniones,";
							          break; 
							    case '6':
							         com="En el área de rack,";
							          break; 
							    case '7':
							         com="En el área de archivo,";
							          break; 
							    case '8':
							         com="En el área de economato,";
							          break;
							    case '9':
							         com ="En el kitchen,";
							        break;
							    case '10':
							         com="En el lactario,";
							        break;    
							    case '11':
							         com="Las paredes de la escalera,";
							          break; 
							    case '12':
							         com="En los servicios higíenicos,";
							          break; 

							}

					/*	switch(varia) {	
                				case 'Paredes':
							         cvar =" las paredes";
							        break;

                				case 'Piso':
							         cvar =" el piso";
							        break;

							    case 'Techo':
							         cvar =" el techo";
							        break;
							    case 'Aparatos sanitarios':
							         cvar=" algunos aparatos sanitarios como ";
							        break;    
							    case 'Equipamiento/Accesoerios de baño':
							         cvar=" algunos accesorios de baño como ";
							          break; 
							}	*/
						
						var concat = com; // + cvar; 

					 $("textarea").text(concat);
                });





				$('#st1').click(function(e) {
                	mi = $("#interna").val(); 
                	varia = $("#varia").val();              	
                	
                	switch(mi) {	
                				case '1':
							         com ="En el área de caja,";
							        break;

                				case '2':
							         com ="En el área de espera, ";
							        break;

							    case '3':
							         com ="En el área de plataforma, ";
							        break;
							    case '4':
							         com="En el área de asesores de negocios,";
							        break;    
							    case '5':
							         com="En la sala de reuniones,";
							          break; 
							    case '6':
							         com="En el área de rack";
							          break; 
							    case '7':
							         com="En el área de archivo";
							          break; 
							    case '8':
							         com="En el área de economato";
							          break;
							    case '9':
							         com ="En el kitchen";
							        break;
							    case '10':
							         com="En el lactario";
							        break;    
							    case '11':
							         com="Las paredes de la escalera";
							          break; 
							    case '12':
							         com="En los servicios higíenicos";
							          break; 

							}

					/*	switch(varia) {	
                				case 'Paredes':
							         cvar =" las paredes";
							        break;

                				case 'Piso':
							         cvar =" el piso";
							        break;

							    case 'Techo':
							         cvar =" el techo";
							        break;
							    case 'Aparatos sanitarios':
							         cvar=" algunos aparatos sanitarios como ";
							        break;    
							    case 'Equipamiento/Accesoerios de baño':
							         cvar=" algunos accesorios de baño como ";
							          break; 
							}	*/
						
						var concat = com;// + cvar; 

					 $("textarea").text(concat);

                });


				$('#bt1').click(function(e) {
                	mi = $("#interna").val(); 
                	varia = $("#varia").val();              	
                	
                	switch(mi) {	
                				case '1':
							         com ="En el área de caja,";
							        break;

                				case '2':
							         com ="En el área de espera,";
							        break;

							    case '3':
							         com ="En el área de plataforma,";
							        break;
							    case '4':
							         com="En el área de asesores de negocios,";
							        break;    
							    case '5':
							         com="En la sala de reuniones,";
							          break; 
							    case '6':
							         com="En el área de rack,";
							          break; 
							    case '7':
							         com="En el área de archivo,";
							          break; 
							    case '8':
							         com="En el área de economato,";
							          break;
							    case '9':
							         com ="En el kitchen,";
							        break;
							    case '10':
							         com="En el lactario,";
							        break;    
							    case '11':
							         com="Las paredes de la escalera,";
							          break; 
							    case '12':
							         com="En los servicios higíenicos,";
							          break; 

							}

					/*	switch(varia) {	
                				case 'Paredes':
							         cvar =" las paredes";
							        break;

                				case 'Piso':
							         cvar =" el piso";
							        break;

							    case 'Techo':
							         cvar =" el techo";
							        break;
							    case 'Aparatos sanitarios':
							         cvar=" algunos aparatos sanitarios como ";
							        break;    
							    case 'Equipamiento/Accesoerios de baño':
							         cvar=" algunos accesorios de baño como ";
							          break; 
							}	*/
						
						var concat = com// + cvar; 

					 $("textarea").text(concat);

                });


			// FIN DE MENSAJES	
	
});