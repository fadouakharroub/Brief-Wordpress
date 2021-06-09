<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W1e+RUYxPVbJZV8jWMhJQyG++7tmBfutIPfu555PSauGK0Uua0ZT4NJIyA29OQUyWzqedgAarEMVLCWxxy7GDg==');
define('SECURE_AUTH_KEY',  'YPgHdbTCzA0cuVyCBpCQb+XWERA6L3mODCLn0eyKzZaQRn19coNXtvLt5Qm9BklTX5Arhb72vV2Ujt6wJVSe9A==');
define('LOGGED_IN_KEY',    'fjuXpKMb9/Ge1HiKmte/ciF5lwiWWQnV2QNp+Eq18GQD7pb62ST4l8pJezogN+4GVef/Y4gxTMheLLiXsg/eUQ==');
define('NONCE_KEY',        'tJzlqbE6h4K6A5PXnRkTKN3ejef+YJ4Gi+AxQ4lRd4oilSfAQ2zlGAom4m6ZWYDnXGhcqM16Fc9fE8d1R6pPbw==');
define('AUTH_SALT',        'WjkyeP7+Q91S8rklFskNJSiPMJae13nNrWBM+DCPuoKMy05//IgnyDBVO/M9qh23P77EAq+ptq+tCcmkvBM9wA==');
define('SECURE_AUTH_SALT', '5BCB0wbLGp/SgEdugeyFHtrwgOyvkRHjNvN59smQlTjy6M0m1MSc5BdY7yb8aM8JjHv8cfer6MRSkdu6g5PJPw==');
define('LOGGED_IN_SALT',   'VA9Nn2L0T3E0hBUi3j4yS4z8nhpx/6Y+bP8twc0lezSxD+3m2hxdukPsWWOInNaNE+BDhQMoGXYL5W6qk/ux0g==');
define('NONCE_SALT',       'DlsTWyp6uSoWmzy2ArxVw8FhJL9cOGHvSHiy0rpyrDjyjsqi7YZhbPMx3gS1I9RMBECfbSKLnCIPjZFyOdP/OQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
