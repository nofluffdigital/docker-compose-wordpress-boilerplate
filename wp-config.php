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


define('WP_HOME',getenv('WORDPRESS_DB_HOME_URL')); 
define('WP_SITEURL',getenv('WORDPRESS_DB_SITE_URL'));

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME'));

/** MySQL database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER'));

/** MySQL database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST'));

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8cf217be5bf1dae61b01bedce6d5b4285aaba1af');
define( 'SECURE_AUTH_KEY',  '122d50ee8bb9ad7189c2ed018ccca5e82f1385f7');
define( 'LOGGED_IN_KEY',    'bdbb2cdf78136365cb1808d12a8a7b297a2895b6');
define( 'NONCE_KEY',        '2a5af1cd64654f40e411b4528f500a5762537a1c');
define( 'AUTH_SALT',        '998175793ae6e2048121817c42fd58a53e4d915a');
define( 'SECURE_AUTH_SALT', '45929b8312791362a8805257253029526a2a7d5d');
define( 'LOGGED_IN_SALT',   '4d8b88698f56dff92dd43230e6b53a16b697d3cd');
define( 'NONCE_SALT',       '34d7418c957fd9cc496b19ce00ccee26cb0fe6b7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('WORDPRESS_DB_PREFIX');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
