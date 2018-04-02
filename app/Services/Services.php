<?php
/*
|---------------------------------------------------------------------------------------------------
| Services
|---------------------------------------------------------------------------------------------------
*/
$container['functions'] = function( $container ){
  return new Slimer\Functions\SlimerFunctions();
};

//How to use
// $functions = $app->getContainer()->get( 'functions' );
// $random = $functions::random_string( 5, 'numbers' );
// d($random);


/*
|---------------------------------------------------------------------------------------------------
| DB using Eloquent
|---------------------------------------------------------------------------------------------------
*/
// $container['db'] = function( $container ){
//   $capsule = $container->get( 'eloquent' );
//   if( ! $capsule ){
//     return null;
//   }
//   $settings = $container->get( 'settings' );
//   $connections = $settings['app']['connections'];
//
//   //Add connections
//   $capsule->addConnection( $connections['mysql'] );
//   //$capsule->addConnection( $connections['pgsql'] );//PostgreSQL
//   //$capsule->addConnection( $connections['sqlsrv'] );//SQL Server
//   //$capsule->addConnection( $connections['sqlite'] );//SQLite
//
//   return $capsule;
// };
