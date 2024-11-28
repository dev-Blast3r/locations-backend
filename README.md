# Locations Backend

Este proyecto es el backend del sistema de gestión de ubicaciones. Proporciona un API REST para administrar y consumir datos de las ubicaciones.

## Características

- API RESTful para gestionar ubicaciones.
- Autenticación basada en API Key.
- Configuración sencilla para desarrollo y producción.

## Tecnologías utilizadas

- **PHP** (versión 7.4)
- **Laravel** (o framework equivalente, según la implementación)
- **MySQL/PostgreSQL** para la base de datos
- **Docker** (si se configuró)

## Requisitos previos

- PHP (7.4 o superior)
- Composer
- MySQL o PostgreSQL
- (Opcional) Docker y Docker Compose

## Instalación

1. Clona el repositorio:
   git clone https://github.com/tu-usuario/locations-backend.git
   cd locations-backend

2. Instala las dependencias:
    composer install

3. Crea un archivo .env basado en el ejemplo .env.example:
    APP_KEY=secret123

4. Genera la clave de la aplicación:
    php artisan key:generate

5. Ejecución del proyecto
    Para iniciar el servidor local:
    php artisan serve

6. El backend estará disponible en http://127.0.0.1:8000.
    API Endpoints
    GET /api/locations
    Obtiene la lista de todas las ubicaciones.

    POST /api/locations
    Crea una nueva ubicación.

    GET /api/locations/{id}
    Obtiene los detalles de una ubicación específica.

    PUT /api/locations/{id}
    Actualiza los datos de una ubicación.

    DELETE /api/locations/{id}
    Elimina una ubicación.

7. Pruebas
    Ejecuta las pruebas unitarias:
    php artisan test

8. Deploy
    Configura un servidor con PHP 7.4 o superior 
    Sube los archivos al servidor y configura .env con los datos del entorno de producción.

9. Contacto
    Si tienes preguntas o sugerencias, por favor abre un issue en el repositorio.