<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'Blog' );

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
define( 'AUTH_KEY',         'XY+4i!u>I!|PIhEf1m<Y1F)1Ox]-X?`y|~4;~2/HLjsCeKNPB?kZ4ys]9cK}[%FT' );
define( 'SECURE_AUTH_KEY',  'BMI3d17Lz;V)[{r_nF9Qw-6ePnfp@h6LN+Rz`Mk3m6SFlc7|jbvMi#rWBc2#=cAl' );
define( 'LOGGED_IN_KEY',    'TV-9.K1i}!sIlN61n%TvW+}8a}QCYfZ{PJ*qLy!w&u c!|w}[*^i/JGH8!Bs^U[Z' );
define( 'NONCE_KEY',        '<Xf@l{lA1&y2*E;7xe<$YT8hpd/RheHk:JS4]Hm/.+xFOPM0LMfq)$/+/*~TeXXd' );
define( 'AUTH_SALT',        'h@/e5nK&pj %^=<-7lZ~CV>IV)|^A[3Or3awetR1xrEQR%raA~a=8.Wi@/o-#e;w' );
define( 'SECURE_AUTH_SALT', 'M4dJEy94,>2I+2s7l`?8G^LbzqbC#20;v3qM+#N:FHlr-dY0CcDsv^&T4/)WF:VX' );
define( 'LOGGED_IN_SALT',   'z]sDuP,2|edN$u;:A NQ@fJ3%Qnia@pdh<5@MJ%j!FaxRLf^z],};}UV(vMA5N[+' );
define( 'NONCE_SALT',       'sxp1i/#mv84Im~Qy|DFx-n-))dl{VS`JxIC!,jj)ZT+_^-@]ZM.#:LfGDZkR0SB/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_blogging';

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
