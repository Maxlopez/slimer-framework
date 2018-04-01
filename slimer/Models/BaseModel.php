<?php
namespace Slimer\Models;

use Slimer\Core\Traits\MainTrait;

if ( class_exists( '\Illuminate\Database\Eloquent\Model' ) ) {
  class SlimerBaseModel extends \Illuminate\Database\Eloquent\Model { }
} else {
  class SlimerBaseModel { }
}

class BaseModel extends SlimerBaseModel {

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
