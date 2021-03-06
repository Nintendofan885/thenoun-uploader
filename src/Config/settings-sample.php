<?php
namespace Thenoun\Config;

/**
 * Rename this file to `settings.php`
 * and make sure it's not accessible
 * to the client
 */

if ( !defined( 'ROOT' ) ) {
	// Send 403 Forbidden response.
	header( $_SERVER["SERVER_PROTOCOL"] . " 403 Forbidden" );
	// Kill the script.
	exit;
}

define( 'OAUTH_MWURI', 'https://commons.wikimedia.org' );
define( 'OAUTH_CALLBACK_URL', '' );
define( 'OAUTH_KEY', '' );
define( 'OAUTH_SECRET', '' );
define( 'APP_NAME', 'The Noun Uploader' );
define( 'APP_DESCRIPTION', 'Icon uploader for Wikimedia Commons' );
define( 'APP_SLOGAN', 'Upload icons the Wikimedia Commons and improve this repository with millions of free-use images!' );
define( 'OAUTH_UA', APP_NAME );

// Define routes
define( 'ROUTES', [
	/**
	 * Home endpoints
	 */
	[
		'endpoint' => '/',
		'controller' => 'HomeController',
		'method' => 'index',
		'protected' => false,
	],
	[
		'endpoint' => '/test',
		'controller' => 'HomeController',
		'method' => 'test',
		'protected' => false,
	],
	[
		'endpoint' => '/upload',
		'controller' => 'HomeController',
		'method' => 'upload',
		'protected' => true,
	],
	/**
	 * Authentication endpoints
	 */
	[
		'endpoint' => '/login',
		'controller' => 'AuthController',
		'method' => 'login',
		'protected' => false,
	],
	[
		'endpoint' => '/oauth-callback',
		'controller' => 'AuthController',
		'method' => 'callback',
		'protected' => false,
	],
	[
		'endpoint' => '/logout',
		'controller' => 'AuthController',
		'method' => 'logout',
		'protected' => false,
	],
] );
