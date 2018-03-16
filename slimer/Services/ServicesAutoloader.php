<?php
use Slimer\Functions\SlimerFunctions;

/*
|---------------------------------------------------------------------------------------------------
| Autoload App Services
|---------------------------------------------------------------------------------------------------
*/
//Load Controllers
$files = SlimerFunctions::list_dir( APP_PATH.'/Controllers', true, array('.php') );
if( ! empty( $files['folders'] ) ){
	foreach( $files['folders'] as $namespace_key => $files ){
		foreach( $files as $service => $file ){
			if( in_array( $service, array( 'BaseController' ) ) ){
				continue;
			}
			$class = "App\\Controllers\\";
			$namespace = $namespace_key == '>' ? '' : str_replace( '>', '\\', $namespace_key ).'\\';
			$class .= $namespace.$service;

			$container[$service] = function( $container ) use ($class){
		  	return new $class();
			};
		}
	}
}


//Load Services
$files = SlimerFunctions::list_dir( APP_PATH.'/Services', true, array('.php') );
if( ! empty( $files['files'] ) ){
	foreach( $files['files'] as $key => $file ){
		if( is_file( $file ) && is_readable( $file ) ){
			require_once $file;
		}
	}
}