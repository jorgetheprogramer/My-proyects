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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Ap<RWu-e8jP.7fA9Hhfvm;9d-M58-2TQL)kNYZ;@9FezVLRhw=jEjUTqpW&o=:[;' );
define( 'SECURE_AUTH_KEY',   'R@uh^tI`e6qMk&PDi:<(b0R}:mR@YirwoXT~DlTt;pmupW^=!cg?FedUg;?#CGSl' );
define( 'LOGGED_IN_KEY',     '#*`e%h~.6g;#wtzd:OjdvdCI1J48<=fQq&b]]0@d%?H-(1X[yUF?Y0Eb+{]&-C;{' );
define( 'NONCE_KEY',         '}`S3i_p_2Ux1w*_:rDZr&;!GXZuvG@E<+63]UwQZ;6qAP,^.Pj}v`(+fN?v5p9TZ' );
define( 'AUTH_SALT',         'soPYnCIo~*$.U[uMz&x@v5X27}(zQ&G[&~P<(s;j Ck,5-lwX^,eMB&FRIeE.io]' );
define( 'SECURE_AUTH_SALT',  '6NW,iIuu8R7iK9<oi83cgA8=FYhk1U3]*Jx|^U6Pi7vZ_jL:%`]=Ij~8PjKjiL<[' );
define( 'LOGGED_IN_SALT',    'c)4s1c0^)FK+5-`),=VW@xi4uB?8F!x8en;QBq`D!KwiYjY$4W8_Lk[S:?Yv%./[' );
define( 'NONCE_SALT',        '^mvFM&Fer,:0lI6A?:/z}8~r#kJ. u`DaoRw&#W_?`AKi@PVNP%1%e85~X-1k-D0' );
define( 'WP_CACHE_KEY_SALT', '2~5x}>8N%Ds0M#1@#E)E R7Xl]/gkju[BwuXXD[U&ouNY</ E`_8yPe)5(Q.Ns,W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
