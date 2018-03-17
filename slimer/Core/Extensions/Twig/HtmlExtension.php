<?php

namespace Slimer\Core\Extensions\Twig;

use Slimer\Functions\SlimerFunctions;

class HtmlExtension extends \Twig_Extension {
  private $container;
  private $router;
  private $uri;
  private $settings;

  public function __construct( $container ){
    $this->container = $container;
    $this->router = $this->container->get('router');
    $this->uri = $this->container->get('request')->getUri();
    $this->settings = $this->container->get('settings');
  }

  public function getName(){
    return 'html_extension';
  }

  public function get_public_dir(){
    return isset( $this->settings['app']['public_dir'] ) ? $this->settings['app']['public_dir'] : 'public';
  }

  public function getFunctions(){
    return array(
      new \Twig_SimpleFunction( 'style', array( $this, 'render_style'), array('is_safe' => array( 'html' ) ) ),
      new \Twig_SimpleFunction( 'script', array( $this, 'render_script'), array('is_safe' => array( 'html' ) ) ),
    );
  }

  public function get_source_url( $url = '' ) {
    $base_url = SlimerFunctions::add_slash( $this->uri->getBaseUrl() ) . $this->get_public_dir() .'/';
    if( ! SlimerFunctions::starts_with( 'http', $url ) ){
      $url = $base_url.$url;
    }
    return $url;
  }

  public function render_style( $href, $attrs = array() ) {
    $href = $this->get_source_url( $href );
    $source_attrs = array(
      'rel' => isset( $attrs['rel'] ) ? $attrs['rel'] : 'stylesheet',
      'type' => isset( $attrs['type'] ) ? $attrs['type'] : 'text/css',
      'href' => $href,
      'media' => isset( $attrs['media'] ) ? $attrs['media'] : 'all',
    );
    $source = '<link';
    foreach( $source_attrs as $key => $value ){
      $source .= ' '.$key.'="'.$value.'"';
      $source_attrs[$key] = $value;
    }
    $source .= '>';
    return $source;
  }

  public function render_script( $src, $attrs = array() ) {
    $src = $this->get_source_url( $src );
    $source_attrs = array(
      'type' => isset( $attrs['type'] ) ? $attrs['type'] : 'text/javascript',
      'src' => $src,
    );
    $source = '<script';
    foreach( $source_attrs as $key => $value ){
      $source .= ' '.$key.'="'.$value.'"';
      $source_attrs[$key] = $value;
    }
    $source .= '></script>';
    return $source;
  }


}