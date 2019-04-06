# EmitirBoletaElectronica
SDK API Factronica
Procedimiento a realizar para la integración de Boleta Electrónica con la API Factronica

<br>A continuación se detalla el Procedimiento para realizar la Emisión de Boleta Electrónica con Software Propio.
<h3>Procesos a Realizar:</h3>
1.-Generar Archivo Plano TXT
<br>2.-Enviar Archivo Plano TXT al Servidor de Facturación de Boletas
<br>3.-Recuperar Archivo PDF con Boleta Electrónica
<br>4.-Imprimir Pdf de Boleta Electrónica
<hr>
<h3>Proceso 1: Generar Archivo Plano</h3>
Este proceso Consiste en generar un archivo de texto plano con el formato requerido por el sdk de factronica.
<br>Dentro del archivo de texto plano debe ir la información que compone al documento emitido:
<br><br><b>Información Requerida para construir el TXT de Boleta Electrónica:</b>
<br>-Datos del Servidor de Boletas
<br>-Datos de Caratula
<br>-Datos de Emisor
<br>-Datos de Receptor ( OPCIONAL )
<br>-Datos de Detalle  ( MINIMO 1 ITEM )
<br>-Datos de Descuentos/Recargos Globales
<br>-Datos de Totales
<br>-Datos de Referencias
<br>-Datos de Timbraje
<br>-Datos de Certificado
<br>Ver Formato del archivo TXT para Boleta Electrónica.
<br>https://github.com/FacTronica/EmitirBoletaElectronica/blob/master/boleta_folio777_tipo39.txt
<br>
<hr>
<h3>Proceso 2: Enviar Archivo TXT al Servidor de Boletas Electrónicas.</h3>
Para enviar el archivo plano TXT al servidor de Boletas se hace uso de librería opensource CURL.
<br><br><b>Enviar archivo txt desde Consola Windows:</b>
<br>c:\curl\curl.exe --form "archivito=@c:\curl\boleta_folio777_tipo39.txt" http://www.facturalibre.cl/sdk_factronica/factronica_servidor_boletas/recibe_txt_boleta.php
<br><br><b>Enviar archivo desde Consola Linux:</b>
<br>curl --form "archivito=@boleta_folio777_tipo39.txt" http://www.facturalibre.cl/sdk_factronica/factronica_servidor_boletas/recibe_txt_boleta.php
<br>
<br>La librería CURL es de uso libre y se encuentra disponible en la siguiente url para descargar de acuerdo a la versión del sistema operativo que realizará el envío del txt al servidor de facturación.
<br><b>Link Descargar CURL:</b> https://curl.haxx.se/download.html 
<hr>
<h3>Proceso 3: Recuperar el PDF con Boleta Electrónica:</h3>
Este proceso es necesario para poder obtener una copia del pdf del documento electrónico.
<br><br><b>Recuperar archivo Pdf con Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\BOLETA_FOLIO777_TIPO39.pdf http://www.facturalibre.cl/sdk_factronica_home/111111111/BOLETA_FOLIO777_TIPO39.pdf
<br><br><b>Recuperar archivo Pdf con Linux:</b>
<br>curl -o BOLETA_FOLIO777_TIPO39.pdf http://www.facturalibre.cl/sdk_factronica_home/111111111/BOLETA_FOLIO777_TIPO39.pdf
<br><br>En el ejemplo utilizado, El rut es 111111111 y debe ser reemplazado por el rut del contribuyente emisor, el folio es 777 y el tipo 39 Boleta electrónica afecta.
<hr>
<h3>Proceso 4: Imprimir el PDF con Boleta Electrónica:</h3>
<br>Este proceso consiste en enviar el PDF con la boleta electrónica al spooler de impresión. Para ello debe utilizar los comandos correspondientes al lenguaje utilizado en su sistema de boletas electrónicas. Lo ideal es enviar al spooler de impresión pero sin pasar por la pantalla de confirmación de impresión.
