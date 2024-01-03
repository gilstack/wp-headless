<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'zHFKSbVig78lh7LK1HjMAi4uNmXg7HVwpTFi0L44vA4Y4RdyQhpf5awAurTTrO8v' );
define( 'SECURE_AUTH_KEY',  'YXl7ebVeaZfTpLp3VGbctx98PddoA56sEVdzOoqH1tjv4TX18yIa59ZSyEh6tiWF' );
define( 'LOGGED_IN_KEY',    'SVykbPqNdn6TeUkmE0cI2PO3cSYfObyMhbwA0ZIotEeUoGGwoeDttjsuGWKDwcAN' );
define( 'NONCE_KEY',        'SoMLlpsZpK7GlIWxIQSl1Ifx6X5QpT3iaUqaFpAsWTI2ZL2qttvcCzY0zw6zDioN' );
define( 'AUTH_SALT',        '6FpGiwoEZHSER3b6Wnpy1JN28ZDua3bSV3LlXoNnqEQ9vcv08EUg0mjj09K2yrTb' );
define( 'SECURE_AUTH_SALT', 'or4PrARXJCPoH39vv9CSsn85FrxRiNlCVBH5rcBEUsxXgVCeAngKqfIxt3gRwKzt' );
define( 'LOGGED_IN_SALT',   'Pw5fbdH6GalxBU1qTw3FuvNyRqzzel0hA9sRvLaopIk4GIeNNvd9kATaNGhQfXMh' );
define( 'NONCE_SALT',       'LSyNid2Bvd0cPhDktpjoRCTIKA7xq0ExQpuVSmP6XFrjMKSh1ex8PI5t2ebtWJa8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
