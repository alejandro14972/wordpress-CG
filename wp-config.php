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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'colegiobd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5)Jtwf12JnruIX-<El7-0Q([Begki&EH~<w`&l~0GlEkD$]rKGF5oKMl%u$D<9lb' );
define( 'SECURE_AUTH_KEY',  '5U!(gc2dn=.dG[|[vI}xsK/iX$ZuPs)&&gH5)XSS.N=x|#c}lMoWukX$n}/s>?q4' );
define( 'LOGGED_IN_KEY',    '*Tw5O[6YS ZnUe,#yU~v~8z`b{e/YsSrVo6DijDxC&YV4wD8rh^+J1^)Bx*RTg#Z' );
define( 'NONCE_KEY',        '21V9wYM,*Llkx|{5;/ T]N4l4a4o7SzWnOZmLq.zT=:#1B@&+Y8&^Dd|mO<eGe^F' );
define( 'AUTH_SALT',        '6ZG)uD[@Q=N&)e1V%h(n5I+LD@:!^)~UKz!:pcO|699Wi5f9tO$BaTl1TA~:tB_-' );
define( 'SECURE_AUTH_SALT', 'Kngh9?*Asr}]mx~d!]rG`kxYOR4waogIS(=l_E6C4_XA[!#/AQ_V0]k/E|1}xFE8' );
define( 'LOGGED_IN_SALT',   '9(36UB<q*u]5AVR>(7#56yqekagsoOiEs4NSBYGlg=21dVHEbQtM/o(J9Z1.93;k' );
define( 'NONCE_SALT',       'ZKPLGxnx||?#zDH_oS,cESUcK|28%}3T{dh=f,:dquEKeL?j8`yp}o(R9GaRtOlX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cola_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
