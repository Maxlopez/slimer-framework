<?php
/*
|---------------------------------------------------------------------------------------------------
| PHP_SAPI
|---------------------------------------------------------------------------------------------------
*/
if (PHP_SAPI == 'cli-server') {
  // To help the built-in PHP dev server, check if the request was actually for
  // something which should probably be served as a static file
  $url  = parse_url($_SERVER['REQUEST_URI']);
  $file = __DIR__ . $url['path'];
  if(is_file($file)) {
    return false;
  }
}


/*
|---------------------------------------------------------------------------------------------------
| Autoloader
|---------------------------------------------------------------------------------------------------
*/
require __DIR__ . '/../../vendor/autoload.php';

/*
|---------------------------------------------------------------------------------------------------
| Constants
|---------------------------------------------------------------------------------------------------
*/
require __DIR__ . '/constants.php';


/*
|---------------------------------------------------------------------------------------------------
| Create The Application
|---------------------------------------------------------------------------------------------------
*/
session_start();
$settings = require_once SLIMER_PATH . '/settings.php';
$app_settings = require_once APP_PATH . '/settings.php';
$settings['settings']['app'] = isset( $app_settings['app'] ) ? $app_settings['app'] : array();
$app = new \Slim\App( $settings );
$container = $app->getContainer();


/*
|---------------------------------------------------------------------------------------------------
| Core and App files
|---------------------------------------------------------------------------------------------------
*/
require_once SLIMER_PATH . '/Core/dependencies.php';
require_once SLIMER_PATH . '/Core/globals.php';
require_once APP_PATH . '/routes.php';
require_once APP_PATH . '/globals.php';


/*
|---------------------------------------------------------------------------------------------------
| Return The Application
|---------------------------------------------------------------------------------------------------
*/
return $app;