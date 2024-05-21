# Sistema de Gestión de Propiedades Inmobiliarias

Este proyecto implementa un sistema de gestión de propiedades inmobiliarias con un backend Laravel y un frontend Vue.js. 

## Características

* **Backend (Laravel):**
    * API RESTful para gestionar propiedades, clientes, agentes, visitas y contratos.
    * Base de datos MySQL.
    * Eloquent ORM para la interacción con la base de datos.
* **Frontend (Vue.js):**
    * Interfaz de usuario intuitiva para interactuar con el backend.
    * Componentes Vue.js para cada entidad (propiedades, clientes, etc.).
    * Axios para realizar peticiones HTTP a la API.
    * Vue Router para la gestión de rutas. 

## Instalación

**1. Clonar el repositorio:**

```bash
git clone https://github.com/giovannidrop/Examen-Final.git

2. Instalar las dependencias del backend (Laravel)
cd backend
composer install

3. Configurar la base de datos:
Crea una base de datos MySQL.
Configura las credenciales de la base de datos en el archivo .env del backend:
DB_DATABASE=nombre_de_la_base_de_datos
DB_USERNAME=usuario_de_la_base_de_datos
DB_PASSWORD=contraseña_de_la_base_de_datos

4. Ejecutar las migraciones:
php artisan migrate

*Ejecución
1. Iniciar el servidor de desarrollo del backend:
cd backend
php artisan serve

2. Iniciar el servidor de desarrollo del frontend:
cd frontend
npm run serve

*Uso
Una vez que hayas iniciado los servidores de desarrollo, puedes acceder a la aplicación en tu navegador:
Backend (API): http://localhost:8000/api
Frontend (Vue.js): http://localhost:8080

*Rutas de la API
Propiedades: /api/propiedades
Clientes: /api/clientes
Agentes: /api/agentes
Visitas: /api/visitas
Contratos: /api/contratos

*Contribuciones
Si deseas contribuir a este proyecto, puedes crear un fork del repositorio, realizar tus cambios y enviar un pull request.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
