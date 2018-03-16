<?php
namespace Slimer\Controllers;

use Slimer\Core\Traits\MainTrait;

class Controller {

	use MainTrait;

	protected $container;

	/*
	|-----------------------------------------------------------------------------------
	| Constructor
	|-----------------------------------------------------------------------------------
	*/
	public function __construct(){
		global $container;
		$this->container = $container;
	}

	/*
	|-----------------------------------------------------------------------------------
	| View
	|-----------------------------------------------------------------------------------
	*/
	protected function view( $path, $data = array() ){
		return $this->view->render( $this->response, $path, $data );
	}

}
