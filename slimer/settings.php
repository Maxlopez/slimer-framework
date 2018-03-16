<?php
return array(
  'settings' => array(
    'displayErrorDetails' => true, // set to false in production
    'addContentLengthHeader' => false, // Allow the web server to send the content-length header

    //Twig settings
    'view' => array(
      'template_path' => dirname( dirname(__FILE__) ) . '/app/Views',
      'twig' => array(
        'cache' => dirname( dirname(__FILE__) ) . '/cache/twig',
        'debug' => true,
        'auto_reload' => true,
      ),
    ),

    //Monolog settings
    'logger' => array(
      'name' => 'slimer-app',
      'path' => isset( $_ENV['docker'] ) ? 'php://stdout' : dirname( dirname(__FILE__) ) . '/logs/app.log',
      'level' => \Monolog\Logger::DEBUG,
    ),
  ),
);
