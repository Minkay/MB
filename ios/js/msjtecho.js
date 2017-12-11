/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

		


$('document').ready(function()
{ 

		
	// MENSAJES PERSONALIZADOS


				var com ;	
				$('#at1').click(function(e) {
                	mi = $("#techo").val();               	
                	
                	switch(mi) {							    
							    case '1':
							         com ="Techo";
							        break;
							    case '2':
							         com="Conducto de drenaje pluvial";
							        break;    
							    case '3':
							         com="Cobertura de calamina";
							          break; 
							    case '4':
							         com="Canaleta de drenaje";
							          break; 
							    case '5':
							         com="Impermeabilizante";
							          break; 
							    case '6':
							         com="Geomembrana";
							          break; 
							   

							}
					
					 $("textarea").text(com);

                });




				$('#ct1').click(function(e) {
                	mi = $("#techo").val();                	
                	
                	switch(mi) {							    
							    case '1':
							         com ="Techo";
							        break;
							    case '2':
							         com="Conducto de drenaje pluvial";
							        break;    
							    case '3':
							         com="Cobertura de calamina";
							          break; 
							    case '4':
							         com="Canaleta de drenaje";
							          break; 
							    case '5':
							         com="Impermeabilizante";
							          break; 
							    case '6':
							         com="Geomembrana";
							          break; 
							   
							}
					
					 $("textarea").text(com);

                });





				$('#st1').click(function(e) {
                	mi = $("#techo").val();                	
                	
                	switch(mi) {							    
							    case '1':
							         com ="Techo";
							        break;
							    case '2':
							         com="Conducto de drenaje pluvial";
							        break;    
							    case '3':
							         com="Cobertura de calamina";
							          break; 
							    case '4':
							         com="Canaleta de drenaje";
							          break; 
							    case '5':
							         com="Impermeabilizante";
							          break; 
							    case '6':
							         com="Geomembrana";
							          break; 
							   
							}
					
					 $("textarea").text(com);

                });


				$('#bt1').click(function(e) {
                	mi = $("#techo").val();                	
                	
                	switch(mi) {							    
							      case '1':
							         com ="Techo";
							        break;
							    case '2':
							         com="Conducto de drenaje pluvial";
							        break;    
							    case '3':
							         com="Cobertura de calamina";
							          break; 
							    case '4':
							         com="Canaleta de drenaje";
							          break; 
							    case '5':
							         com="Impermeabilizante";
							          break; 
							    case '6':
							         com="Geomembrana";
							          break; 
							   
							}
					
					 $("textarea").text(com);

                });


			// FIN DE MENSAJES	
	
});