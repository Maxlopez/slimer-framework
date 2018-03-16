<?php

namespace App\Middlewares;

class AdminMiddleware extends BaseMiddleware {

	public function __invoke(  $request, $response, $next  ){
		$logged_in = false;
		if( ! $logged_in ){
			$this->flash->addMessage( "error", "You don't have permission to access the admin page" );
			return $response->withRedirect( $this->router->pathFor( 'home' ) );
		}

		$response = $next( $request, $response );
		return $response;
	}
}