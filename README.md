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
<br><b>Información Requerida para construir el TXT:</b>
<br>-Datos del Servidor de Facturación
<br>-Datos de Caratula
<br>-Datos de Emisor
<br>-Datos de Receptor ( OPCIONAL )
<br>-Datos de Detalle  ( MINIMO 1 ITEM )
<br>-Datos de Descuentos/Recargos Globales
<br>-Datos de Totales
<br>-Datos de Referencias
<br>-Datos de Timbraje
<br>-Datos de Certificado
<br>Ver Formato del archivo TXT para Factura Electrónica Afecta.
<br>https://github.com/FacTronica/EmitirBoletaElectronica/blob/master/txt_boleta.php
<br>
<hr>
<h3>Proceso 2: Enviar Archivo Txt</h3>
Para enviar el archivo plano TXT al servidor de Facturación se hace uso de librería opensource CURL.
<br><br><b>Enviar archivo txt desde Consola Windows:</b>
<br>c:\curl\curl.exe --form "archivito=@c:\curl\archivo_plano.txt" http://www.factronica.cl/factronica_webservice_servidor_beta/index.php
<br><br><b>Enviar archivo desde Consola Linux:</b>
<br>curl --form "archivito=@archivo_plano.txt" http://www.factronica.cl/factronica_webservice_servidor_beta/index.php
<br>
<br>La librería CURL es de uso libre y se encuentra disponible en la siguiente url para descargar de acuerdo a la versión del sistema operativo que realizará el envío del txt al servidor de facturación.
<br><b>Link Descargar CURL:</b> https://curl.haxx.se/download.html 
<hr>
<h3>Proceso 3: Recuperar el PDF con Boleta Electrónica:</h3>
Este proceso es necesario para poder obtener una copia del pdf del documento electrónico.
<br><br><b>Recuperar archivo Pdf con Windows:</b>
<br>c:\curl\curl.exe -o c:\curl\factura_folio777_tipo33.pdf http://www.factronica.cl/factronica_webservice_servidor_beta/pdf/factura_folio777_tipo33.pdf
<br><br><b>Recuperar archivo Pdf con Linux:</b>
<br>curl -o factura_folio777_tipo33.pdf http://www.factronica.cl/factronica_webservice_servidor_beta/pdf/factura_folio777_tipo33.pdf
