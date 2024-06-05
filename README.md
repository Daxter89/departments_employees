# Laravel Departments and Employees Management System

Este proyecto es una aplicación de gestión de departamentos y empleados construida con el framework Laravel. La aplicación permite realizar operaciones CRUD (Crear, Leer, Actualizar, Borrar) sobre departamentos y empleados, manteniendo una relación Many-to-One entre estas entidades.

## Características

- **Gestión de Departamentos**: Crear, ver, actualizar y eliminar departamentos.
- **Gestión de Empleados**: Crear, ver, actualizar y eliminar empleados, asociándolos a departamentos específicos.
- **Interfaz de Usuario**: Vistas amigables para el usuario para realizar todas las operaciones CRUD.

## Requisitos

- PHP >= 7.3
- Composer
- MySQL u otro sistema de gestión de bases de datos compatible
- Node.js (opcional, para gestionar dependencias de frontend)

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/tuusuario/nombre-del-repo.git
    cd nombre-del-repo
    ```

2. Instala las dependencias de PHP usando Composer:
    ```sh
    composer install
    ```

3. Copia el archivo `.env.example` a `.env` y configura tus variables de entorno:
    ```sh
    cp .env.example .env
    ```

4. Genera la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```

5. Configura la base de datos en el archivo `.env`:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña
    ```

6. Migra las tablas y ejecuta los seeders para poblar la base de datos:
    ```sh
    php artisan migrate --seed
    ```

7. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

## Uso

- Accede a la aplicación en tu navegador: `http://localhost:8000`.
- Serás redirigido automáticamente a la lista de departamentos.
- Desde la interfaz, podrás gestionar departamentos y empleados a través de formularios y vistas interactivas.

## Estructura del Proyecto

- **Models**: Definición de los modelos `Department` y `Employee` con sus respectivas relaciones.
- **Controllers**: Controladores `DepartmentController` y `EmployeeController` para manejar la lógica de negocio.
- **Views**: Vistas Blade (`index`, `create`, `edit`) para departamentos y empleados.
- **Migrations**: Migraciones para crear las tablas en la base de datos.
- **Seeders**: Seeders para poblar la base de datos con datos de prueba.
