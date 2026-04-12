# Definir Nombre de los Archivos de Salida
La API Factronica permite que el integrador defina el nombre de los archivos de salida.   

## Definir Nombre del Archivo PDF
En el archivo TXT el nombre del archivo pdf se debe definir en a siguiente variable:   
$FACTRONICA["FILEPDF"]="FOLIO360524TIPO39_FORMATO.pdf";   
   
En este ejemplo los datos son:   
FOLIO = 360524   
TIPO = 39   
   
Eso quiere decir que para recuperar el pdf la parte variable seria el folio y el tipo de dte.   

## Enviar el Archivo TXT a la API
Ejemplo Para enviar el txt al servidor de facturación con curl:   
curl --form "archivito=@dte.php" http://11.22.33.44/api/factronica_creadte_boletas/index.php

## Recuperar el Archivo PDF
Este proceso es para descargar el pdf de forma automatizada para posteriormente imprimir y/o almacenar.    
El archivo con el pdf en este ejemplo se almacena en la carpeta c:\mispdfs\   

curl -o c:\mispdfs\FOLIO360524TIPO39_FORMATO.pdf  http://11.22.33.44/api/home/111111111/boletas/FOLIO360524TIPO39_FORMATO.pdf   

