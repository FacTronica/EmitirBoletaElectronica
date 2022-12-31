<?php 
#
#
$DatosBoletaElectronica = array(
"TOKEN" => "token123", 
 

##############################
# DATOS DEL PROCESO
##############################
 
 
"SWENVIARSII"=>0,

# OPCIONAL - SE UTILIZA PARA DEFINIR EL DIRECTORIO DONDE SERÁN ALMACENADOS LOS ARCHIVOS PDF DEL DOCUMENTO
# SI VA VACIO UTILIZARÁ POR DEFECTO: "../../home/".str_replace("-","",$jsonArray["RUTEmisor"])."/boletas";
"AlmacenPdf"=>"documentos",

# OPCIONAL - SE UTILIZA PARA DEFINIR EL DIRECTORIO DONDE SERÁN ALMACENADOS LOS ARCHIVOS XML DEL DOCUMENTO
# SI VA VACIO UTILIZARÁ POR DEFECTO: "../../home/".str_replace("-","",$jsonArray["RUTEmisor"])."/boletas";
"AlmacenXml"=>"documentos",

# OPCIONAL - SE UTILIZA PARA DEFINIR EL DIRECTORIO DONDE SERÁN ALMACENADOS LOS ARCHIVOS PNG CON EL TIMBRE PDF417 DEL DOCUMENTO
# SI VA VACIO UTILIZARÁ POR DEFECTO: "../../home/".str_replace("-","",$jsonArray["RUTEmisor"])."/boletas";
"AlmacenPng"=>"documentos",

# OPCIONAL - SE UTILIZA PARA DEFINIR EL LOGO .PNG PARA INCLUIR EN EL PDF DEL DOCUMENTO
# SI VA VACIO UTILIZARÁ POR DEFECTO: "../../home/".str_replace("-","",$jsonArray["RUTEmisor"])."/logo.png";
"UrlLogo"=>"http://www.factronica.cl/web/v2019/assets/img/logo.png", 

########################
# DATOS DE LA CARATULA 
########################
"RutEmisor" =>"11111111-1",
"RutEnvia" =>"22222222-2",
"RutReceptor" =>"60803000-K", // aqui siempre va el rut del sii 60803000-K
"FchResol" =>"2014-10-21",
"NroResol" =>"99",
"SucSii" =>"SANTIAGO CENTRO", //!!

################################
# DATOS DEL ENCABEZADO 
################################
"FchEmis" =>"2022-11-15",
"FchVenc" =>"2022-11-15",
"TermPagoGlosa" =>"CONTADO EFECTIVO",
"TipoDTE" =>"39",
"Folio" =>"7078",
"RazonRef" =>"",
"TipoDespacho" =>"",
"IndTraslado" =>"",
"MntBruto"=>"1",
"Observaciones" =>"",
"Proyecto" =>"",

##############################
# DATOS DEL EMISOR 
##############################
"RUTEmisor" =>"11111111-1",
"RznSoc" =>"COMERCIALIZADORA PRUEBAS SPA",
"GiroEmis" =>"VTA DE CELULARES, ACCESORIOS",
"Acteco" =>"475909",
"CdgSIISucur" =>"13000",
"DirOrigen" =>"ALAMEDA 444",
"CmnaOrigen" =>"SANTIAGO",
"CiudadOrigen" =>"SANTIAGO",
"CdgVendedor"=>"VENTAS OFICINA",
"CorreoEmisor" =>"pruebas@pruebas.com",
"Web" =>"",
"Telefono" =>"5694445566", 
"Fax" =>"",

########################
# DATOS DEL RECEPTOR
########################
"RUTRecep"=>"77777777-7",
"CdgIntRecep"=>"12312",
"RznSocRecep"=>"PUBLICO GENERAL",
"GiroRecep"=>"PUBLICO GENERAL",
"DirRecep"=>"SIN DIRECCION",
"CmnaRecep"=>"SIN COMUNA",
"CiudadRecep"=>"SIN CIUDAD",
"Contacto"=>"PUBLICO GENERAL",
"CorreoRecep"=>"PUBLICO GENERAL",
"FonoRecep"=>"569...",


#########################################
# TOTALES
#########################################
"TasaIVA" => "19",
"MntNeto" => "20000",
"MntExe" => "0",
"IVA" => "3800",
"MntTotal" => "23800",

#########################################
# DETALLE DE ITEMS
#########################################
"VlrCodigo"=>array("10001"),
"NmbItem"=>array("CARGADOR DE CELULAR UNIVERSAL"),
"DscItem"=>array("CARACTERISTICAS USB UNIVERSAL 5 VOLT."),
"QtyItem"=>array(2),
"DecQtyItem"=>array(0),
"UnmdItem"=>array("UN"),
"PrcItem"=>array(10000),
"DecPrcItem"=>array(0),
"IndExe"=>array(0),
"MontoItem"=>array(20000),

#########################################
# DESCUENTOS Y/O RECARGO EN ITEMS
#########################################
"DescuentoPct"=>array(),
"DescuentoMonto"=>array(),
"RecargoPct"=>array(),
"RecargoMonto"=>array(),


#########################################
# DESCUENTO O RECARGO GLOBAL
#########################################
"NroLinDR" => array(),
"TpoMov" => array(),
"GlosaDR" => array(),
"TpoValor" => array(),
"ValorDR" => array(),
"IndExeDR" => array(),
 
#########################################
# DATOS DEL PROVEEDOR
#########################################
"PROVEEDOR_NOMBRE"=>"FACTRONICA SPA",
"PROVEEDOR_MAIL"=>"contacto@factronica.cl",
"PROVEEDOR_WEB"=>"www.factronica.cl",
"PROVEEDOR_FONO"=>"56957231148",


#########################################
# CERTIFICADO DIGITAL
#########################################
"Modulus"=>"4oNKekvq7s5h7ZhP7zgaHDsIiB/Wq1L8HDLChuCR9E9JZFqO8jNP5CKdODAyUNrm
CnukBodHSOeUwtIz8UTfsZeFNwEG77UzigB+hcMd7sCLRAm/QqS9l5CkXRvgV4y3
c539RhGzzVT98yD0NqpuzPx7X0JOlfjRVUskQ316iL5p0G2c33nuWuzKy66JfJjw
uc6WdOUAP/QKsSvUdhh7IYNoOThnz01Q9OUo22m7B9GLtfp216t9lq2dfGm3o/ti
xrfEeCIOoVBPfPVpM9nScLl/dsNpx4Opp6ssx+0eo/MtYUIDDHDGlHQxNjCUWWT/
51ETylm1lUxv85Wi2qEmTQ==",

"Exponent"=>"AQAB",

"X509Certificate"=>"MIIHyzCCBbOgAwIBAgIKMibckwABAAEVUzANBgkqhkiG9w0BAQsFADCBvzELMAkG
A1UEBhMCQ0wxHTAbBgNVBAgTFFJlZ2lvbiBNZXRyb3BvbGl0YW5hMREwDwYDVQQH
EwhTYW50aWFnbzEUMBIGA1UEChMLRS1DRVJUQ0hJTEUxIDAeBgNVBAsTF0F1dG9y
aWRhZCBDZXJ0aWZpY2Fkb3JhMR4wHAYDVQQDExVFLUNFUlRDSElMRSBDQSBGRVMg
MDIxJjAkBgkqhkiG9w0BCQEWF3NjbGllbnRlQGUtY2VydGNoaWxlLmNsMB4XDTIy
MDQyNzE3MDM1M1oXDTI1MDQyNjE3MDM1M1owgccxCzAJBgNVBAYTAkNMMSIwIAYD
VQQIExlNRVRST1BPTElUQU5BIERFIFNBTlRJQUdPMREwDwYDVQQHEwhTQU5USUFH
TzEhMB8GA1UEChMYTUFSQ0VMQSBDQVNDQU5URSBFLkkuUi5MMQowCAYDVQQLDAEq
MSswKQYDVQQDEyJNQVJDRUxBIERFTCBDQVJNRU4gQ0FTQ0FOVEUgVE9SUkVTMSUw
IwYJKoZIhvcNAQkBFhZNQVJDRUxBQklHQEhPVE1BSUwuQ09NMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4oNKekvq7s5h7ZhP7zgaHDsIiB/Wq1L8HDLC
huCR9E9JZFqO8jNP5CKdODAyUNrmCnukBodHSOeUwtIz8UTfsZeFNwEG77UzigB+
hcMd7sCLRAm/QqS9l5CkXRvgV4y3c539RhGzzVT98yD0NqpuzPx7X0JOlfjRVUsk
Q316iL5p0G2c33nuWuzKy66JfJjwuc6WdOUAP/QKsSvUdhh7IYNoOThnz01Q9OUo
22m7B9GLtfp216t9lq2dfGm3o/tixrfEeCIOoVBPfPVpM9nScLl/dsNpx4Opp6ss
x+0eo/MtYUIDDHDGlHQxNjCUWWT/51ETylm1lUxv85Wi2qEmTQIDAQABo4ICvTCC
ArkwggFfBgNVHSAEggFWMIIBUjCCAU4GCCsGAQQBw1IFMIIBQDA9BggrBgEFBQcC
ARYxaHR0cHM6Ly93d3cuZS1jZXJ0Y2hpbGUuY2wvcG9saXRpY2FzLXktcHJhY3Rp
Y2FzLzCB/gYIKwYBBQUHAgIwgfEege4ARQBsACAAcgBlAHMAcABvAG4AZABlAHIA
IABlAHMAdABlACAAZgBvAHIAbQB1AGwAYQByAGkAbwAgAGUAcwAgAHUAbgAgAHIA
ZQBxAHUAaQBzAGkAdABvACAAaQBuAGQAaQBzAHAAZQBuAHMAYQBiAGwAZQAgAHAA
YQByAGEAIABkAGEAcgAgAGkAbgBpAGMAaQBvACAAYQBsACAAcAByAG8AYwBlAHMA
bwAgAGQAZQAgAGMAZQByAHQAaQBmAGkAYwBhAGMAaQDzAG4ALgAgAFAAbwBzAHQA
ZQByAGkAbwByAG0AZQBuAHQAZQAsMB0GA1UdDgQWBBSJSUM9XQHVXp3kz/N/phzW
HCEQYzALBgNVHQ8EBAMCBPAwIwYDVR0RBBwwGqAYBggrBgEEAcEBAaAMFgoxMDU0
NjA4OC0wMB8GA1UdIwQYMBaAFHTWIbP0WugtfLtZBmND72m0OpMEMEAGA1UdHwQ5
MDcwNaAzoDGGL2h0dHA6Ly9jcmwuZWNlcnRjaGlsZS5jbC9FLUNFUlRDSElMRUNB
RkVTMDIuY3JsMD0GCCsGAQUFBwEBBDEwLzAtBggrBgEFBQcwAYYhaHR0cDovL29j
c3BmZXMuZWNlcnRjaGlsZS5jbC9vY3NwMDwGCSsGAQQBgjcVBwQvMC0GJSsGAQQB
gjcVCIHd0k2X1DqGiZ0Gh4jOb4OvzGBFhtLsCIbHyn0CAWQCAQcwIwYDVR0SBBww
GqAYBggrBgEEAcEBAqAMFgo5NjkyODE4MC01MA0GCSqGSIb3DQEBCwUAA4ICAQCq
y4jB/zf9XBL1g0b7Haxa96LH8tXXWvDqeKUvQlstC7+i/EYm4SmuHRP8N0/Flymm
BvRXjQ/5kJH5ATRX2RCPE5YUyU4ff5M5IqMUQrjTQPuoESZEHaM76sS56PSf0X5R
+Z2n0jzjypWyFzsmkQ+o5uF+CYf6dlUKXtUD8SUPjjvDd220OjiVXWS3ONM+/FuF
9OvQQYl+An/9RaFSCEDxtDNRgyJ/ViiRaov43NpgpqWVpiY9u1BS+cKAvYRvcHFw
a5LVLUJCXi175G+yE55mfcWH/joycHNApCEUC3yxyrMi0QsVbGCEG+QPYY/6eoD2
0PQNWOaD5d8kNuf20oARqzUz/VaTPKRjmjV6Arl8qsFtqJ++Mv5S7PZDbryVrTvs
o02kidGKP33rT5Zee2nWwdnWRd8jGzabmRI0F/T+MMNWupwDRE6SWBI4k2Ua8T81
Yd+MxgKBEfGul/QcRmQSaIDa1FasDI08DVo/BVC5R+JdNOPmmLx22BuIV5Z67ioM
SaIM8zjlXqFWhliJV1OyTlJcF3kcFV6gMWAdMDqkzph3mAlpFD7+TzP+FQ8hiDUY
MgNBLA1go+UYPJ9I4tOTFh3OdSq4lxygyc9wDxxtBGo4lkBtmeZOj8UqLOtKgJgy
hQqjl3PxXaDMvIOdcuaWMu+pf5YMqF1lSeP0r3gcMg==",

"PrivKey"=>"-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEA4oNKekvq7s5h7ZhP7zgaHDsIiB/Wq1L8HDLChuCR9E9JZFqO
8jNP5CKdODAyUNrmCnukBodHSOeUwtIz8UTfsZeFNwEG77UzigB+hcMd7sCLRAm/
QqS9l5CkXRvgV4y3c539RhGzzVT98yD0NqpuzPx7X0JOlfjRVUskQ316iL5p0G2c
33nuWuzKy66JfJjwuc6WdOUAP/QKsSvUdhh7IYNoOThnz01Q9OUo22m7B9GLtfp2
16t9lq2dfGm3o/tixrfEeCIOoVBPfPVpM9nScLl/dsNpx4Opp6ssx+0eo/MtYUID
DHDGlHQxNjCUWWT/51ETylm1lUxv85Wi2qEmTQIDAQABAoIBABjSbeAyfxN90s3s
XcAXfAcBchkmsgnSvXVim54XsG7fHGoOoXEJrfTQVT3BzFW/cyuNaodbnjRvSkZC
LjZ/h2ro8Yx6RJYSm4wBK1xBqj9OYsSJM+gb8PnRvC1G34IAld7p3oYl7Pfwmyag
QxrVePBmL6fb9owpONlZs2bg8oNW85fo1r8VDsvfAnrw8yRM5pGELDoA4oxx36sa
c+SeTgJx8V9gtIrF3pTDEYzxgyP72p0R+slAPVMIF94O3cEVrU6omIIgdp3epBQD
WjvqECdWF2/P/Si0Atomcen1zQx436zmgY4s1hbQG2LUUVpNlitunq0NSy64WCId
in4TDPECgYEA/1GJAfR85U+6MSknJiMTbc1n7wUKivHghbnb2k0ni5sMgNsgO3YM
63S04hUPZK5cfzsztjtQlD7CH+VZPYk5hxFlg1AjtHJni8GhDwkIx3FKwDirFo6u
loO1BsI+y24dz4i2mfg955eVM/OSFox2oqJmt20CD7bdjhZy+G7MePECgYEA4x4S
fBrXU4dFKLy0URlW7Ujt3j7BjH1j2jI9XHpLv3l9tbFFeR8tuSXo9Ke2hgam562K
r2vUyoSUBy2LTTga7qs6YjW6Jyl9pD301s+9VlbId4tTFFg9PTJnxH+VEdEpzC2S
SGTg0EvdQyV0F9Ax4zeJtkQx/RN7cZt8vTPWox0CgYBMeXGeQkr+rIjKnNb7F1qE
cxgEgfAMejKUG318v8tuh3yRRBE9fjiUdhqP9Vrs/0T5XxQ4K0ARh1LCFwJJ6kZu
7IkJcgGf1Pyq4c6KIFye0JJhTRgB467rqnuYkKoaaNtJBFwddjukmMS6EOTbGCuY
vyghHOeXKWDnZFX/j8BzIQKBgQCT87ItALtHIbbO6+c3cZ9sInc6sX0ajVCwAsxw
YwbXbEiVRS8x0TrTAzw3rM29j7XI9QeEcWWErEtWRbgajLMWyZrWAZQMEP5VMTs/
eMMp7IzZO3zaowT5yc1Jd6dfnPdymDlUScseRl2UcWCoZqspDrP6dYBvEfL3tkfT
ZWKsjQKBgQCEsuLM5BiZThH8XcXgRf7oJFker7QXZ71jk1jW+27ATuJVb7RVAUvn
PNJkE11p6kGGT0cAWHwfCHw7/VpqhEnRmHZ3PcZk2h0pc+fPHOzm5hB3oyX2Dafa
Q+FVhTtCf+jj4XgxKI0uUwon4mn2/UM39DhoGKW5w9JtZJ9ZHkyoGQ==
-----END RSA PRIVATE KEY-----",


#########################################
# CAF TIMBRAJE DE FOLIOS
#########################################
"RE"=>"11111111-1",
"RS"=>"COMERCIALIZADORA PRUEBAS SPA",
"TD"=>"39",
"RNG_D"=>"7003",
"RNG_H"=>"107002",
"FA"=>"2022-04-28",
"RSAPK_M"=>"ywGtrqpEHMWCNAXmnZKQBNQ4Jzt2iOlQ1SHgxguch9ct0x15rimQZjn2B2V5Wtk3mLjjWb/DSYs07gPQL5D8yw==",
"RSAPK_E"=>"Aw==",
"RSAPK_IDK"=>"300",
"FRMA"=>"d2U8RrtIW/9N7nMUNk1iKbP2vu5823uwy5OonKZ+vcBoabTcAt5nS0857sXTzGyP90hS+SRm2rAMQITDnXko8g==",
"RSASK"=>"-----BEGIN RSA PRIVATE KEY-----
MIIBOgIBAAJBAMsBra6qRBzFgjQF5p2SkATUOCc7dojpUNUh4MYLnIfXLdMdea4p
kGY59gdleVrZN5i441m/w0mLNO4D0C+Q/MsCAQMCQQCHVnPJxtgTLlbNWURpDGAD
OCVvfPmwm4s4wUCEB72v45dBifHj72uvcPdK6WMiSaRUQY1ewi+bP2sK2n4bgmDb
AiEA/64avwvyuR0D23SPotjRvHL3SRiIADoAaT08fi/LARcCIQDLQrPPzE+1wgyn
onfBzpkEp19GMxR7pqurIH+U1oJqbQIhAKp0EdSyodC+ApJNtRc7Nn2h+jC7BVV8
AEYo0v7Kh1YPAiEAh4HNNTLfzoFdxRb6gTRmAxo/hCINp8RychWqYzmsRvMCIEec
TZ90iolLEAxDzFTUFUkCVJzablrUheYK9oOY5B2L
-----END RSA PRIVATE KEY-----
",

"RSAPUBK"=>"-----BEGIN PUBLIC KEY-----
MFowDQYJKoZIhvcNAQEBBQADSQAwRgJBAMsBra6qRBzFgjQF5p2SkATUOCc7dojp
UNUh4MYLnIfXLdMdea4pkGY59gdleVrZN5i441m/w0mLNO4D0C+Q/MsCAQM=
-----END PUBLIC KEY-----" 

); 
?>
