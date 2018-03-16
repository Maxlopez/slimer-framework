<?php
/*
|---------------------------------------------------------------------------------------------------
| Routes
|---------------------------------------------------------------------------------------------------
*/
$app->get( '/', 'PageController:home' )->setName( 'home' );


//Route middleware
$app->get( '/admin', 'AdminController:dashboard' )->add( new App\Middlewares\AdminMiddleware() );


//Route groups
//https://www.slimframework.com/docs/v3/objects/router.html#route-groups
$app->group( '/user/{id:[0-9]+}', function(){

	$this->map(['GET', 'DELETE', 'PATCH', 'PUT'], '', function ( $request, $response, $args ) {
		$home_url = $request->getUri()->getBaseurl();
		$back = '<br><a href="'.$home_url.'">Home page</a>';

		return 'User id: '.$args['id'].$back;
  })->setName('user');
});

//Route redirection
$app->get( '/redirect', function( $request, $response, $args ){
	//Sample log message (Monolog)
	$this->get( 'logger' )->info( 'Slimer Framework' );

	$this->flash->addMessage( 'success', 'Redirection success' );
	return $response->withRedirect( $this->get( 'router' )->pathFor( 'home' ) );
});
