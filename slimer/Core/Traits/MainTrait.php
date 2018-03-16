<?php

namespace Slimer\Core\Traits;

trait MainTrait {

	/*
	|-----------------------------------------------------------------------------------
	| Get a container property
	|-----------------------------------------------------------------------------------
	*/
	public function __get( $property ){
		if( $this->container->has( $property ) ){
			return $this->container->get( $property );
		}
	}

}

