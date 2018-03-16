<?php
/*
|-----------------------------------------------------------------------------------
| Render View
|-----------------------------------------------------------------------------------
*/
function view( $path, $data = array() ){
  global $container;
  $container['view']->render( $container->get( 'response' ), $path, $data );
}
