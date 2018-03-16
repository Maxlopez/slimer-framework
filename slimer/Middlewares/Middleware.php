<?php
namespace Slimer\Middlewares;

use Slimer\Core\Traits\MainTrait;

class Middleware {

	use MainTrait;

	protected $container;

	public function __construct(){
		global $container;
		$this->container = $container;
	}

}

