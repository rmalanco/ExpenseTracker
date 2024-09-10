<?php

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

// Aquí se definen las constantes de la aplicación
// ------------------------------------------------------------------------------------------------------------------------

// Constantes de la base de datos
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_CHARSET', $_ENV['DB_CHARSET']);


// Constantes de errores de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
define('ERROR_DB_CONNECTION', 'Error al conectar con la base de datos: ');
define('ERROR_CONTROLLER_NOT_FOUND', 'Controlador no encontrado');
define('ERROR_ACTION_NOT_FOUND', 'Acción no encontrada');


// Constantes de rutas de la aplicación
// ------------------------------------------------------------------------------------------------------------------------
define('BASE_URL', 'http://localhost/proyecto-db-php/');


// Constantes de la aplicación
// ------------------------------------------------------------------------------------------------------------------------