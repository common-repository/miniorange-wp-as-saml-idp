<?php
/**
 * This file contains the `PasswordMismatchException` class that defines
 * an exception when the password field and the confirm password field
 * did not match at the time of user registration.
 *
 * @package miniorange-wp-as-saml-idp\exception
 */

namespace IDP\Exception;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use IDP\Helper\Constants\MoIDPMessages;

/**
 * Exception denotes that the password field and the confirm password
 * field did not match at the time of user registration.
 */
class PasswordMismatchException extends \Exception {

	/**
	 * Constructor function, which defines the `$code` and `$message` for
	 * the exception, and makes a call to the parent (`Exception`) constructor.
	 */
	public function __construct() {
		$message = MoIDPMessages::show_message( 'PASS_MISMATCH' );
		$code    = 122;
		parent::__construct( $message, $code, null );
	}

	/**
	 * Returns the string representation of the exception,
	 * with exception code and the error message.
	 *
	 * @return string
	 */
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}
