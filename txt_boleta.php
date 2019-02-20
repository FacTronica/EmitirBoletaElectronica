<?php 
############################################################## 
#######	PARAMETROS DE CONFIGURACIÓN
##############################################################
#
# ENVIAR XML AL SII 0=NOENVIAR 1=CERTIFICACION 2=PRODUCCION
$sw_produccion="1";
#
# ENVIAR MAIL CON XML Y PDF AL CORREO DE INTERCAMBIO REGISTRADO EN EL SII 1=SI 0=NO
$sw_enviar_intercambio="0";
#
# ENVIAR XML AL SII 0=NO 1=SI
$sw_enviar_sii="0";
#
# ENVIAR MAIL CON XML AL EMISOR 1=SI 0=NO
$sw_enviar_emisor="0";
#
# ENVIAR MAIL CON XML AL RECEPTOR 1=SI 0=NO
$sw_enviar_receptor="0";
#
# SISTEMA OPERATIVO DEL SERVIDOR LINUX - WINDOWS
$separador_carpetas="LINUX"; 
#
# URL DEL LOGO A INSERTAR EN EL PDF POR EJ. HTTP://www.domain.cl/logo.png 
$url_logo="http://190.107.177.113/~erp/erp/home/111111111/almacen_pyme/logo.png";
#
$url_logo_central="";
#
# INDICA LA CANTIDAD DE DECIMALES A MOSTRAR EN EL PDF Y XML
$decimales_item_unitario="0";
#
# INDICA LA CANTIDAD DE ESPACIADO ENTRE CADA LINEA DEL DETALLE
$espaciado_items="8";
############################################################## 
#######	CARATULA
##############################################################
#
# RUT DEL CONTRIBUYENTE EMISOR
$caratula["RutEmisor"]="11111111-1"; 
#
# RUT AUTORIZADO A ENVIAR DTES AL SII SIEMPRE ES RUT DE PERSONA NO DE EMPRESA
$caratula["RutEnvia"]="ERPFACTRO1";
#
# EN MODO CERTIFICACION RUT=60803000-K
$caratula["RutReceptor"]="60803000-K";  
#
# FECHA DE RESOLUCIÓN DE INICIO EN FACTURA ELECTRONICA
$caratula["FchResol"]="2014-08-22"; 
#
# CERTIFICACION NUM=CERO
$caratula["NroResol"]="0"; 
#
# NOMBRE SUCURSAL SII
$caratula["SucSii"]="SANTIAGO NORTE"; 
#
##############################################################   
#######	ENCABEZADO
############################################################## 
#
# FECHA DE EMISIÓN
$IdDoc["FchEmis"]="2019-02-19"; 
#
# FECHA DE VENCIMIENTO AAAA-MM-DD
$IdDoc["FchVenc"]="2019-02-19"; 	
#
# TEXTO FORMA DE PAGO
$IdDoc["TermPagoGlosa"]="0"; 
#
# TIPO DE DOCUMENTO FV=33, ND=56, NC=61
$IdDoc["TipoDTE"]="39"; 
#
# FOLIO DEL DOCUMENTO
$IdDoc["Folio"]="1"; 
#
# entre caso y num hay 2 espacios blancos
$IdDoc["RazonRef"]=""; 
#
# PARA USO EN GUIA DESPACHO
$IdDoc["TipoDespacho"]="";  
#
# PARA USO EN GUIA DESPACHO
$IdDoc["IndTraslado"]="";  
#
# VALORES DETALLE EN BRUTO
$IdDoc["MntBruto"]="1"; 

$IdDoc["Observaciones"]="";

$IdDoc["Proyecto"]="";

############################################################## 
#######	EMISOR
##############################################################
#
# RUT EMISOR
$Emisor["RUTEmisor"]="11111111-1";  
#
# RAZON SOCIAL EMISOR
$Emisor["RznSoc"]="EMPRESA PRUEBAS S.A."; 
#
# GIRO EMISOR
$Emisor["GiroEmis"]="COMERCIALIZADORA Y DISTRIBUIDORA DE ARTICULOS PUBLICITARIOS";
#
# CODIGO PRINCIPAL DE ACTIVIDAD COMERCIAL
$Emisor["Acteco"]="512250"; 
#
# CODIGO DE LA SUCURSAL DEL SII
$Emisor["CdgSIISucur"]="12312"; 
#
# DIRECCION EMISOR
$Emisor["DirOrigen"]="CASA MATRIZ: 1 SUR 2040 - TALCA";
#
# COMUNA EMISOR
$Emisor["CmnaOrigen"]="ERP FACTRONICA PLANTILLA";
#
# CIUDAD EMISOR
$Emisor["CiudadOrigen"]="ERP FACTRONICA PLANTILLA";
#
# CODIGO DEl VENDEDOR    
$Emisor["CdgVendedor"]="AURELIO PEREZ";
#
# EMAIL EMISOR
$Emisor["CorreoEmisor"]="ERP FACTRONICA PLANTILLA";
#
# WEB EMISOR
$Emisor["Web"]="ERP FACTRONICA PLANTILLA";
#
# FONO EMISOR
$Emisor["Telefono"]="ERP FACTRONICA PLANTILLA";
#
# FAX EMISOR
$Emisor["Fax"]="";
############################################################## 
#######	RECEPTOR
##############################################################
#
# RUT RECEPTOR
$Receptor["RUTRecep"]="11111111-1"; 
#
# RUT RECEPTOR
$Receptor["CdgIntRecep"]=""; 
#
# RAZON SOCIAL RECEPTOR
$Receptor["RznSocRecep"]="PUBLICO GENERAL";
#
# GIRO RECEPTOR
$Receptor["GiroRecep"]="SIN GIRO";
#
# DIRECCION RECEPTOR
$Receptor["DirRecep"]="SIN DIRECCION";
#
# COMUNA RECEPTOR
$Receptor["CmnaRecep"]="SANTIAGO";
#
# CIUDAD RECEPTOR
$Receptor["CiudadRecep"]="SANTIAGO";
#
# CONTACTO RECEPTOR
$Receptor["Contacto"]="SIN CONTACTO";
#
# CORREO RECEPTOR
$Receptor["CorreoRecep"]="SIN MAIL";
#
##############################################################
#######	TOTALES														
##############################################################
#
# TASA DE IMPUESTO
$Totales["TasaIVA"]="19";
#
# NETO AFECTO
$Totales["MntNeto"]="1000";
#
# NETO EXENTO
$Totales["MntExe"]="0";
#
# MONTO IVA
$Totales["IVA"]="190"; 
#
# MONTO TOTAL BRUTO
$Totales["MntTotal"]="1190";  
#
# % DESCUENTO GLOBAL AFECTO
$Totales["porcdescuento_afecto"]="";
#
# % DESCUENTO GLOBAL EXENTO
$Totales["porcdescuento_exento"]="";
#
##############################################################
#######	 DETALLE
##############################################################
#
#
# LINEA 1 DEL DOCUMENTO
$detalle["1"]["NroLinDet"]="1"; # NUMERO DE LINEA
$detalle["1"]["NmbItem"]="LAPIZ TINTA GEL"; # NOMBRE DEL ITEM
$detalle["1"]["TpoCodigo"]="INT1"; # TIPO DE CODIGO P=PRODUCTO C=CUENTA M=MATERIAPRIMA I=INSUMO
$detalle["1"]["UnmdItem"]="UND"; # UNIDAD DE MEDIDA DEL ITEM KG=KILOGRAMO
$detalle["1"]["QtyItem"]="1.00000"; # CANTIDAD DE UNDS.
$detalle["1"]["VlrCodigo"]="COCA"; # CODIGO ITEM
$detalle["1"]["PrcItem"]="1190.00"; # PRECIO UNITARIO
$detalle["1"]["DscItem"]=""; 
$detalle["1"]["MontoItem"]="1190"; # MONTO TOTAL DEL ITEM
$detalle["1"]["DscItemPesos"]="0"; # DESCUENTO PESOS ITEM
$detalle["1"]["IndExe"]="0"; # ITEMS EXENTOS 1=SI 0=NO
$detalle["1"]["DescuentoPct"]="0.00"; # DESCUENTO PORC. ITEM
$detalle["1"]["TpoCodigo2"]=""; 
$detalle["1"]["VlrCodigo2"]=""; 
$detalle["1"]["DecimalesUnitario"]="0";
$detalle["1"]["DecimalesCantidad"]="0"; 
#

############################################################## 
#######	DATOS CERTIFICADO DE PERSONA QUE FIRMA Y ENVIA
##############################################################
#
#
# MODULO DEL CERTIFICADO
$certificado["Modulus"]="1q+A2WPhZCtLZdP/AcU9SVZHKILhZ5d6masDmcZpxIdWU0otj9oEWSYfeDPxhwgU
rAxYlrN5Z+CVUItbf5eyPpnivDRSzKxhH5FdTRatdNILPDSFeo/IfJn8g4a5zlWg
6Xnw+hTRtDOckrK5WxRN61sbDZtnjzNIIrEz18eVIk3S+TGwqgRvuEG4RDFcgifX
qR+c0dbGcZO6Tpyn1Ga/9RNxjdM3FA4leo/nerEAttb9OSzJ4GDPEUnxDgOMvO4Q
ZAgtt8EBUdsMu/qBWm0eE1/M8iae5yNaHLtt5vJSmAknJV1yDR4hGVftgkA2T4B6
rFkwATGhGdDE8rr/JpYUew=="; 
#
#
# EXPONENTE DEL CERTIFICADO
$certificado["Exponent"]="AQAB"; 
#
#
# CERTIFICADO X509
$certificado["X509Certificate"]="MIIF+TCCBOGgAwIBAgIDAJx8MA0GCSqGSIb3DQEBCwUAMIGmMQswCQYDVQQGEwJD
TDEYMBYGA1UEChMPQWNlcHRhLmNvbSBTLkEuMUgwRgYDVQQDEz9BY2VwdGEuY29t
IwGtZTJNpY8LRlIm7DpYnDfT9cmYPcAh39WCnrPAIMox47dLNiXUCJy9wayxU8kA
QIYcdvJ8evsQAleDri8UPbv3fFBR/+CIByjQt/R/1lXHk5Q1U49PGNgQJNueVJes
jYWmObmHQaRk6/EZ7D+nGf+9pu1+Ba4kLRhCyE8zh97UO8p6YMIxFdTm9Qkfcqa5
e0GS9I5zD8cHxVE2BBTP06SSssG2wP9Qzei79TCSbHj07HTg4YmzXeyJbFbzFcR0
2k2n+q4wJrY1clfJWcBnL9+Y+GZynImaTpWeEeSTbRNk2Kam3mlZK4LtI7Uc";
#
#
# LLAVE PRIVADA SIN CLAVE
$certificado["PrivKey"]="-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEA1q+A2WPhZCtLZdP/AcU9SVZHKILhZ5d6masDmcZpxIdWU0ot
j9oEWSYfeDPxhwgUrAxYlrN5Z+CVUItbf5eyPpnivDRSzKxhH5FdTRatdNILPDSF
dZNsltfY3Eztj5WC7dojg1MknX5yyoS26F7SADuNHiwVHgvX46EG8vOCiotYibZt
/e1GdUo74MYl2WS0eEy4mt/5smzSLvFzhuMYlaRtIfonXSY2jEgmWQ==
-----END RSA PRIVATE KEY-----"; 




##############################################################
#######	CARGAR DATOS DE TIMBRAJE DE FOLIOS
##############################################################
# RUT EMISOR
$CAF["RE"]="11111111-1";
#
#
# RAZON SOCIAL EMISOR
$CAF["RS"]="EMPRESA DE PRUEBAS S.A.";
#
#
# TIPO DE DOCUMENTO
$CAF["TD"]="39";
#
#
# FOLIO DESDE
$CAF["RNG_D"]="1";
#
#
# FOLIO HASTA
$CAF["RNG_H"]="1000";
#
#
# FECHA AUTORIZACION TIMBRAJE
$CAF["FA"]="2018-07-06";
#
#
# MODULO LLAVE PRIVADA TIMBRAJE
$CAF["RSAPK_M"]="067nlpbwpw2Dwmjc0B+Bckr/pANDjEq5FL+89WdIKa5YUluJszFNib9oUw6ybU9of7pyVHA6Ikecf7+S/YxqwQ==";
#
#
# MODULO EXPONENTE TIMBRAJE
$CAF["RSAPK_E"]="Aw==";
#
#
# INDICE DEL TIMBRAJE
$CAF["RSAPK_IDK"]="100";
#
#
# FIRMA DEL TIMBRAJE
$CAF["FRMA"]="S9ZTrzwfhjeODELATVU4u2EfnBTzr8epPBNI2L9Y2tCRXkoeMJ/Xkh4dY1wFwsIUostBygFQz28nDhOpAtIHoA==";
#
#
# LLAVE PRIVADA DEL TIMBRAJE
$CAF["RSASK"]="-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBANOu55aW8KcNg8Jo3NAfgXJK/6QDQ4xKuRS/vPVnSCmuWFJbibMx
5Vj5kvZTMpGfAiEAlBm3qZHfvkOUYtcXbWSZ/5XycgB5D1uX/3FvnaZaQ98CIAyZ
TymthXVgB/oqMx3IOZtrdNzwMEEILJDawI+QfeGM
-----END RSA PRIVATE KEY-----
";
#
#
# LLAVE PUBLICA DEL TIMBRAJE
$CAF["RSAPUBK"]="-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBANOu55aW8KcNg8Jo3NAfgXJK/6QDQ4xK
uRS/vPVnSCmuWFJbibMxTYm/aFMOsm1PaH+6clRwOiJHnH+/kv2MasECAQM=
-----END PUBLIC KEY-----
";










#

$FACTRONICA["FOLDERPDF"]="Almacen";
$FACTRONICA["FILEPDF"]="FOLIO1TIPO39_FORMATO.pdf"; 
$FACTRONICA["FILEPDFCLIENTE"]="FOLIO1TIPO39_FORMATO.pdf";  
$FACTRONICA["FOLDERFILES"]="../home/111111111";
$FACTRONICA["FILETXT"]="ARCHIVOPLANO_EMISOR111111111_TIPO39_FOLIO1.txt";  
$FACTRONICA["DTEPORFIRMAR"]="DTEPORFIRMAR_111111111_TIPO39_FOLIO1.xml";  
$FACTRONICA["DTEFIRMADO"]="FOLIO1TIPO39_FIRMADO.xml";  
$FACTRONICA["SETDTEPORFIRMAR"]="SETPORFIRMAR_111111111_TIPO39_FOLIO1.xml";  
$FACTRONICA["SETDTEFIRMADO_CLIENTE"]="FOLIO1TIPO39_SETDTE_FIRMADO_CLIENTE.xml";  
$FACTRONICA["SETDTEFIRMADO_SII"]="FOLIO1TIPO39_SETDTE_FIRMADO.xml";  
$FACTRONICA["FILEPNG"]="PDF417_111111111_TIPO39_FOLIO1.png";  
$FACTRONICA["TRACKID"]="TRACKID_111111111_TIPO39_FOLIO1.xml";  
$FACTRONICA["PDFDECIMALESCANTIDAD"]="0";  
$FACTRONICA["PDFDECIMALESUNITARIO"]="0"; 
$FACTRONICA["ALMACENREMOTO"]="../home/111111111";	
$FACTRONICA["URLSERVIDOR"]="http://190.107.177.113/~apifactronica/servidor_factronica";
$FACTRONICA["SCRIPTSERVIDOR"]="boletaventa_index.php";
$FACTRONICA["FORMATO_PDF"]="TICKET"; // TICKET O CARTA

?>
