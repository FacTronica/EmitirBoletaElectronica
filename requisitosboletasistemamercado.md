
# Requisitos para Emitir Boleta Electrónica en Chile (SII)
Guía para Sistema Propio o Software de Mercado

---

## 1. Requisitos Generales del Contribuyente

Para emitir **Boletas Electrónicas en Chile**, el contribuyente debe cumplir con:

- Tener **RUT válido**
- Haber realizado **Inicio de Actividades** ante el Servicio de Impuestos Internos (SII)
- Tener un **giro que permita emitir documentos tributarios**
- No estar bloqueado o restringido por el SII
- Tener **Clave Tributaria activa**
- Contar con **Certificado Digital vigente** para firmar documentos electrónicos

---

## 2. Opciones para Emitir Boletas Electrónicas

Existen dos modalidades autorizadas por el SII:

### A) Sistema Gratuito del SII

El contribuyente puede emitir boletas usando el portal del SII.

Características:

- Sin costo
- No requiere certificación técnica
- Uso manual desde el portal web o aplicación móvil
- No permite integración con sistemas ERP

---

### B) Sistema Propio o Software de Mercado

El contribuyente puede utilizar:

- Un **ERP propio**
- Un **software de mercado**
- Un **POS integrado**
- Una **API de facturación electrónica**

En este caso el sistema debe cumplir con los requisitos técnicos del SII.

---

## 3. Requisitos Técnicos para Sistema Propio o Software de Mercado

### 3.1 Generación de Documento Tributario Electrónico (DTE)

El sistema debe generar la boleta en **formato XML** según el estándar definido por el SII.

La boleta debe incluir:

- Rut Emisor
- Tipo de Documento (Boleta Electrónica)
- Folio
- Fecha de emisión
- Detalle de productos o servicios
- Monto neto
- IVA
- Monto total
- Firma electrónica

---

### 3.2 Firma Electrónica

El XML generado debe ser firmado digitalmente utilizando:

- **Certificado Digital del contribuyente**
- Firma basada en estándar **XML Digital Signature**

---

### 3.3 Uso de CAF (Código de Autorización de Folios)

Para emitir documentos electrónicos es obligatorio solicitar al SII:

**CAF – Código de Autorización de Folios**

Este archivo permite:

- generar folios válidos
- validar autenticidad del documento
- generar el código de barras (TED)

---

### 3.4 Generación de TED

El sistema debe generar el:

**TED (Timbre Electrónico del Documento)**

Este contiene:

- datos del documento
- firma del CAF
- código de barras PDF417

---

### 3.5 Envío de Información al SII

Las boletas electrónicas deben informarse al SII mediante:

- **Resumen de Ventas Diarias**
- envío automático desde el sistema

El resumen debe ser:

- generado en XML
- firmado electrónicamente
- enviado al SII

---

### 3.6 Almacenamiento de Documentos

Las boletas electrónicas deben almacenarse por **al menos 6 años**.

El sistema debe guardar:

- XML original
- estado de envío al SII
- respuesta del SII

---

## 4. Proceso de Certificación del Sistema

Si se utiliza un **sistema propio**, el SII exige pasar un proceso de certificación.

Etapas:

1. Inscripción como emisor electrónico
2. Solicitud de **Set de Pruebas**
3. Generación de DTE de prueba
4. Envío de documentos de prueba al SII
5. Validación de representación impresa
6. Declaración de cumplimiento
7. Autorización final del sistema

Una vez aprobado, el sistema queda autorizado para operar en producción.

---

## 5. Funcionalidades que debe tener un ERP para Boletas Electrónicas

Un sistema ERP debe implementar:

### Backend

- Generación de XML DTE
- Firma electrónica
- Manejo de CAF
- Generación de TED
- Envío de resumen diario
- Recepción de respuesta del SII

### Base de Datos

Debe almacenar:

- folios utilizados
- XML generados
- estados de envío
- respuestas del SII
- resumen de ventas

---

## 6. Arquitectura típica usada por ERP en Chile

Normalmente los ERP implementan:

1. Generación del DTE
2. Firma del documento
3. Almacenamiento XML
4. Generación del TED
5. Inclusión en el resumen diario
6. Envío al SII
7. Recepción de estado

---

## 7. Consideración Importante para Sistemas SaaS

Si el sistema es **SaaS (multiempresa)**:

- El sistema se certifica **una sola vez**
- Cada empresa carga su:
  - certificado digital
  - CAF autorizado por el SII

Esto permite operar con múltiples clientes usando el mismo sistema.

---

## 8. Documentos Relacionados con Boleta Electrónica

Los principales documentos electrónicos relacionados son:

- Boleta Electrónica
- Nota de Crédito Electrónica
- Resumen de Ventas Diarias

---

## 9. Sitio Oficial

Documentación oficial del SII:

https://www.sii.cl

Sección:
Facturación Electrónica → Boleta Electrónica

---

**Documento generado como guía técnica resumida para implementación de sistemas de emisión de Boletas Electrónicas en Chile.**
