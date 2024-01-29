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
define( 'AUTH_KEY',          '1sJl#F%vuQ%=Ic|MF$9xT=|0q%CsGRH-2uITg+nO]$b[Z)i0v~sZ<|,t85o~vj6?' );
define( 'SECURE_AUTH_KEY',   'zP(LOkhxaX :qUZBLONF/~ai#U4O 3kHGr]I;xb&`r+q!z|jeJ)Y-%;_vlGG6Vg{' );
define( 'LOGGED_IN_KEY',     'jlBhF:1O Q |b)s,oW.zo_4N[;:}.]Sy3r]m$y{P[rD3OO+_N6|AU<Z*L.]uA@;~' );
define( 'NONCE_KEY',         '8xN~&%`(,BxY.h3  P( plER+OSO+H+~:ln){54B+*<y},r>CWRWe~s4X{xBqPa(' );
define( 'AUTH_SALT',         'BYT/B5Q%aTug_PjrLvxl;;&:3uY)gH)!49ZB(ia3nGJ*z&R!r:Vg` crf-gtLgU]' );
define( 'SECURE_AUTH_SALT',  '!8G|n!DhM=9MFrbX4+A?j:/:Z2>YyEg8G8e[Xx>(VC}]{nNN2HF}dDPH)r@m8ORc' );
define( 'LOGGED_IN_SALT',    '@7$iAoueQbXh=.f}UfTO*Pnn*7/>RpD?YP(i~m40|ZX&+cK VR#O<z/n1i%o0T1^' );
define( 'NONCE_SALT',        'f5l:rx~+>MZ+FmXyCp{x[D$-3btBpYU=zVX| #P1Y}<JG:E%WdO=GBzt0E^S6_!x' );
define( 'WP_CACHE_KEY_SALT', '4`xzIkOAoAiRx!bz!18MCKDAnMfG!TiV.[a[5c4(]}SAMNW^|P?Nao8C6dYMle9l' );


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
