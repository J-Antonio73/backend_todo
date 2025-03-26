# TODO API

Api para la aplicación TODO.

## Caracteristicas

-   CRUD de tareas
-   Ordenamiento de las tareas mostradas
-   Visualización de tareas completadas

## Tecnologías utilizadas

Este proyecto se desarrolló con las siguientes caracteristicas:

-   Laravel ^12
-   PHP ^8.2
-   mysql

## Instalación y uso

Esa aplicación requiere Laravel v12+ y PHP 8.2 para ejecutarse correctamente.

1.- Clonar el repositorio en C:\xampp\htdocs

```sh
git clone https://github.com/J-Antonio73/backend_todo.git
```

2.- Instalar dependencias

```sh
composer install
```

3.- Realizar las migraciones

```sh
php artisan migrate
```

3.1.- En caso que hay algún error porque no existe la base de datos, es necesario crearla

```sh
CREATE DATABASE backend_db_todo;
```

4.- Realizar las seeders

```sh
php artisan db:seed
```

## Iniciar ambiente de desarrollo

Sigue estos comandos para ejecutar esta aplicación de forma local
--nota: Esta aplicación iniciará en http://127.0.0.1:8000

```sh
php artisan serve
```

# Endpoints

Endpoints disponibles

● POST /api/task
● GET /api/tasks
● GET /api/tasks/completed
● GET /api/task/{id}
● PUT /api/task/{id}
● PATCH /api/task/{id}
● DELETE /api/task/{id}

## Explicación de cada endpoint

● POST /api/task - Descripción: Añade una nueva tarea a la base de datos - Parametros:

```json
{
    "title": "",
    "description": "",
    "limit_date": ""
}
```

● GET /api/tasks - Descripción: Lista todas las tareas en la base de datos

● GET /api/tasks/completed - Descripción: Lista todas las tareas completadas en la base de datos

● GET /api/task/{id} - Descripción: Muestra una tarea en especifico - Parametros: {id} = id de la tarea

● PUT /api/task/{id} - Descripción: Actualiza una tarea a la base de datos - Parametros: {id} = Id de la tarea a modificar

```json
{
    "title": "",
    "description": "",
    "limit_date": ""
}
```

● PATCH /api/task/{id} - Descripción: Actualiza el estado de la tarea a Completada - Parametros: {id} = Id de la tarea a modificar

```json
{
    "completed": ""
}
```

● DELETE /api/task/{id} - Descripción: Elimina una tarea de la base de datos - Parametros: {id} = Id de la tarea a eliminar

# Enlace de produccion

Aplicación en Vercel

-   [Proximamente]()
