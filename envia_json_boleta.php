<?php
#
error_reporting(E_ERROR|E_WARNING);
ini_set('display_errors', '1');
#
# FUNCION PARA ENVIAR JSON A UNA URL
function JsonEnviar($arregloJson,$url){
    //
    global $FACTRONICA;
    //
    $payload = json_encode($arregloJson);
    #
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_PORT,$FACTRONICA["CURL_PUERTO"]);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER,array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS,$payload);
    $json_response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    #
    return $json_response; 
}


# INCLUIR EL PHP QUE GENERA EL ARRAY PARA ENVIAR EN FORMATO JSON
include("json_boleta.php");
 
 
#########################################
# PUERTO Y HOST DEL SERVIDOR API BOLETA
#########################################
#
# PUERTO  443=HTTPS   80=HTTP
$FACTRONICA["CURL_PUERTO"]="443";
#
# HOST URL 
$url_api="https://servidor3.factronica.cl/api/factronica_boleta_creardte"; 


#########################################
# ALMACENAR LA RESPUESTA DEL SERVIDOR
#########################################
$retorno=JsonEnviar($arregloJson,$url_api."/index.php");


#########################################
# DEPURAR DATOS DE RESPUESTA
#########################################
//echo "<hr>";
# TRANSFORMAR LA RESPUESTA EN UN ARREGLO
$jsonArray  = json_decode($retorno,true);
#
# MOSTRAR LA RESPUESTA DE FORMA LEGIBLE
echo "<pre>";
var_dump($jsonArray);
echo "</pre>";


#########################################
# CARPETA ALMACEN DE DOCUMENTOS
#########################################
$carpeta=$jsonArray["carpeta"];


#########################################
# DESCARGAR EL PDF CARTA
#########################################
#
$archivo=$jsonArray["urlpdfcarta"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar Pdf Carta</a>"; 

#########################################
# DESCARGAR EL PDF TICKET
#########################################
#
$archivo=$jsonArray["urlpdfticket"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar Pdf Ticket</a>"; 


#########################################
# DESCARGAR LOS XML'S
#########################################

#
#
$archivo=$jsonArray["urlxmlsii"];
echo "<br><a href='$url_api/descarga_forzada.php?archivo=$archivo&carpeta=$carpeta'>Descargar XML SII</a>"; 
 
?>
