<?php

/*
|---------------------------------------------------------------------------------------------------
| Views - Twig
|---------------------------------------------------------------------------------------------------
*/
$container['view'] = function( $container ){
  $settings = $container->get('settings');
  $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
  // Add extensions
  $view->addExtension( new Slim\Views\TwigExtension($container->get('router'), $container->get('request')->getUri()) );
  $view->addExtension( new Twig_Extension_Debug() );//For dump() function
  $view->addExtension( new Slimer\Core\Extensions\Twig\HtmlExtension( $container ) );

  return $view;
};

/*
|---------------------------------------------------------------------------------------------------
| Logs - Monolog
|---------------------------------------------------------------------------------------------------
*/
$container['logger'] = function( $container ) {
  $settings = $container->get('settings');
  $logger = new Monolog\Logger( $settings['logger']['name'] );
  $logger->pushProcessor(new Monolog\Processor\UidProcessor());
  $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
  return $logger;
};

/*
|---------------------------------------------------------------------------------------------------
| Flash Messages - Slim Flash
|---------------------------------------------------------------------------------------------------
*/
$container['flash'] = function( $c ) {
  return new \Slim\Flash\Messages();
};


/*
|---------------------------------------------------------------------------------------------------
| Session Helper
|---------------------------------------------------------------------------------------------------
*/
$container['session'] = function ( $container ) {
  return new \SlimSession\Helper;
};


/*
|---------------------------------------------------------------------------------------------------
| Database - Eloquent
|---------------------------------------------------------------------------------------------------
*/
$container['eloquent'] = function( $container ){
  if ( ! class_exists( '\Illuminate\Database\Capsule\Manager' ) ) {
    return null;
  }

  $capsule = new \Illuminate\Database\Capsule\Manager;
  $capsule->setAsGlobal();
  $capsule->bootEloquent();

  return $capsule;
};
