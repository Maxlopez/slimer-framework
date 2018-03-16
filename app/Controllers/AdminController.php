<?php
namespace App\Controllers;

class AdminController extends BaseController {

	/*
	|---------------------------------------------------------------------------------------------------
	| Admin dashboard
	|---------------------------------------------------------------------------------------------------
	*/
	public function dashboard( $request, $response, $args ){
		$data = array(
			'app' => array(
				'name' => 'Slimer Framework',
				'version' => '1.0.0'
			),
		);
		return $this->view( 'admin/main.twig', $data );
	}



}
