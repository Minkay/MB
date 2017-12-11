$(function(){
  $(".fab,.backdrop_gray").click(function(){
    if($(".backdrop_gray").is(":visible")){
      $(".backdrop_gray").fadeOut(125);
      $(".fab.child")
        .stop()
        .animate({
          bottom  : $("#masterfab").css("bottom"),
          opacity : 0
        },125,function(){
          $(this).hide();
        });
    }else{
      $(".backdrop_gray").fadeIn(125);
      $(".fab.child").each(function(){
        $(this)
          .stop()
          .show()
          .animate({
            bottom  : (parseInt($("#masterfab").css("bottom")) + parseInt($("#masterfab").outerHeight()) + 70 * $(this).data("subitem") - $(".fab.child").outerHeight()) + "px",
            opacity : 1
          },125);
      });
    }
  });
});


$(document).ready(function(){


       $("a.logis").click(function(){
               var option = $(this).attr('value');
   
               if(option=="1"){
                $("#1").html("A tiempo");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }else if(option=="2"){
               $("#1").html("A tiempo");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }
               else if(option=="3"){
                $("#1").html("Coordinación oportuna ");
                $("#2").html("Buen trato de su personal");
                $("#3").html("Puntualidad");
                $("#4").html("Sin perdidas");

               }
               else if(option=="4"){
                $("#1").html("A tiempo");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }
        

            });



        $("a.ser").click(function(){
               var option = $(this).attr('value');
               //alert(option);
               if(option=="1"){
                $("#1").html("Abastecimiento de moto es oportuna");
                $("#2").html("Atencion oportuna (entrga documentos-moto pagada)");
                $("#3").html("Todos son casos tubieron proceso regular (no hay motos en la agencia)");
                $("#4").html("Sin inconvenientes en los pagos (recibos)");

               }else if(option=="2"){
                $("#1").html("Sin cortes del suministro electrico");
                $("#2").html("Energia es estable y potencia requerida");
                $("#3").html("Medidor es propio)");
                $("#4").html("Sin inconvenientes en los pagos (recibos)");

               }
               else if(option=="3"){
                $("#1").html("Sin cortes del suministro de agua");
                $("#2").html("El suministro de agua es suficiente y el agua es potable");
                $("#3").html("Medidor es propio");
                $("#4").html("Sin inconvenientes en los pagos (recibos)");

               }
               else if(option=="4"){
                $("#1").html("Colaborador y de buen trado");
                $("#2").html("Puntualidad");
                $("#3").html("Eficiencia en sus labores");
                $("#4").html("Turno completo");

               }
               else if(option=="5"){
                $("#1").html("Cantidad de anexos es suficiente");
                $("#2").html("Todos operativos (en ese momento)");
                $("#3").html("No presentan casos de mantto recurrente y Ubicación es la apropiada");
                $("#4").html("Buena señal en la linea");

               }
               else if(option=="6"){
                $("#1").html("La Agencia cuenta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Calidad de agua es adecuada");
                $("#4").html("Modelo / ubicación del equipo, son apropiado para la agencia");

               }
               else if(option=="7"){
               $("#1").html("La Agencia cuenta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Ubicación del equipo, son apropiado para la agencia");
                $("#4").html("Modelo del equipo, son apropiado para la agencia");

               }
               else if(option=="8"){
                $("#1").html("Tiene lactario (ambiente/espacio apropiado)");
                $("#2").html("Esta amoblado correctamente");
                $("#3").html("Cueta con friobar independiente");
                $("#4").html("En buenas condiciones: Pintura, Limpieza, Orden");

               }
               else if(option=="9"){
                $("#1").html("Cuneta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Ubicación del equipo, son apropiado para la agencia");
                $("#4").html("Modelo del equipo, es el apropiado para la agencia");

               }
               else if(option=="10"){
                $("#1").html("Tiene kitcchen (ambiente/espacio apropiado)");
                $("#2").html("Es Independiente (no comparte con otras areas)");
                $("#3").html("En buenas condiciones: Pintura");
                $("#4").html("Limpio y Ordenado");

               }
               else if(option=="11"){
                $("#1").html("Cuneta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Ubicación del equipo, son apropiado para la agencia");
                $("#4").html("Modelo del equipo, es el apropiado para la agencia");

               }
               else if(option=="12"){
                 $("#1").html("Cuneta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Ubicación del equipo, son apropiado para la agencia");
                $("#4").html("Modelo del equipo, es el apropiado para la agencia");

               }
               else if(option=="13"){
                 $("#1").html("Cuneta con el equipo");
                $("#2").html("Operativos (funcianan)");
                $("#3").html("Ubicación del equipo, son apropiado para la agencia");
                $("#4").html("Modelo del equipo, es el apropiado para la agencia");

               }
               else if(option=="14"){
                $("#1").html("La Agencia cuenta con el mobiliario");
                $("#2").html("El mobiliario esta operativos (funcianan)");
                $("#3").html("No requiere reparacion alguna (actual)");
                $("#4").html("Modelo del mobiliario, es el apropiado para la agencia");

               }
               else if(option=="15"){
                 $("#1").html("La Agencia cuenta con el mobiliario");
                $("#2").html("El mobiliario esta operativos (funcianan)");
                $("#3").html("No requiere reparacion alguna (actual)");
                $("#4").html("Modelo del mobiliario, es el apropiado para la agencia");

               }
               else if(option=="16"){
                $("#1").html("Tiene sumidero");
                $("#2").html("Esta dentro del ambiente");
                $("#3").html("En buen estado");
                $("#4").html("No emana mal olor");

               }
               else if(option=="17"){
                $("#1").html("Tiene sshh Discapacitados");
                $("#2").html("Infraestructura en buen estado: Techo, Paredes, Piso");
                $("#3").html("Recubrimiento y Pintura en buen estado");
                $("#4").html("Buena ventilacion del abiente");

               }
               else if(option=="18"){
                $("#1").html("Tiene sumidero");
                $("#2").html("Esta dentro del ambiente");
                $("#3").html("En buen estado");
                $("#4").html("No emana mal olor");

               }
               else if(option=="19"){
                $("#1").html("Tiene sshh Mmixto");
                $("#2").html("Infraestructura en buen estado: Techo, Paredes, Piso");
                $("#3").html("Recubrimiento y Pintura en buen estado");
                $("#4").html("Buena ventilacion del abiente");

               }
               else if(option=="20"){
                $("#1").html("Tiene sumidero");
                $("#2").html("Esta dentro del ambiente");
                $("#3").html("En buen estado");
                $("#4").html("No emana mal olor");

               }
               else if(option=="21"){
                $("#1").html("Almacenamiento adecuado del Activo");
                $("#2").html("Imperseptible a los clientes de la agencia");
                $("#3").html("Activo puede ser Reutilizado");
                $("#4").html("Se cuenta con el informe para la baja del Activo");

               }
               else if(option=="22"){
               $("#1").html("Almacenamiento adecuado del Activo");
                $("#2").html("Imperseptible a los clientes de la agencia");
                $("#3").html("Activo puede ser Reutilizado");
                $("#4").html("Se cuenta con el informe para la baja del Activo");

               }


            });



         $("a.et").click(function(){
               var option = $(this).attr('value');
   
               if(option=="1"){
                $("#1").html("Visible al publico, buena ubicación");
                $("#2").html("Operativo: Iluminacion");
                $("#3").html("Limpio");
                $("#4").html("Buen estado de conservacion (material y color)");

               }else if(option=="2"){
                $("#1").html("Operativa al 100%: bisagras, cerrojos");
                $("#2").html("Puertas niveladas");
                $("#3").html("Buen estado de conservacion de la pintura");
                $("#4").html("Vidrios limpio y completos");

               }
               else if(option=="3"){
                $("#1").html("Revestimiento uniforme y en buen estado ");
                $("#2").html("Colores mantiene tonalidad y uniformidad");
                $("#3").html("Sin manchas/ Sin grafitis");
                $("#4").html("Limpieza y buena presentacion");

               }
               else if(option=="4"){
                $("#1").html("Vidrios Limpios");
                $("#2").html("En buen estado: Sin fisuras ni perforaciones");
                $("#3").html("Con vinil de cambio de marca");
                $("#4").html("Buen estado de silicona y elemntos de sujecion");

               }
               else if(option=="5"){
                $("#1").html("Señalizacion adecuada");
                $("#2").html("Pintura en buen estado");
                $("#3").html("Sin manchas/ Sin grafitis");
                $("#4").html("Limpieza y buena presentacion");

               }
               else if(option=="6"){
                $("#1").html("Buen estado de conservacion de la infraestructura");
                $("#2").html("Dimensiones adecuadas: Anchos / pendientes / pasos / rampas");
                $("#3").html("Sin obstrucciones, agujeros, ni obstaculos");
                $("#4").html("Pintura adecuada / Cinta antideslizante");

               }
               

            });




        $("a.tec").click(function(){
               var option = $(this).attr('value');
       
               if(option=="1"){
                $("#1").html("Se tiene acceso al techo");
                $("#2").html("No presenta casos de filracion");
                $("#3").html("Buen estado de la infraestructura (piso inferior/techo)");
                $("#4").html("Limpio de basura y obstrucciones");

               }else if(option=="2"){
                $("#1").html("Tiene ductos de drenaje");
                $("#2").html("Dimensionamiento y cantidad adecuadas");
                $("#3").html("Buen estado de conservacion (material)");
                $("#4").html("Limpios de obstrucciones");

               }
               else if(option=="3"){
                $("#1").html("Tiene cobertura de calamina");
                $("#2").html("Dimensionamiento adecuado (cubre area importante)");
                $("#3").html("Buen estado de conservación: cobertura y estructura de soporte");
                $("#4").html("No presenta Agujeros / No presenta averías");

               }
               else if(option=="4"){
                $("#1").html("Tiene canaleta de drenaje");
                $("#2").html("Dimensionamiento adecuado (según xona)");
                $("#3").html("Buen estado de conservacion (material)");
                $("#4").html("Limpios de obstrucciones");

               }
               else if(option=="5"){
                $("#1").html("Tiene Tratamiento Impermiabilizante ");
                $("#2").html("Dimensionamiento adecuado (cubre area importante)");
                $("#3").html("Buen estado de conservacion (material impermiabilizante)");
                $("#4").html("No presenta riesgos de daños futuros");

               }
               else if(option=="6"){
                $("#1").html("Buen estado de conservacion de la Geomembrana");
                $("#2").html("Dimensionamiento adecuado (cubre area importante)");
                $("#3").html("No presenta cortes, picaduras u otros daños");
                $("#4").html("No presenta riesgos de daños futuros");

               }
               

            });



         $("select[name=varia]").change(function(){
               var option = $('select[name=varia]').val();
               if(option=="Pared / Piso / Techo / Iluminacion"){
                $("#1").html("Sin fisuras / Sin desprendimientos / Sin perforaciones");
                $("#2").html("Buen estado de conservacion: tarrajeo / ceramica / drywall / baldosas / fluorescentes.");
                $("#3").html("Sin presencia de humedad / sales / sin óxido");
                $("#4").html("Limpieza: Sin manchas/ Sin grafitis / sin polvo.");

               }else if(option=="Piso"){
                $("#1").html("Sin fisuras el recubrimiento (ceramica/porcelanato)");
                $("#2").html("Sin desprendimientos/ perforaciones");
                $("#3").html("Buen estado de conservacion de la pintura");
                $("#4").html("Limpieza");

               }
               else if(option=="Techo"){
                $("#1").html("Sin fisuras / Sin desprendimientos  ");
                $("#2").html("Buen estado de conservacion del material: drywall / baldosas / tarrajeo");
                $("#3").html("Sin presencia de humedad / sales");
                $("#4").html("Limpieza: Sin manchas/ Sin grafitis");

               }
               else if(option=="Aparatos sanitarios"){
                $("#1").html("Aparatos sanitarios completos: tiene todos sus accesorios");
                $("#2").html("Buen estado de conservacion");
                $("#3").html("Dimensionamiento y Uso es el adecuado");
                $("#4").html("Cuenta con disp ahorradores instalados: caños agua, urinarios");

               }
               else if(option=="Equipamiento/Accesoerios de baño"){
                $("#1").html("Cuenta con equipam min: espejo / basureros ");
                $("#2").html("Cuenta con disp. Jabon / disp. Papel / papel toalla");
                $("#3").html("Buen estado de conservacion");
                $("#4").html("Instalados adecuadamente");

               }
                             

            });


           $("a.mbl").click(function(){
               var option = $(this).attr('value');
               if(option=="1"){
                $("#1").html("Buen estado de conservacion");
                $("#2").html("Cantidad es suficiente (poco/mucho)");
                $("#3").html("Limpias / Sin manchas");
                $("#4").html("Mobiliario es nuevo (reciente), modelo uniforme, color institucional");

               }else if(option=="2"){
                 $("#1").html("Buen estado de conservacion");
                $("#2").html("Cantidad es suficiente (poco/mucho)");
                $("#3").html("Limpias / Sin manchas");
                $("#4").html("Mobiliario es nuevo (reciente), modelo uniforme, color institucional");

               }
               else if(option=="3"){
                 $("#1").html("Buen estado de conservacion");
                $("#2").html("Cantidad es suficiente (poco/mucho)");
                $("#3").html("Limpias / Sin manchas");
                $("#4").html("Mobiliario es nuevo (reciente), modelo uniforme, color institucional");

               }
               else if(option=="4"){
                $("#1").html("Buen estado de conservacion");
                $("#2").html("Cantidad es suficiente (poco/mucho)");
                $("#3").html("Limpias / Sin manchas");
                $("#4").html("Mobiliario es nuevo (reciente), modelo uniforme, color institucional");

               }
               else if(option=="5"){
                 $("#1").html("Buen estado de conservacion");
                $("#2").html("Cantidad es suficiente (poco/mucho)");
                $("#3").html("Limpias / Sin manchas");
                $("#4").html("Mobiliario es nuevo (reciente), modelo uniforme, color institucional");

               }
               else if(option=="6"){
                $("#1").html("Cantidad suficiente / Material es el adecuado");
                $("#2").html("Seguridad / Buena sujecion");
                $("#3").html("En buen estado de conservacion");
                $("#4").html("Son del formato actual / Tiene el color corporativo");

               }
               else if(option=="7"){
                 $("#1").html("Cantidad suficiente / Material es el adecuado");
                $("#2").html("Seguridad / Buena sujecion");
                $("#3").html("En buen estado de conservacion");
                $("#4").html("Son del formato actual / Tiene el color corporativo");

               }
               else if(option=="8"){
                 $("#1").html("Cantidad suficiente / Material es el adecuado");
                $("#2").html("Seguridad / Buena sujecion");
                $("#3").html("En buen estado de conservacion");
                $("#4").html("Son del formato actual / Tiene el color corporativo");

               }
               else if(option=="9"){
                $("#1").html("Cantidad suficiente / Material es el adecuado");
                $("#2").html("Seguridad / Buena sujecion");
                $("#3").html("En buen estado de conservacion");
                $("#4").html("Son del formato actual / Tiene el color corporativo");

               }
               else if(option=="10"){
                $("#1").html("Cantidad suficiente / Material es el adecuado");
                $("#2").html("Seguridad / Buena sujecion");
                $("#3").html("En buen estado de conservacion");
                $("#4").html("Son del formato actual / Tiene el color corporativo");

               }
               

            });



         $("a.eqto").click(function(){
               var option = $(this).attr('value');
               if(option=="1"){
                $("#1").html("No hay cables sueltos");
                $("#2").html("No hay Accesorios sueltos (tomacorrientes/tapas/interruptores)");
                $("#3").html("Tableros electricos en buen estado y señalizados");
                $("#4").html("Instalacione adecuadas: No genera parpadeo");

               }else if(option=="2"){
                 $("#1").html("Cuenta con luminarias ahorro de energia (LED)");
                $("#2").html("Buena iluminacion en sus area");
                $("#3").html("Limpias y ordenadas");
                $("#4").html("Modelo uniforme / Color de luz uniforme");

               }
               else if(option=="3"){
                 $("#1").html("Se encuentra operativo (verificar con JBS)");
                $("#2").html("En buen estado de conservacion");
                $("#3").html("Limpios (superficialmente)");
                $("#4").html("capacidad y autonomia minima de 10 min");

               }
               else if(option=="4"){
                $("#1").html("Cuenta con base con ruedas");
                $("#2").html("En buen estado de consevacion y Limpio");
                $("#3").html("capacidad es adecuada para la agencia");
                $("#4").html("Tiempo menor a 1 año");

               }
               else if(option=="5"){
                 $("#1").html("Buen estado de consevacion / Limpio (superficie externa)");
                $("#2").html("tiempo menor a 1 año / Cuenta con timers de control de horario");
                $("#3").html("No genera ruidos molestos / No genra malo olores");
                $("#4").html("capacidad es adecuada para el ambiente");

               }
               else if(option=="6"){
                $("#1").html("Esta cerrado (el tamaño si puede contener a los servidores)");
                $("#2").html("Limpio");
                $("#3").html("Ordenado (cableado y ubica)");
                $("#4").html("Accseso restringido (seguridad)");

               }
               else if(option=="7"){
                 $("#1").html("Limpieza adecuada interna / externa");
                $("#2").html("Entorno despejado / acceso libre");
                $("#3").html("Sin agente externo de contaminacion");
                $("#4").html("Tapa optina, buen estado");

               }
               else if(option=="8"){
                 $("#1").html("En buen estado de conservacion");
                $("#2").html("Limpieza adecuada interna / externa");
                $("#3").html("Acceso libre y seguro (escalera)");
                $("#4").html("Capacidad m3 es requerida para la agencia");

               }
               else if(option=="9"){
                $("#1").html("Esta operativo");
                $("#2").html("Es moderno (mantalla plana)");
                $("#3").html("Tamaño minimo 32 plg ");
                $("#4").html("Proyectam los videos corporativos");

               }
               else if(option=="10"){
                $("#1").html("Operativas");
                $("#2").html("En buen estado de conservacion");
                $("#3").html("Limpieza y presentacion");
                $("#4").html("Señalizacion apropiada y visible");

               }
               else if(option=="11"){
                 $("#1").html("Operativas");
                $("#2").html("En buen estado de conservacion");
                $("#3").html("Limpieza y presentacion");
                $("#4").html("Señalizacion apropiada y visible");

               }
               else if(option=="12"){
                 $("#1").html("Operativas");
                $("#2").html("En buen estado de conservacion");
                $("#3").html("Limpieza y presentacion");
                $("#4").html("Señalizacion apropiada y visible");

               }
               else if(option=="13"){
               $("#1").html("Operativas");
                $("#2").html("En buen estado de conservacion");
                $("#3").html("Limpieza y presentacion");
                $("#4").html("Señalizacion apropiada y visible");

               }
               

            });

        




            $("select[name=logi]").change(function(){
               var option = $('select[name=logi]').val();
               if(option=="1"){
                $("#1").html("A tiempo ");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }else if(option=="2"){
                $("#1").html("A tiempo ");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }
               else if(option=="3"){
                 $("#1").html("Coordinacion oportuna ");
                $("#2").html("Buen trato de su personal");
                $("#3").html("Puntualidad");
                $("#4").html("Sin perdidas");

               }
               else if(option=="4"){
                $("#1").html("A tiempo ");
                $("#2").html("Cantidad adecuada");
                $("#3").html("Cuentan con los suministros requeridos");
                $("#4").html("Buena calidad de suministros");

               }               

            });
     
});