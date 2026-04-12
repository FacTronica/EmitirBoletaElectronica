# 📄 Documentación API – Emisión Boleta Electrónica SII Chile

## 📌 Endpoint

POST https://wowdte.com/api/sii_herramientas_boletacrearxml/index.php

---

## 📖 Descripción

Este endpoint permite generar una **Boleta Electrónica (DTE tipo 39)** para el Servicio de Impuestos Internos (SII) de Chile enviando un payload en formato JSON.

---

## 🔐 Autenticación

Se utiliza un **token** incluido en el payload:

```json
"token": "API_KEY"
```

---

## 📦 Tipo de Request

- Método: POST
- Content-Type: application/json

---

## 🧾 Estructura del Payload

### 🔹 Datos Generales

| Campo         | Tipo   | Descripción                  |
| ------------- | ------ | ---------------------------- |
| token         | string | Token de autenticación       |
| TipoDTE       | string | Tipo documento (39 = Boleta) |
| Folio         | string | Número de folio              |
| FchEmis       | string | Fecha emisión (YYYY-MM-DD)   |
| FchVenc       | string | Fecha vencimiento            |
| TermPagoGlosa | string | Condición de pago            |

---

### 🔹 Datos Emisor

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

### 🔹 Datos Receptor

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

### 🔹 Totales

| Campo    | Tipo   |
| -------- | ------ |
| MntNeto  | number |
| MntExe   | number |
| IVA      | number |
| MntTotal | number |

---

### 🔹 Detalle de Ítems

Se envían como arreglos paralelos:

```json
"VlrCodigo": ["C1", "C2"],
"NmbItem": ["CHOCOLATES", "CIGARROS"],
"QtyItem": [2, 1],
"PrcItem": [10000, 5000],
"MontoItem": [20000, 5000]
```

---

### 🔹 Firma Electrónica

Campos principales:

- Modulus
- Exponent
- X509Certificate
- PrivKey

⚠️ IMPORTANTE: Manejar estos datos de forma segura.

---

### 🔹 CAF (Autorización SII)

Campos principales:

- RE, RS, TD
- RNG_D, RNG_H
- FA
- RSAPK\_\*
- FRMA

---

## 📤 Ejemplo de Request

```json
{
  "token": "xxxxxxxx",
  "TipoDTE": "39",
  "Folio": "7078",
  "FchEmis": "2022-11-15",
  "RUTEmisor": "76606716-6",
  "RznSoc": "EMPRESA SPA",
  "RUTRecep": "77777777-7",
  "MntTotal": "23800"
}
```

---

## 📥 Respuesta

Ejemplo:

```json
{
  "status": "OK",
  "xml": "...",
  "trackid": "123456"
}
```

---

## ⚠️ Consideraciones

- Validar folios disponibles
- Proteger claves privadas
- Validar datos antes de enviar
- Manejar errores HTTP

---

## 🚀 Flujo

1. Construir JSON
2. Firmar
3. Enviar al endpoint
4. Recibir XML
5. Integrar con SII
