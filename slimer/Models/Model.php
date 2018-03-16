<?php
namespace Slimer\Models;

use Slimer\Core\Traits\MainTrait;

class Model {

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

}