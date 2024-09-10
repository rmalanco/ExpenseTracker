# Expense Tracker

Expense Tracker es una aplicación web para gestionar y controlar tus gastos personales. Permite a los usuarios registrar, visualizar y analizar sus gastos de manera eficiente.

## Características

- Registro de usuarios y autenticación
- Añadir, editar y eliminar gastos
- Categorías de gastos personalizables
- Visualización de gastos en gráficos
- Informes detallados de gastos

## Tecnologías Utilizadas

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Base de Datos**: MySQL
- **Control de Versiones**: Git

## Instalación

Sigue estos pasos para instalar y configurar la aplicación en tu entorno local:

1. Clona el repositorio:

   ```bash
   git clone https://github.com/rmalanco/ExpenseTracker.git
   ```

2. Navega al directorio del proyecto:

   ```bash
   cd expense-tracker
   ```

3. Configura la base de datos:

   - Crea una base de datos en MySQL.
   - Importa el archivo `database.sql` que se encuentra en la carpeta `sql` para crear las tablas necesarias.

4. Configura el archivo `.env`:

   - Crea un archivo `.env` en la raíz del proyecto y añade las siguientes variables:

   ```env
    DB_CONNECTION=mysql
    DB_HOST='tu host de base de datos, por defecto es localhost'
    DB_PORT='tu puerto de base de datos, por defecto es 3306'
    DB_NAME=ExpenseTrackerDB
    DB_USER='tu usuario de base de datos, por defecto es root'
    DB_PASSWORD='tu contraseña de base de datos en caso de tener, si no, dejar vacío'
    DB_CHARSET=utf8mb4
   ```

5. Inicia el servidor:

   ```bash
   php -S localhost:8000 -t public
   ```

6. Abre tu navegador y navega a `http://localhost:8000`.

## Uso

1. Regístrate o inicia sesión con tu cuenta.
2. Añade tus gastos desde el panel de control.
3. Visualiza y analiza tus gastos en la sección de informes.

## Contribución

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios y haz commit (`git commit -am 'Añadir nueva característica'`).
4. Sube tus cambios a tu fork (`git push origin feature/nueva-caracteristica`).
5. Abre un Pull Request.

## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Consulta el archivo `LICENSE` para más detalles.

## Contacto

Si tienes alguna pregunta o sugerencia, no dudes en contactarnos a través de [rmalanco@rmalanco.com](mailto:rmalanco@rmalanco.com).
