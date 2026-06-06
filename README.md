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
#TRELLO
<img width="1139" height="693" alt="image" src="https://github.com/user-attachments/assets/10f376b2-26f5-4a91-b124-ea414d68c119" />

###DIAGRAMA DE FIGMA WIREFRAME

<img width="635" height="212" alt="image" src="https://github.com/user-attachments/assets/27e479df-bfcc-4f38-b87b-f4f8a4965355" />

#DIAGRAMA DE FIGMA UI/UX

-FIGMA IU
<img width="1282" height="630" alt="image" src="https://github.com/user-attachments/assets/2a3591ea-0a31-4c5c-8575-d0da6c10b42d" />
<img width="1246" height="539" alt="image" src="https://github.com/user-attachments/assets/1897f37c-1ef2-4e88-a538-bc94c2aec6ef" />

-FIGMA UX
FALTA 
---
# Instalación

## Requisitos previos

* PHP 8+
* Apache
* MariaDB / MySQL
* XAMPP o Laragon

## Pasos
## Base de datos
CREATE DATABASE IF NOT EXISTS goalzone_deportivo;
USE goalzone_deportivo;

CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(150) NOT NULL UNIQUE,
    roles ENUM('admin', 'usuario') DEFAULT 'usuario',
    clave VARCHAR(250) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO usuario (nombre_usuario, roles, clave) VALUES
('Carlos', 'admin', '123'),
('Daniel', 'usuario', '12345');

CREATE TABLE canchas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    precio_hora DECIMAL(6,2) NOT NULL,
    estado VARCHAR(20) DEFAULT 'disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(80) NOT NULL,
    telefono VARCHAR(15),
    email VARCHAR(100) UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(80) NOT NULL,
    telefono VARCHAR(15),
    email VARCHAR(100) UNIQUE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO canchas (nombre, precio_hora, estado) VALUES
('Cancha Fútbol 1', 50.00, 'disponible'),
('Cancha Fútbol 2', 50.00, 'disponible'),
('Cancha Fútbol 3', 55.00, 'mantenimiento'),
('Cancha Tenis 1', 30.00, 'disponible'),
('Cancha Tenis 2', 30.00, 'disponible'),
('Cancha Básquet 1', 40.00, 'disponible'),
('Cancha Básquet 2', 40.00, 'mantenimiento'),
('Cancha Vóley 1', 35.00, 'disponible'),
('Cancha Vóley 2', 35.00, 'disponible'),
('Cancha Paddle 1', 45.00, 'disponible'),
('Cancha Paddle 2', 45.00, 'disponible'),
('Cancha Frontón 1', 25.00, 'disponible'),
('Cancha Frontón 2', 25.00, 'mantenimiento'),
('Cancha Fútbol Sala 1', 60.00, 'disponible'),
('Cancha Fútbol Sala 2', 60.00, 'disponible'),
('Cancha Béisbol 1', 70.00, 'disponible'),
('Cancha Rugby 1', 80.00, 'mantenimiento'),
('Cancha Golf 1', 100.00, 'disponible'),
('Cancha Squash 1', 40.00, 'disponible'),
('Cancha Squash 2', 40.00, 'disponible');


INSERT INTO clientes (nombre, telefono, email) VALUES
('Luis Ramírez', '987654321', 'luis.ramirez@email.com'),
('Ana Torres', '912345678', 'ana.torres@email.com'),
('Carlos Mendoza', '998877665', 'carlos.mendoza@email.com'),
('María Fernández', '955443322', 'maria.fernandez@email.com'),
('Jorge Sánchez', '966554433', 'jorge.sanchez@email.com'),
('Lucía Gómez', '977665544', 'lucia.gomez@email.com'),
('Pedro Quispe', '988776655', 'pedro.quispe@email.com'),
('Carmen Rojas', '944332211', 'carmen.rojas@email.com'),
('Andrés Herrera', '933221100', 'andres.herrera@email.com'),
('Valentina Díaz', '922110099', 'valentina.diaz@email.com'),
('Ricardo Paredes', '911009988', 'ricardo.paredes@email.com'),
('Sofía Castillo', '900998877', 'sofia.castillo@email.com'),
('Fernando León', '987123456', 'fernando.leon@email.com'),
('Isabel Cáceres', '976543210', 'isabel.caceres@email.com'),
('Raúl Espinoza', '965432109', 'raul.espinoza@email.com'),
('Patricia Vega', '954321098', 'patricia.vega@email.com'),
('Eduardo Ríos', '943210987', 'eduardo.rios@email.com'),
('Mónica Flores', '932109876', 'monica.flores@email.com'),
('Gustavo Luna', '921098765', 'gustavo.luna@email.com'),
('Daniela Cruz', '910987654', 'daniela.cruz@email.com');


CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,

    id_cancha INT NOT NULL,
    id_cliente INT NOT NULL,
    id_usuario INT NOT NULL,

    fecha_hora_inicio DATETIME NOT NULL,

    CONSTRAINT fk_cancha
        FOREIGN KEY (id_cancha)
        REFERENCES canchas(id),

    CONSTRAINT fk_cliente
        FOREIGN KEY (id_cliente)
        REFERENCES clientes(id),

    CONSTRAINT fk_usuario
        FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usuario)

) ENGINE=InnoDB;INSERT INTO reservas (id_cancha, id_cliente, fecha_hora_inicio) VALUES
(1, 1, '2025-05-10 15:00:00'),
(4, 2, '2025-05-11 10:30:00'),
(6, 3, '2025-05-12 18:00:00'),
(8, 4, '2025-05-13 16:00:00'),
(10, 5, '2025-05-14 12:00:00'),
(2, 6, '2025-05-15 14:30:00'),
(5, 7, '2025-05-16 09:00:00'),
(7, 8, '2025-05-17 19:00:00'),
(9, 9, '2025-05-18 17:00:00'),
(11, 10, '2025-05-19 11:00:00'),
(3, 11, '2025-05-20 20:00:00'),
(12, 12, '2025-05-21 08:30:00'),
(14, 13, '2025-05-22 13:00:00'),
(16, 14, '2025-05-23 15:30:00'),
(18, 15, '2025-05-24 10:00:00'),
(19, 16, '2025-05-25 18:30:00'),
(1, 17, '2025-05-26 12:00:00'),
(4, 18, '2025-05-27 14:00:00'),
(6, 19, '2025-05-28 16:30:00'),
(8, 20, '2025-05-29 19:30:00');
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
