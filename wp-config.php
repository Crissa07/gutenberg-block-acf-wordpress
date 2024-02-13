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
define( 'DB_NAME', 'projeqii_wp235' );

/** Database username */
define( 'DB_USER', 'projeqii_wp235' );

/** Database password */
define( 'DB_PASSWORD', '5pB!69.MS7' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'yl8q8yzeee3hpharjgiqrkg2sdj9gucodoaptntir9qplpeabw10gz5a3cw0asre' );
define( 'SECURE_AUTH_KEY',  'tvepucdxfpmmooe7mod7mgwynxalbepguqsradqurku0xk0nldc3waxr1mmsxe10' );
define( 'LOGGED_IN_KEY',    'pfsyixw7dth8vljw5w0op6egnobsrakozi72baybwxwb7d3x8hlp8tz9qurzsw5x' );
define( 'NONCE_KEY',        'hwwv76mb2aucltrlfjqfkmaqeghk1rbleamudzvrnxh7tq2w9t8qiqi7l5nqahbm' );
define( 'AUTH_SALT',        'dbsxufks4ggkkxf9iyaezhrhbdwfocjueearxqphpisjcnolvva8ajf4fwsaswbv' );
define( 'SECURE_AUTH_SALT', 'xzxwwa362keghjpfqqgazzovyykszcxqg7q7mh5s9w9a7pihtseutr1rhysau4c7' );
define( 'LOGGED_IN_SALT',   'vufdxshnic7ycmo4c6ujqumjjv1fuehpkwolkrmpe1gq3dujdxcjixtipmllb518' );
define( 'NONCE_SALT',       'lfn3k7mtbkwpio3osihbfrmvglpb7xtruir3o6sevply7yviepdn5nfn7mz7aivw' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcf_';

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
