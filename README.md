CRUD de Películas con Login MVC
Descripción del proyecto:

Este proyecto fue desarrollado como parte de la asignatura de Ingeniería Web. Consiste en una aplicación web creada con CodeIgniter 4 utilizando el patrón de arquitectura MVC (Modelo, Vista y Controlador).

El sistema permite gestionar un catálogo de películas mediante las operaciones CRUD (Crear, Leer, Actualizar y Eliminar), además de implementar un sistema de autenticación que restringe el acceso a las funcionalidades principales.

Estado del proyecto:

El proyecto se encuentra completamente funcional y cumple con todos los requisitos solicitados:

CRUD de películas implementado.
Sistema de Login implementado.
Protección de rutas privadas.
Cierre de sesión (Logout).
Contraseña validada mediante MD5.
Interfaz gráfica personalizada con HTML y CSS.
Aplicación desarrollada bajo el patrón MVC.
Funcionalidades:
Sistema de autenticación

El usuario debe iniciar sesión para acceder a la aplicación.

Características:

Inicio de sesión mediante usuario y contraseña.
Manejo de sesiones.
Cierre de sesión seguro.
Redirección automática al Login cuando no existe una sesión activa.
Gestión de películas

El sistema permite:

Agregar nuevas películas.
Visualizar el listado de películas registradas.
Editar información existente.
Eliminar películas.
Seguridad

Las rutas del CRUD están protegidas, por lo que no es posible acceder directamente a ellas sin autenticarse previamente.

Además, la contraseña es validada mediante un hash MD5.

Demostración del sistema

Usuario de prueba:

Usuario: admin

Contraseña: 123456

Durante la ejecución se pueden demostrar las siguientes funcionalidades:

✅ Inicio de sesión

✅ Acceso al CRUD

✅ Crear película

✅ Editar película

✅ Eliminar película

✅ Cerrar sesión

✅ Restricción de acceso a rutas protegidas

Instalación y ejecución:
Clonar el repositorio del proyecto.
Abrir una terminal dentro de la carpeta del proyecto.
Instalar dependencias con Composer.
Ejecutar el servidor local de CodeIgniter.
Abrir el navegador y acceder a:

http://localhost:8080

Tecnologías utilizadas:

Durante el desarrollo se utilizaron las siguientes tecnologías:

PHP
CodeIgniter 4
HTML5
CSS3
Git
GitHub
MD5
Arquitectura utilizada:

El proyecto fue desarrollado siguiendo el patrón MVC (Modelo - Vista - Controlador).

Modelo (Model)

Encargado de gestionar los datos y la lógica relacionada con la información.

Vista (View)

Responsable de mostrar la interfaz gráfica al usuario.

Controlador (Controller)

Actúa como intermediario entre las vistas y la lógica de negocio.

Seguridad implementada:

La aplicación incorpora los siguientes mecanismos de seguridad:

Autenticación mediante sesión.
Protección de rutas privadas.
Redirección automática al Login.
Funcionalidad de Logout.
Validación de contraseña con MD5.
Autor:

Josué Martín Villalva Freire

Estudiante de Ingeniería de Software.

GitHub: https://github.com/Josu-05

Licencia:

Proyecto desarrollado con fines exclusivamente académicos para la asignatura de Ingeniería Web.
