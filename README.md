# Sistema de Control de Asistencia de Empleados
### Employee Attendance System
Aplicación web para el registro y gestión de asistencia del personal, desarrollada en **PHP puro con arquitectura MVC desde cero**, **Programación Orientada a Objetos (POO)**, **PDO** y **MariaDB** como base de datos.

## 1. Descripción del Negocio

Las organizaciones modernas necesitan gestionar la asistencia de su personal de forma precisa y centralizada (Solo de un turno). Este sistema reemplaza los registros manuales en papel o planillas físicas, eliminando problemas como:

- Registros incompletos o manipulados
- Alto costo administrativo por procesar asistencias manualmente
- Imposibilidad de generar reportes históricos de forma automática
- Falta de trazabilidad y auditoría sobre las marcaciones
- Dependencia de personal para consolidar información

## 2. Problema y Solución

### Problema Identificado
Las empresas carecen de un sistema digital accesible para registrar, monitorear y gestionar la asistencia de sus empleados. El control manual genera imprecisiones, pérdidas de información y dificulta la toma de decisiones basadas en datos confiables.

### Causas
- Ausencia de una herramienta digital centralizada para marcar asistencia
- Los registros en papel se pierden, deterioran o se alteran fácilmente
- No existe diferenciación de roles entre quién administra y quién solo consulta
- Es imposible generar reportes históricos de forma automática

### Efectos
- Pérdida económica por pago incorrecto de horas trabajadas
- Incapacidad de detectar patrones de ausentismo a tiempo
- Mayor carga operativa para el área de Recursos Humanos

### Solución Propuesta

Desarrollar una aplicación web con **PHP + POO + MVC** que permita:

- Autenticar usuarios con roles diferenciados (administrador / empleado)
- Registrar asistencia con fecha y hora exactas usando PDO y MariaDB
- Gestionar el catálogo de empleados y departamentos (CRUD completo)
- Consultar y filtrar el historial de asistencias por empleado y fecha
- Visualizar un dashboard con el estado de asistencia del día en curso
- 
## 3. Preanálisis

### Necesidades Identificadas

1. Registrar quién entra y sale, con fecha y hora exacta
2. Panel de control con el estado de asistencia del día
3. Administrar el catálogo de empleados (crear, editar, eliminar)
4. Organizar empleados por departamentos
5. Consultar historial de asistencias filtrado por empleado y período
6. Autenticar usuarios para proteger la información del sistema
7. Diferenciar permisos entre administrador y empleado

### Estudio de Viabilidad

#### Viabilidad Técnica
- PHP 8+ disponible en prácticamente cualquier servidor web
- MariaDB es un gestor gratuito, robusto y ampliamente documentado
- Apache con `mod_rewrite` disponible en XAMPP para desarrollo local
- La POO permite estructurar el sistema con clases, herencia y encapsulamiento
- El patrón MVC está documentado en [`CONCEPTS.md`](./CONCEPTS.md)

#### Viabilidad Económica
- Stack completamente open source y gratuito (PHP, MariaDB, Apache, Git)
- Entorno de desarrollo levantable localmente con XAMPP sin costo
- No se requieren licencias de software adicionales

#### Viabilidad Operacional
- Los usuarios solo necesitan un navegador web para acceder
- Administrable de forma remota una vez desplegado
- La separación en módulos facilita la capacitación del personal

### Alcance del Sistema

#### Dentro del alcance
- Autenticación con sesiones PHP y roles (administrador / empleado)
- Módulo de empleados: CRUD completo
- Módulo de departamentos: gestión de áreas
- Módulo de asistencia: registro de entrada/salida e historial
- Dashboard con resumen de asistencias del día
- Layouts reutilizables (header, footer, navbar) — principio DRY

#### Fuera del alcance
- Integración con dispositivos biométricos
- Módulo de nómina o cálculo de salarios
- Aplicación móvil nativa (iOS / Android)
- Notificaciones por correo o SMS
- Integración con sistemas ERP externos

---

## 4. Análisis de Requisitos

### Requisitos Funcionales

**RF01. Autenticación de usuarios**
El sistema debe permitir el inicio de sesión mediante nombre de usuario y contraseña.

**RF02. Gestión de roles**
El sistema debe diferenciar permisos entre administrador y superadministrador.

**RF03. Registro de empleados**
El sistema debe permitir registrar nuevos empleados con sus datos personales y cargo asignado.

**RF04. Edición de empleados**
El sistema debe permitir modificar la información de un empleado existente.

**RF05. Eliminación de empleados**
El sistema debe permitir eliminar empleados registrados.

**RF06. Gestión de cargos**
El sistema debe permitir crear y administrar cargos laborales.

**RF07. Registro de asistencia**
El sistema debe registrar automáticamente la fecha y hora de entrada del empleado.

**RF08. Registro de salida**
El sistema debe registrar la hora de salida del empleado.

**RF09. Consulta de historial**
El sistema debe permitir consultar el historial de asistencias filtrando por empleado y fecha.

**RF10. Dashboard administrativo**
El sistema debe mostrar un resumen diario de asistencias, tardanzas y faltas.

**RF11. Protección de rutas**
El sistema debe restringir el acceso a módulos según el rol del usuario autenticado.

**RF12. Persistencia de datos**
El sistema debe almacenar toda la información en una base de datos MariaDB usando PDO.

### 4.2 Requisitos No Funcionales
### Requisitos No Funcionales

**RNF01. Seguridad**
Las consultas SQL deben utilizar prepared statements mediante PDO para evitar inyección SQL.

**RNF02. Rendimiento**
El sistema debe responder en menos de 3 segundos en operaciones comunes.

**RNF03. Disponibilidad**
El sistema debe estar disponible mientras el servidor web esté operativo.

**RNF04. Usabilidad**
La interfaz debe ser intuitiva y fácil de usar para administradores y empleados.

**RNF05. Compatibilidad**
El sistema debe funcionar en navegadores modernos como Chrome, Edge y Firefox.

**RNF06. Escalabilidad**
La arquitectura MVC debe permitir agregar nuevos módulos fácilmente.

**RNF07. Mantenibilidad**
El código debe estar organizado bajo principios POO y separación de responsabilidades.

**RNF08. Portabilidad**
El sistema debe poder ejecutarse en cualquier entorno compatible con PHP 8 y MariaDB.

**RNF09. Integridad de datos**
La base de datos debe mantener relaciones mediante claves foráneas.

**RNF10. Control de versiones**
El proyecto debe mantenerse bajo control de versiones usando Git y GitHub.

## Stack Tecnológico

| Capa | Tecnología |
|---|---|
| **Backend** | PHP 8+ — POO (Programación Orientada a Objetos) — MVC desde cero |
| **Base de datos** | MariaDB — PDO (PHP Data Objects) con prepared statements |
| **Frontend** | HTML5, CSS3, JavaScript — Vistas PHP con layouts reutilizables |
| **Servidor web** | Apache — Reescritura de URLs vía `.htaccess` |
| **Control de versiones** | Git + GitHub |
| **Configuración** | Variables de entorno (`.env`) para credenciales |
---

## Arquitectura del Proyecto

El sistema aplica **POO** y **MVC** implementado desde cero. Los 4 pilares de POO en el proyecto:
### Arquitectura MVC

### Principios POO Aplicados

* Encapsulamiento
* Herencia
* Abstracción
* Polimorfismo

La estructura modular facilita el mantenimiento y escalabilidad del sistema.


### Flujo de una Petición
1. El usuario realiza una solicitud desde el navegador.
2. Apache redirige la petición mediante `.htaccess`.
3. El Router identifica el controlador correspondiente.
4. El Controlador procesa la lógica de negocio.
5. El Modelo interactúa con la base de datos mediante PDO.
6. El Controlador envía los datos a la Vista.
7. La Vista renderiza la respuesta al usuario.


### Estructura del Proyecto
### Arquitectura MVC

El proyecto implementa el patrón MVC (Model - View - Controller):

* **Model:** Encargado de la lógica de acceso a datos y consultas SQL mediante PDO.
* **View:** Responsable de mostrar la interfaz al usuario usando HTML, CSS y PHP.
* **Controller:** Gestiona las peticiones del usuario y coordina la comunicación entre modelos y vistas.

### Principios POO Aplicados

* Encapsulamiento
* Herencia
* Abstracción
* Polimorfismo

La estructura modular facilita el mantenimiento y escalabilidad del sistema.
## Instalación

### Requisitos previos
- PHP 8+
- Servidor web local o hosting
- MariaDB / MySQL

### Pasos

```bash
# 1. Clonar el repositorio
git clone https://github.com/ojitoslanda/employee-attendance-system.git
cd employee-attendance-system

# 2. Configurar variables de entorno
cp .env.example .env
# Editar .env con tus credenciales de base de datos

# 3. Crear la base de datos


# 4. Apuntar el servidor web a la carpeta public/

```

## TRELLO
<img width="1194" height="636" alt="Captura de pantalla 2026-06-04 120135" src="https://github.com/user-attachments/assets/5ef95816-9428-4e22-94b1-488354072726" />


### DIAGRAMA DE FIGMA UI/UX
<img width="1292" height="539" alt="image" src="https://github.com/user-attachments/assets/417a050c-a89d-4180-ad62-07e8e3b967da" />

<img width="1252" height="580" alt="image" src="https://github.com/user-attachments/assets/15591f39-a39f-4284-aecc-bdbce0deffb2" />


## Base de datos
```sql
create database senai_asistencia;
use senai_asistencia;


create table cargo (
id_cargo int auto_increment primary key,
nombre_cargo varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table empleado(
id_empleado int primary key auto_increment,
nombre varchar(100) not null,
apellido varchar(100) not null,
dni varchar(8) unique not null,
celular varchar(20),
correo varchar (100) not null unique,
id_cargo int not null,
fecha_registro timestamp default current_timestamp,
foreign key (id_cargo) references cargo(id_cargo)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table usuario(
id_usuario int auto_increment primary key,
roles enum('admin', 'superadmin') default 'admin',
nombre_usuario varchar (150) not null,
clave varchar(250) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table asistencia(
id_asistencia int auto_increment primary key,
fecha date not null,
hora_entrada timestamp default current_timestamp not null,
hora_salida timestamp default current_timestamp not null,
estado enum('asistio', 'tardanza', 'falto') default 'falto' not null,
id_empleado int not null,
foreign key (id_empleado) references empleado(id_empleado)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

### Diagrama Entidad-Relacion (DER)
Falta integrar

 
### Modelo Relacional (MR)
![MODELO_RELACIONAL](https://raw.githubusercontent.com/ojitoslanda/testing/refs/heads/master/img/db.png)

### Cardinalidades

Las cardinalidades describen cuántos registros de una tabla se relacionan con cuántos de otra.

**cargo → empleado (1:N)**
Un cargo puede estar asignado a muchos empleados.
Un empleado solo puede tener un cargo.
```
cargo (1) -----< empleado (N)
```

**empleado → asistencia (1:N)**
Un empleado puede tener muchos registros de asistencia (uno por día).
Cada registro de asistencia pertenece a un solo empleado.
```
empleado (1) -----< asistencia (N)
```

**usuario**
La tabla usuario es independiente. No se relaciona con empleado ni con asistencia.
Representa las cuentas de acceso al sistema (administradores), no a los empleados.
