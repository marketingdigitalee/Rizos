<?
$body='<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0"  class="main"  >
              <tr>
                <td height="100%" align="center" valign="top"> <!--Banner start-->
                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
<tr>
    <td align="center" valign="top" class="main" ><img src="cabezote_drone.png" width="600" height="172" alt="Vota por tu favorito aquí" style="display:block;width:100% !important; height:auto !important;" /></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="main" style=" font-family:Arial, Helvetica, sans-serif; color:#666666; padding-top:12px; padding-left:10px; padding-right:10px; font-size:13px;"  >Hola, <strong>[# nombres #]</strong>,<br /> <br />tu reserva fue confirmada!, a continuación encontrarás los datos para la redención, si tienes alguna duda sobre el procedimiento de compra del Drone no dudes en llamanos<br /> en Bogotá al teléfono: 405 5540 o a nivel nacional al 01 800 51 09 03 o ingresa a <a href="http://www.elespectador.com/drone">www.elespectador.com/drone</a> a nuestra sección de preguntas frecuentes</td>
  </tr>
</table>
<!--table-->
 <table width="500" border="1" style="margin-top:40px; margin-bottom:50px; font-family:Gotham, \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size:10px; color:#959595; border-style:solid; border-color:#B4B4B4;">
    <tr style="background-color: #C8C8C8; color:#000000; font-size:14px;">
      <td width="250"><strong>CÓDIGO DE RESERVA</strong></td>
      <td width="250">[# codigo #]</td>
    </tr>
    <tr>
      <td ><strong>CIUDAD RESERVA</strong></td>
      <td>[# combo_ciudad #]�</td>
    </tr>
    <tr>
      <td > <strong>PUNTO DE REDENCIÓN</strong></td>
      <td>[# combo_puntos #]</td>
    </tr>
    <tr>
      <td ><strong>DIRECCIÓN PUNTO DE REDENCIÓN</strong></td>
      <td>[# direccion #]</td>
    </tr>
    <tr>
      <td ><strong>FECHA DE REDENCIÓN</strong></td>
      <td>[# fecha_redencion #]</td>
    </tr>
</table>
<!--/table-->
<!--Banner End-->
</td>
</tr>
<tr>
  <td align="center" valign="top">
</td>
  </tr>
  <tr>
    <td align="center" valign="top" bgcolor="#ffffff" >
 <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="full" style="margin-top:5px;">
<tr>
        <td align="center" valign="top">
		<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" > <tr class="legales" style="border-top:dashed 1px;">

            <td align="center" valign="top" style=" font-family:Arial, Helvetica, sans-serif; color:#666666; padding-top:12px; padding-left:10px; padding-right:10px;">
Promoción válida del 7 de noviembre al 31 de diciembre de 2016 o hasta agotar existencias, 5.000 unidades disponibles en todo el país para reservas. Válido en todo el país en los almacenes Éxito seleccionados, que encontrarás en la cuponera y en 
www.elespectador.com/drone . Reserva en www.elespectador.com/drone o en los números telefónicos 405 5540 y 405 5600 en Bogotá o la línea gratuita 01 8000 510903. Las reservas deberán realizarse únicamente entre el 20 y el 27 de noviembre. La fecha en la que podrá reclamar el producto será enviada por un mensaje de texto SMS o correo electrónico que recibirá a partir del 5 de diciembre de 2016 en el número celular inscrito en la reserva o a la dirección electrónica inscrita. No se admiten cuponeras con tachones, enmendaduras o en mal estado. Los cupones serán publicados del 21 al 27 de noviembre de 2016 en el diario El Espectador. Los cupones comodines serán publicados los días 28, 29 y 30 de noviembre y 1° de diciembre de 2016. No se admiten cupones repetidos de un mismo día y sólo se admiten 4 cupones comodínes por cuponera. La redención del hexadrone de 6 hélices con cámara será del 10 al 22 de diciembre de 2016 en el punto seleccionado. El plazo máximo para reclamar el hexadrone de 6  hélices con cámara  vence el 31 de diciembre de 2016. El valor del diario el día domingo es de $3.500 y de lunes a sábado es de $1.900.</td>
          </tr>
        </table>
        <!--copyright part End--> </td>
      </tr>
    </table>
     <!--footer part End--></td>

  </tr>
</table>';

$tabla=preg_replace("/(.*?)<\!--table-->(.*?)<\!--\/table-->.*/is","\\2",$body);
print htmlentities($tabla);
?>