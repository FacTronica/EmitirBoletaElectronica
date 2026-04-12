# API Emisión Boleta Electrónica SII Chile

## Endpoint

POST https://factronica.cl/api/sii_herramientas_boletacrearxml/index.php

---

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

## 🔐 Autenticación

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

### Detalle de Ítems

Se envían como arreglos paralelos:

```json
"VlrCodigo": ["C1", "C2"],
"NmbItem": ["CHOCOLATES", "CIGARROS"],
"QtyItem": [2, 1],
"PrcItem": [10000, 5000],
"MontoItem": [20000, 5000]
```

---

### Firma Electrónica

Campos principales:

- Modulus
- Exponent
- X509Certificate
- PrivKey

IMPORTANTE: Manejar estos datos de forma segura.  
Para Transformar el certificado digital a formato PEM se proporciona la siguiente Url:  
LINK: http://factronica.cl/sii/transformar_certificado/index.php

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
  "token": "ce39695095fcf5d2a6686d0286019850e5ed4185d81caf5cda0f09c87ef28bda",
  "RutEmisor": "76606716-6",
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
  "TipoDespacho": "",
  "IndTraslado": "",
  "MntBruto": "1",
  "RazonRef": "",
  "Observaciones": "",
  "Proyecto": "",
  "RUTEmisor": "76606716-6",
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
  "Fax": "",
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
    "RUTEmisor": "76606716-6",
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
