<?php
namespace Slimer\Models;

if ( class_exists( '\Illuminate\Database\Eloquent\Model' ) ) {
  class SlimerBaseModel extends \Illuminate\Database\Eloquent\Model {
  }
} else {
  class SlimerBaseModel {
  }
}

use Slimer\Core\Traits\MainTrait;

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
    $this->setup_db();
	}

  /*
  |---------------------------------------------------------------------------------------------------
  | Setup DB
  |---------------------------------------------------------------------------------------------------
  */
  public function setup_db(){
		if( in_array( 'db', $this->container->keys() ) ){
      $this->container->get( 'db' );
    }
	}

}
