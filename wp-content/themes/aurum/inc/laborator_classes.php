<?php
/**
 * Anonymous Functions
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

class Aurum_WP_Hook_Value {
	
	/**
	 * Return value
	 */
	public $value = '';
	
	/**
	 * Add array value
	 */
	public $array_value = '';
	
	/**
	 * Set array key for the value
	 */
	public $array_key = '';
	
	/**
	 * Call user function
	 */
	public $function_name = '';
	
	/**
	 * User function arguments
	 */
	public $function_args = array();
	
	/**
	 * Constructor
	 */
	public function __construct( $value = '' ) {
		
		if ( $value ) {
			$this->value = $value;
		}
	}
	
	/**
	 * Return value function for the hooks
	 */
	public function returnValue() {
		return $this->value;
	}
	
	/**
	 * Merge array value
	 */
	public function mergeArrayValue( $array ) {
		
		if ( ! empty( $this->array_value ) ) {
			if ( $this->array_key ) {
				$array[ $this->array_key ] = $this->array_value;
			} else {
				$array[] = $this->array_value;
			}
		}
		
		return $array;
	}
	
	/**
	 * Execute user function
	 */
	public function callUserFunction() {
		
		if ( ! empty( $this->function_name ) ) {
			call_user_func_array( $this->function_name, $this->function_args );
		}
	}
}
