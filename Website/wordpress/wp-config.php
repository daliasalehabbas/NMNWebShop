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
define( 'DB_NAME', 'test_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u-GnZzS83-Cw|[@iq.4|+NixucTu<DxxPT O;D3HG<?&>#}5^he-@@GHJ/XiNH{V' );
define( 'SECURE_AUTH_KEY',  'K@:?oxKkac(1+n}K K}xrZpI94xt+pLNjn;/2s]81D-TF)i5l5a#vSF,1H}8jp|N' );
define( 'LOGGED_IN_KEY',    '.Uu+lD.t$[V(7Psp12V#N34xsw|/tr8qxZ~sJ0xt[#W&A5mgI#McglQ;D}Rq!~GM' );
define( 'NONCE_KEY',        'EJ?/JlXs|+O#ii1eZp|)ICk6vn*IA{.t5Aq{Qf.aTOPP`D;L+p+WYc+]@v6Q7pHC' );
define( 'AUTH_SALT',        'v]RH.TX x4W?)q^ZR*c>V5q:L9G9;*qXnJbBEGzaS],-!~<,+&$55sI7KXU^clcN' );
define( 'SECURE_AUTH_SALT', 'fhX[al?sMJfQA|Av4]RJRIGeavn#MN*B._tWx1n;ZjP6r-Y[ZEg?emK@PDK#68Y;' );
define( 'LOGGED_IN_SALT',   'bgmw4McXRbZ6|gK*-Lo<w/)9%E7K^`&!_OWj]K+f5u~6Uh_g,>;Q($Cs:NBM8G`>' );
define( 'NONCE_SALT',       'HDRr-uE.vUF9&<Q[Skn~=JOtL|HQ<6q!i>W;@aSYNE$ohJ)4/p0ug>WNE9QMRefw' );

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
