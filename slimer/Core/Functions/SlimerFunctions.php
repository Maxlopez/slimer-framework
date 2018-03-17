<?php
namespace Slimer\Functions;

class SlimerFunctions {
	/*
	|---------------------------------------------------------------------------------------------------
	| Check if a string starts with a specific character
	|---------------------------------------------------------------------------------------------------
	*/
	public static function starts_with( $str, $full_string, $case_sensitive = false ){
		if( strlen( $str ) == 0 || strlen( $full_string ) == 0 ){
			return false;
		}
		return substr_compare( $full_string, $str, 0, strlen( $str ), ! $case_sensitive ) === 0;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Check if a string ends with a specific character
	|---------------------------------------------------------------------------------------------------
	*/
	public static function ends_with( $str, $full_string, $case_sensitive = false ){
		$offset = strlen( $full_string ) - strlen( $str );
		if( strlen( $str ) == 0 || strlen( $full_string ) == 0 || $offset >= strlen( $full_string ) ){
			return false;
		}
		return substr_compare( $full_string, $str, $offset, strlen( $str ), ! $case_sensitive ) === 0;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Sort an array
	|---------------------------------------------------------------------------------------------------
	*/
	public static function sort( &$array = array(), $sort = 'asc' ){
		if( strtolower( $sort ) == 'desc' ){
			krsort( $array );
		} else {
			ksort( $array );
		}
		return $array;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Check if a variable is empty
	|---------------------------------------------------------------------------------------------------
	*/
	public static function is_empty( $value = '' ){
		if( is_array( $value ) ){
			$value = array_filter( $value );
			if( empty( $value ) ){
				return true;
			}
		} else if( empty( $value ) ){
			return true;
		}
		return false;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Filtra un array eliminando todo lo igual a false pero conserva el número 0
	|---------------------------------------------------------------------------------------------------
	*/
	public static function array_filter( $array = array() ){
		if( ! is_array( $array ) ){
			return array();
		}
		return array_filter( $array, function( $val ){
			return ( $val || is_numeric( $val ) );
		});
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Random string
	|---------------------------------------------------------------------------------------------------
	*/
	public static function random_string( $length = 10, $type = 'mixed' ){
	  $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	  $numbers = '0123456789';
	  $str = $letters.$numbers;
	  if( $type == 'letters' ){
	    $str = $letters;
	  } elseif( $type == 'numbers' ){
	    $str = $numbers;
	  }
	  return substr( str_shuffle( $str ), 0, $length );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Obtiene la extensión de un archivo
	|---------------------------------------------------------------------------------------------------
	*/
	public static function get_file_extension( $file_path = '' ){
		$file_path = strtolower( $file_path );
		$file_path = parse_url( $file_path, PHP_URL_PATH );
		return pathinfo( $file_path, PATHINFO_EXTENSION );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Check localhost
	|---------------------------------------------------------------------------------------------------
	*/
	public static function is_localhost() {
		return in_array( strtolower( $_SERVER['SERVER_NAME'] ), array( 'localhost', '127.0.0.1' ) );
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Convert a string to CamelCase
	|---------------------------------------------------------------------------------------------------
	*/
	public static function string_to_camelcase( $string, $capitalize = true ){
  	$normalize_string = str_replace( array( '-', '_' ), ' ', $string );
  	$ucwords = ucwords( $normalize_string, ' ' );
  	$camelcase_string = str_replace(' ', '', $ucwords);
    if( ! $capitalize ) {
    	$camelcase_string = lcfirst( $camelcase_string );
    }
    return $camelcase_string;
  }

  /*
	|---------------------------------------------------------------------------------------------------
	| List the files in a directory
	|---------------------------------------------------------------------------------------------------
	*/
	public static function list_dir( $root_dir, $subdirs = true, $allow = '*', $exclude = array(), &$all_files = array(), $level = 1 ){
		$files = @scandir( $root_dir );
		$exclude = array_unique( array_merge( (array) $exclude, array( '.', '..' ) ) );
		if( ! is_array( $files ) ){
			return $all_files;
		}
		foreach ( $files as $key => $file ) {
			$extension = self::get_file_extension( $file );
			$path = $root_dir.'/'.$file;
			//If the file name is on the exclude array
			if( in_array( $file, $exclude ) ){
				continue;
			}
			if( is_file( $path ) ){
				//If the current extension is on the exclude extensions
				if( in_array( '.'.$extension, $exclude ) ){
					continue;
				}
				//If the current extension is not in the list of allowed extensions
				if( $allow != '*' && is_array( $allow ) && ! in_array( '.'.$extension, $allow ) ){
					continue;
				}

				if( file_exists( $path ) ){
					$all_files['files'][] = $path;

					$namespace_key = str_replace( self::dirname_r( $path, $level ), '', $root_dir );
					$namespace_key = trim( $namespace_key, '/ \\');
					$namespace_key = str_replace( array(' ', '/', '\\' ), array( '', '>', '>' ), $namespace_key );
					$file_name = pathinfo( $file, PATHINFO_FILENAME );
					if( empty( $namespace_key ) ){
						$namespace_key = '>';
					}
					$all_files['folders'][$namespace_key][$file_name] = $path;
				}
			} else if( $subdirs && is_dir( $path ) && file_exists( $path ) ){
				$level += 1;
				$all_files = self::list_dir( $path, $subdirs, $allow, $exclude, $all_files, $level );
				$level--;
			}
		}
		return $all_files;
	}

	/*
	|---------------------------------------------------------------------------------------------------
	| Dirname PHP 7 update
	|---------------------------------------------------------------------------------------------------
	*/
	public static function dirname_r( $path, $count = 1 ){
    if ( $count > 1 ){
      return dirname(self::dirname_r( $path, --$count) );
    } else {
      return dirname( $path );
    }
	}

	/*
	|-----------------------------------------------------------------------------------
	| Appends a trailing slash.
	|-----------------------------------------------------------------------------------
	*/
	public static function add_slash( $string ) {
		return self::remove_slash( $string ) . '/';
	}

	/*
	|-----------------------------------------------------------------------------------
	| Removes trailing forward slashes and backslashes if they exist.
	|-----------------------------------------------------------------------------------
	*/
	public static function remove_slash( $string ) {
		return rtrim( $string, '/\\' );
	}




}