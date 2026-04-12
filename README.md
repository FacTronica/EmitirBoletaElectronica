# API Emisión Boleta Electrónica SII Chile

## Descripción

Este endpoint permite generar una **Boleta Electrónica (DTE tipo 39 o 41)** para el Servicio de Impuestos Internos (SII) de Chile enviando un payload en formato JSON.

---

## Flujo

1. Construir Petición en formato JSON
2. Enviar JSON al endpoint
3. Recuperar Respuesta JSON
4. Obtener Pdf
5. Imprimir Pdf

---

## Autenticación

Para conectar con la Api se utiliza un **token** el cual debe ir incluido en el payload de la petición:

```json
"token": "API_KEY"
```

---

## Tipo de Request

- Método: POST
- Content-Type: application/json

---

## Estructura del Payload

### Datos Generales

| Campo         | Tipo   | Descripción                  |
| ------------- | ------ | ---------------------------- |
| token         | string | Token de autenticación       |
| TipoDTE       | string | Tipo documento (39 = Boleta) |
| Folio         | string | Número de folio              |
| FchEmis       | string | Fecha emisión (YYYY-MM-DD)   |
| FchVenc       | string | Fecha vencimiento            |
| TermPagoGlosa | string | Condición de pago            |

---

### Datos Emisor

| Campo                 | Tipo   |
| --------------------- | ------ |
| RutEmisor / RUTEmisor | string |
| RznSoc                | string |
| GiroEmis              | string |
| Acteco                | string |
| DirOrigen             | string |
| CmnaOrigen            | string |
| CiudadOrigen          | string |
| Telefono              | string |
| CorreoEmisor          | string |

---

### Datos de Receptor

| Campo       | Tipo   |
| ----------- | ------ |
| RUTRecep    | string |
| RznSocRecep | string |
| GiroRecep   | string |
| DirRecep    | string |
| CmnaRecep   | string |
| CiudadRecep | string |
| CorreoRecep | string |

---

### Datos de Totales

| Campo    | Tipo   |
| -------- | ------ |
| MntNeto  | number |
| MntExe   | number |
| IVA      | number |
| MntTotal | number |

---

### Firma Electrónica

Campos principales:

- Modulus
- Exponent
- X509Certificate
- PrivKey

IMPORTANTE: Manejar estos datos de forma segura.  
Para Transformar el certificado digital a formato PEM se proporciona la siguiente Url:  
LINK: https://www.factronica.cl/sii/transformar_certificado/index.php

---

### Timbraje de Folios CAF (Codigos de Autorización Folios)

Campos principales:

- RE, RS, TD
- RNG_D, RNG_H
- FA
- RSAPK
- FRMA

---

## Ejemplo de Request

```json
{
  "token": "---api---key---",

  "RutEmisor": "11111111-1",
  "RutEnvia": "22222222-2",
  "RutReceptor": "60803000-K",
  "FchResol": "2014-10-21",
  "NroResol": "99",
  "SucSii": "SANTIAGO CENTRO",
  "FchEmis": "2022-11-15",
  "FchVenc": "2022-11-15",
  "TermPagoGlosa": "CONTADO EFECTIVO",
  "TipoDTE": "39",
  "Folio": "7078",
  "MntBruto": "1",

  "RUTEmisor": "11111111-1",
  "RznSoc": "COMERCIALIZADORA PRUEBAS SPA",
  "GiroEmis": "VTA DE CELULARES, ACCESORIOS",
  "Acteco": "475909",
  "CdgSIISucur": "13000",
  "DirOrigen": "ALAMEDA 444",
  "CmnaOrigen": "SANTIAGO",
  "CiudadOrigen": "SANTIAGO",
  "CdgVendedor": "VENTAS OFICINA",
  "CorreoEmisor": "pruebas@pruebas.com",
  "Web": "",
  "Telefono": "5694445566",

  "RUTRecep": "77777777-7",
  "CdgIntRecep": "12312",
  "RznSocRecep": "PUBLICO GENERAL",
  "GiroRecep": "PUBLICO GENERAL",
  "DirRecep": "SIN DIRECCION",
  "CmnaRecep": "SIN COMUNA",
  "CiudadRecep": "SIN CIUDAD",
  "Contacto": "PUBLICO GENERAL",
  "CorreoRecep": "PUBLICO GENERAL",
  "FonoRecep": "569...",

  "TasaIVA": "19",
  "MntNeto": "20000",
  "MntExe": "0",
  "IVA": "3800",
  "MontoNF": "5000",
  "MntTotal": "23800",

  "VlrCodigo": ["C1", "C2"],
  "NmbItem": ["CHOCOLATES", "CIGARROS"],
  "DscItem": ["", ""],
  "QtyItem": [2, 1],
  "DecQtyItem": [0, 0],
  "UnmdItem": ["UN", "UN"],
  "PrcItem": [10000, 5000],
  "DecPrcItem": [0, 0],
  "IndExe": [0, 2],
  "MontoItem": [20000, 5000],
  "DescuentoPct": [],
  "DescuentoMonto": [],
  "RecargoPct": [],
  "RecargoMonto": [],

  "NroLinDR": [],
  "TpoMov": [],
  "GlosaDR": [],
  "TpoValor": [],
  "ValorDR": [],
  "IndExeDR": [],

  "Modulus": "4oNKi2qEmTQ==",
  "Exponent": "AQAB",
  "X509Certificate": "MIIHygcMg==",
  "PrivKey": "-----BEGIN RSA PRIVATE KEY-----MIIEpAIBAAKGQ==-----END RSA PRIVATE KEY-----",

  "RE": "11111111-1",
  "RS": "COMERCIALIZADORA PRUEBAS SPA",
  "TD": "39",
  "RNG_D": "7003",
  "RNG_H": "107002",
  "FA": "2022-04-28",
  "RSAPK_M": "ywGtrqpEHMWCNAXmnZKQBNQ4Jzt2iOlQ1SHgxguch9ct0x15rimQZjn2B2V5Wtk3mLjjWb/DSYs07gPQL5D8yw==",
  "RSAPK_E": "Aw==",
  "RSAPK_IDK": "300",
  "FRMA": "d2U8RrtIW/9N7nMUNk1iKbP2vu5823uwy5OonKZ+vcBoabTcAt5nS0857sXTzGyP90hS+SRm2rAMQITDnXko8g==",
  "RSASK": "-----BEGIN RSA PRIVATE KEY-----MIIBOgIBAAJ-----END RSA PRIVATE KEY-----",
  "RSAPUBK": "-----BEGIN PUBLIC KEY-----FowDQYJKoZIhv-----END PUBLIC KEY-----",

  "proveedor": "empresa prueba spa",
  "domimio": "www.factronica.cl"
}
```

---

## Ejemplo de Respuesta

```json
{
  "success": true,
  "message": "DTE recibido correctamente",
  "datos": {
    "id": null,
    "TipoDTE": "39",
    "Folio": "7078",
    "MntTotal": "23800",
    "RUTEmisor": "11111111-1",
    "RutEnvia": "22222222-2",
    "RUTRecep": "77777777-7",
    "FchEmis": "2022-11-15"
  },
  "links": {
    "xml_sii": "https://www.factronica.cl/home/111111111/boleta/f2f4a251b3e7bae773514a867916d11a_sii.xml",
    "xml_cli": "https://www.factronica.cl/home/111111111/boleta/f2f4a251b3e7bae773514a867916d11a_cli.xml",
    "pdf_carta": "https://www.factronica.cl/home/111111111/boleta/f2f4a251b3e7bae773514a867916d11a_carta.pdf",
    "pdf_ticket": "https://www.factronica.cl/home/111111111/boleta/f2f4a251b3e7bae773514a867916d11a_ticket.pdf"
  },
  "meta": {
    "timestamp": "2026-04-12T01:01:17",
    "version": "1.0"
  }
}
```

---

## Consideraciones

- Validar folios disponibles
- Proteger claves privadas
- Validar datos antes de enviar
- Manejar errores HTTP

---

## Endpoint

POST https://www.factronica.cl/api/sii_herramientas_boletacrearxml/index.php

---

## Ejemplo en Php

```php
<?php
#
#
error_reporting(E_ERROR | E_WARNING);
ini_set('display_errors', '1');
#
# FUNCION PARA ENVIAR JSON A UNA URL
function JsonEnviar($arregloJson, $url)
{
    $payload = json_encode($arregloJson);
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_PORT, 443);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
    $json_response = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    return $json_response;
}
#
#
$DatosBoletaElectronica = array(

    "token" => "---aqui-api-key---",

    "RutEmisor" => "11111111-1",
    "RutEnvia" => "22222222-2",
    "RutReceptor" => "60803000-K",
    "FchResol" => "2014-10-21",
    "NroResol" => "99",
    "SucSii" => "SANTIAGO CENTRO",
    "FchEmis" => "2022-11-15",
    "FchVenc" => "2022-11-15",
    "TermPagoGlosa" => "CONTADO EFECTIVO",
    "TipoDTE" => "39",
    "Folio" => "7078",
    "MntBruto" => "1",

    "RUTEmisor" => "11111111-1",
    "RznSoc" => "COMERCIALIZADORA PRUEBAS SPA",
    "GiroEmis" => "VTA DE CELULARES, ACCESORIOS",
    "Acteco" => "475909",
    "CdgSIISucur" => "13000",
    "DirOrigen" => "ALAMEDA 444",
    "CmnaOrigen" => "SANTIAGO",
    "CiudadOrigen" => "SANTIAGO",
    "CdgVendedor" => "VENTAS OFICINA",
    "CorreoEmisor" => "pruebas@pruebas.com",
    "Web" => "www.pruebas.com",
    "Telefono" => "5694445566",

    "RUTRecep" => "77777777-7",
    "CdgIntRecep" => "12312",
    "RznSocRecep" => "PUBLICO GENERAL",
    "GiroRecep" => "PUBLICO GENERAL",
    "DirRecep" => "SIN DIRECCION",
    "CmnaRecep" => "SIN COMUNA",
    "CiudadRecep" => "SIN CIUDAD",
    "Contacto" => "PUBLICO GENERAL",
    "CorreoRecep" => "PUBLICO GENERAL",
    "FonoRecep" => "56912345678",

    "TasaIVA" => "19",
    "MntNeto" => "20000",
    "MntExe" => "0",
    "IVA" => "3800",
    "MontoNF" => "5000",
    "MntTotal" => "23800",

    "VlrCodigo" => array("Codigo1", "Codigo2"),
    "NmbItem" => array("CHOCOLATES", "CIGARROS"),
    "DscItem" => array("", ""),
    "QtyItem" => array(2, 1),
    "DecQtyItem" => array(0, 0),
    "UnmdItem" => array("UN", "UN"),
    "PrcItem" => array(10000, 5000),
    "DecPrcItem" => array(0, 0),
    "IndExe" => array(0, 2),
    "MontoItem" => array(20000, 5000),
    "DescuentoPct" => array(),
    "DescuentoMonto" => array(),
    "RecargoPct" => array(),
    "RecargoMonto" => array(),

    "NroLinDR" => array(),
    "TpoMov" => array(),
    "GlosaDR" => array(),
    "TpoValor" => array(),
    "ValorDR" => array(),
    "IndExeDR" => array(),

    "Modulus" => "4oNKEmTQ==",
    "Exponent" => "AQAB",
    "X509Certificate" => "MIIHyzCCBbOgSeP0r3gcMg==",
    "PrivKey" => "-----BEGIN RSA PRIVATE KEY-----G77UzigB+hcM-----END RSA PRIVATE KEY-----",

    "RE" => "11111111-1",
    "RS" => "COMERCIALIZADORA PRUEBAS SPA",
    "TD" => "39",
    "RNG_D" => "7003",
    "RNG_H" => "107002",
    "FA" => "2022-04-28",
    "RSAPK_M" => "ywGtrqpEHMWCNAXmnZKQBNQ4Jzt2iOlQ1SHgxguch9ct0x15rimQZjn2B2V5Wtk3mLjjWb/DSYs07gPQL5D8yw==",
    "RSAPK_E" => "Aw==",
    "RSAPK_IDK" => "300",
    "FRMA" => "d2U8RrtIW/9N7nMUNk1iKbP2vu5823uwy5OonKZ+vcBoabTcAt5nS0857sXTzGyP90hS+SRm2rAMQITDnXko8g==",
    "RSASK" => "-----BEGIN RSA PRIVATE KEY-----OgIBAAJBAM-----END RSA PRIVATE KEY-----",
    "RSAPUBK" => "-----BEGIN PUBLIC KEY-----RBzFgjQF5p2Sk-----END PUBLIC KEY-----",

    "proveedor" => "empresa prueba spa",
    "domimio" => "www.factronica.cl"

);
#
#
header('Content-Type: application/json');
#
#
echo   $retorno = JsonEnviar($DatosBoletaElectronica,   "https://www.factronica.cl/api/sii_herramientas_boletacrearxml/index.php");
?>
```
