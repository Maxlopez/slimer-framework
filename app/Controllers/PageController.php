<?php
namespace App\Controllers;

class PageController extends BaseController {

	/*
	|---------------------------------------------------------------------------------------------------
	| Home
	|---------------------------------------------------------------------------------------------------
	*/
	public function home( $request, $response, $args ){
		$data = array(
			'app' => array(
				'name' => 'Slimer Framework',
				'version' => '1.0.0',
				'features' => array( 'Easy', 'Flexible', 'Powerful' )
			),
		);

		return $this->view( 'home/main.twig', $data );

		//Or use helper function
		//return view( 'home/main.twig', $data );
	}



}
