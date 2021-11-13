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
define('AUTH_KEY',         'Pqo65tCd1ZzWVwRXsldx+TeGSk6Tq+N7TyuWs5ehagzW/nHCDSurB2VMw9lxLBcNUBGIapdb68JGoGKyW8fj5g==');
define('SECURE_AUTH_KEY',  'ChQvN/w6XrVKIosB9LArMA8WqMDaRKxMUS/eyogDrXQbJBsqb8SvA5Qpg8EC+vLNYeIeEmIJ6lYPiuuhPYAQ2Q==');
define('LOGGED_IN_KEY',    'wK/X3II0mZOPfvPfYPje79WnB6NHd3VvsJB2T0bW747K7bXtVOYulluhgeaXBtoNU8laOV3TZ5IeobRJ45igZw==');
define('NONCE_KEY',        'eMgTgFtXr/xuTOWdKLZlSoX6CJoH6HiPnig0raKEp98b86QEel9lLeII8sQcGl19VQquAWMAhLtfRCPM+9FfVQ==');
define('AUTH_SALT',        '/sgUL5B8po1L9Durnmyd7gmY7lFHap/aF1TSldtckQzJpDhg5YNTlUTn1BkodxvURQFrhAFpGuKVTHuoxR8bdA==');
define('SECURE_AUTH_SALT', 'IzudzrZaPzmeTIuC2Wmnbf0kbjbBAh3cG889NhAdFuTCpgx07b+HBxFlYC8d9znJiBSGnaM0TgTrOpvx3kCscw==');
define('LOGGED_IN_SALT',   '8tNEP1LuG5Qs8swuaVY2S5CtAOo048yA1GsXzavxDrSqIAAKXonuDu9q8mwM050bWszvoUQz0LQwFFm8ORILwQ==');
define('NONCE_SALT',       'RB0TmRFBGPS5s91xrQngqSDHez6FDKZRNjt9VBlgIvc3EIH2n42La0fffnnZONDYC7NsHK39Smkdm75HKkTLtA==');

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
