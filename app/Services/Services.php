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