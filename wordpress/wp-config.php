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
define( 'DB_NAME', 'baga' );

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
define( 'AUTH_KEY',         'NQXwte6S23&UL;6|HAhwdr_]szD*-FgrdeGH}QPo~~^nA*gwG#?s+53Y-3tM|o9V' );
define( 'SECURE_AUTH_KEY',  ';@bL-bWUSF&Ma9%u8R+Zo(dD;PUIQ%lK.ODe*Zr9?dI,@}*xCeA1=F+1G|S/ujQG' );
define( 'LOGGED_IN_KEY',    'KV8kmG*]Dera&cxXl1xs}?TnCsD]&rf$qt$ehy<>cKM%c3!*vesU{(q6P;zU/59s' );
define( 'NONCE_KEY',        '5HrAdO{,Bgp0W|nphcUigKJ@H)oV>?pEFO|Fv>tP5+H-Y&_$]h>?fSjKb26wM#LT' );
define( 'AUTH_SALT',        ' s7Ti!bTrfNh-D*|5)kj&#U85{8^vJ@w0_</r]8aEr8OK-Xw$8z:GF3!mI.o)BTe' );
define( 'SECURE_AUTH_SALT', '$#o^%|F_{?_#UU8{Bs nk$G:o%@*S!xG^+aC|Zo.5GE,2JqC5p!.>CeV|wyS%#.F' );
define( 'LOGGED_IN_SALT',   '22~^x%Bml_Ew6rkN7D3V&/Lc^1;RE[<v7ytK/)6)_L?uN2,ITV.SfGe9/5Hc2@o|' );
define( 'NONCE_SALT',       '-{x2r/;<zo^Mm8`*69[j+&H(KSi&5(;p}!N&.!S4EOGo*uO@wi;@upF_cIG{3*G#' );

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
