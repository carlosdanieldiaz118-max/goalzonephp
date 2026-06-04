# Sistema de Alquiler de Canchas Deportivas GOALZONE

Aplicación web para la gestión y reserva de canchas deportivas, desarrollada en **PHP puro con arquitectura MVC desde cero**, **Programación Orientada a Objetos (POO)**, **PDO** y **MariaDB** como base de datos.

---

# 1. Descripción del Negocio

GOALZONE es un negocio dedicado al alquiler de canchas deportivas para partidos de fútbol y otras actividades recreativas. Actualmente, muchos centros deportivos realizan sus reservas manualmente mediante llamadas, mensajes o anotaciones físicas, generando desorganización y conflictos en los horarios.

El sistema permitirá administrar reservas, clientes, horarios y canchas deportivas de forma digital y centralizada.

Problemas comunes que se buscan solucionar:

* Duplicidad de reservas
* Pérdida de información de clientes
* Desorganización de horarios
* Dificultad para controlar pagos
* Imposibilidad de generar reportes automáticos
* Falta de control administrativo sobre las reservas

---

# 2. Problema y Solución

## Problema Identificado

Los centros deportivos carecen de un sistema digital eficiente para gestionar reservas y alquileres de canchas deportivas. El control manual ocasiona errores administrativos, pérdida de ingresos y mala organización de horarios.

## Causas

* Uso de registros manuales en papel o WhatsApp
* Falta de control automatizado de horarios disponibles
* Ausencia de historial de reservas
* No existe gestión centralizada de clientes y pagos
* Dificultad para visualizar disponibilidad de canchas

## Efectos

* Conflictos entre clientes por reservas duplicadas
* Pérdidas económicas por mala gestión
* Mala experiencia para los usuarios
* Desorganización administrativa
* Dificultad para controlar ingresos diarios

## Solución Propuesta

Desarrollar una aplicación web con **PHP + POO + MVC** que permita:

* Registrar usuarios y administradores
* Gestionar canchas deportivas disponibles
* Realizar reservas por fecha y horario
* Consultar disponibilidad de canchas
* Registrar pagos y estados de reserva
* Visualizar un dashboard administrativo
* Generar historial de reservas

---

# 3. Preanálisis

## Necesidades Identificadas

1. Registrar reservas de canchas deportivas
2. Gestionar horarios disponibles
3. Administrar clientes registrados
4. Gestionar canchas deportivas
5. Consultar historial de reservas
6. Controlar pagos realizados
7. Autenticar usuarios y administradores

---

## Estudio de Viabilidad

### Viabilidad Técnica

* PHP 8+ compatible con servidores modernos
* MariaDB como gestor de base de datos robusto y gratuito
* Arquitectura MVC implementada desde cero
* Uso de PDO para seguridad en consultas SQL
* Apache con `.htaccess` para rutas amigables

### Viabilidad Económica

* Uso de tecnologías open source gratuitas
* No requiere licencias pagas
* Compatible con XAMPP para desarrollo local

### Viabilidad Operacional

* Accesible desde cualquier navegador web
* Fácil administración del sistema
* Interfaz intuitiva para clientes y administradores

---

## Alcance del Sistema

### Dentro del alcance

* Inicio de sesión de usuarios
* Gestión de reservas
* Gestión de canchas deportivas
* Gestión de clientes
* Registro de pagos
* Dashboard administrativo
* Historial de reservas
* CRUD completo de módulos

### Fuera del alcance

* Aplicación móvil nativa
* Integración con billeteras digitales
* Integración con GPS
* Notificaciones SMS
* Integración con sistemas externos ERP

---

# 4. Análisis de Requisitos

## 4.1 Requisitos Funcionales

**RF01. Inicio de sesión**
El sistema debe permitir autenticarse mediante usuario y contraseña.

**RF02. Gestión de usuarios**
El sistema debe permitir registrar, editar y eliminar usuarios.

**RF03. Gestión de canchas**
El sistema debe permitir registrar, editar y eliminar canchas deportivas.

**RF04. Registro de reservas**
El sistema debe permitir realizar reservas indicando fecha y horario.

**RF05. Validación de horarios**
El sistema debe evitar reservas duplicadas en el mismo horario.

**RF06. Gestión de clientes**
El sistema debe permitir administrar clientes registrados.

**RF07. Gestión de pagos**
El sistema debe registrar pagos realizados por reservas.

**RF08. Historial de reservas**
El sistema debe mostrar el historial de reservas realizadas.

**RF09. Dashboard administrativo**
El sistema debe mostrar estadísticas generales del negocio.

**RF10. Gestión de estados**
El sistema debe permitir cambiar estados de reserva (pendiente, pagado, cancelado).

**RF11. Protección de rutas**
El sistema debe restringir acceso según roles.

**RF12. Persistencia de datos**
El sistema debe almacenar información en MariaDB usando PDO.

---

## 4.2 Requisitos No Funcionales

**RNF01. Seguridad**
Las consultas SQL deben utilizar prepared statements mediante PDO.

**RNF02. Rendimiento**
El sistema debe responder en menos de 3 segundos.

**RNF03. Disponibilidad**
El sistema debe estar disponible mientras el servidor esté activo.

**RNF04. Usabilidad**
La interfaz debe ser fácil e intuitiva.

**RNF05. Compatibilidad**
Compatible con Chrome, Edge y Firefox.

**RNF06. Escalabilidad**
La arquitectura MVC debe permitir agregar nuevos módulos.

**RNF07. Mantenibilidad**
El código debe seguir principios POO.

**RNF08. Portabilidad**
Debe funcionar en cualquier entorno PHP 8+.

**RNF09. Integridad de datos**
Uso de claves foráneas para mantener relaciones.

**RNF10. Control de versiones**
El proyecto debe gestionarse mediante Git y GitHub.

---

# Stack Tecnológico

 Capa                  Tecnología                  
 
 Backend               PHP 8+ — MVC — POO          
 Base de datos        | MariaDB — PDO               
 Frontend             | HTML5, CSS3, JavaScript     
 Servidor web         | Apache                      
 Control de versiones | Git + GitHub                
 Configuración        | Variables de entorno `.env` 

---

# Arquitectura del Proyecto

El proyecto implementa el patrón MVC (Model - View - Controller).

## Arquitectura MVC

* **Model:** Maneja acceso y consultas a la base de datos.
* **View:** Muestra la interfaz gráfica al usuario.
* **Controller:** Controla la lógica y flujo de la aplicación.

---

## Principios POO Aplicados

* Encapsulamiento
* Herencia
* Abstracción
* Polimorfismo

---

# Flujo de una Petición

1. El usuario realiza una solicitud desde el navegador.
2. Apache redirige mediante `.htaccess`.
3. El Router identifica el controlador.
4. El Controlador procesa la lógica.
5. El Modelo interactúa con MariaDB usando PDO.
6. El Controlador envía datos a la Vista.
7. La Vista renderiza la respuesta.

---

# Instalación

## Requisitos previos

* PHP 8+
* Apache
* MariaDB / MySQL
* XAMPP o Laragon

## Pasos

```bash
# Clonar repositorio
git clone https://github.com/tuusuario/goalzone.git

# Ingresar al proyecto
cd goalzone

# Configurar variables de entorno
cp .env.example .env

# Configurar base de datos

# Ejecutar servidor

###TRELLO
<img width="1139" height="693" alt="image" src="https://github.com/user-attachments/assets/10f376b2-26f5-4a91-b124-ea414d68c119" />


###DIAGRAMA DE FIGMA UI/UX

-FIGMA IU
<img width="1282" height="630" alt="image" src="https://github.com/user-attachments/assets/2a3591ea-0a31-4c5c-8575-d0da6c10b42d" />
<img width="1246" height="539" alt="image" src="https://github.com/user-attachments/assets/1897f37c-1ef2-4e88-a538-bc94c2aec6ef" />

-FIGMA UX
---

# Base de Datos

```sql
CREATE DATABASE goalzone;
USE goalzone;

CREATE TABLE usuario(
id_usuario INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(100) NOT NULL,
correo VARCHAR(100) UNIQUE NOT NULL,
clave VARCHAR(255) NOT NULL,
rol ENUM('admin','cliente') DEFAULT 'cliente'
);

CREATE TABLE cancha(
id_cancha INT AUTO_INCREMENT PRIMARY KEY,
nombre_cancha VARCHAR(100) NOT NULL,
tipo VARCHAR(50),
precio DECIMAL(10,2) NOT NULL,
estado ENUM('disponible','mantenimiento') DEFAULT 'disponible'
);

CREATE TABLE reserva(
id_reserva INT AUTO_INCREMENT PRIMARY KEY,
fecha DATE NOT NULL,
hora_inicio TIME NOT NULL,
hora_fin TIME NOT NULL,
estado ENUM('pendiente','pagado','cancelado') DEFAULT 'pendiente',
id_usuario INT NOT NULL,
id_cancha INT NOT NULL,
FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario),
FOREIGN KEY (id_cancha) REFERENCES cancha(id_cancha)
);

CREATE TABLE pago(
id_pago INT AUTO_INCREMENT PRIMARY KEY,
monto DECIMAL(10,2) NOT NULL,
fecha_pago TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
metodo_pago VARCHAR(50),
id_reserva INT NOT NULL,
FOREIGN KEY (id_reserva) REFERENCES reserva(id_reserva)
);
```

---

# Cardinalidades

## usuario → reserva (1:N)

Un usuario puede realizar muchas reservas.

```text
usuario (1) -----< reserva (N)
```

## cancha → reserva (1:N)

Una cancha puede tener muchas reservas.

```text
cancha (1) -----< reserva (N)
```

## reserva → pago (1:1)

Cada reserva puede tener un pago asociado.

```text
reserva (1) ----- (1) pago
```
