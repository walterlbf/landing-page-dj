<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'landing-page-curso-dj' );

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
define( 'AUTH_KEY',         '0!;nwvwBj1~ly5h(h%71XPXUMx=eY [?Yjl+9kVQ>RS[WCGHo+];Qx*{;WLeD^R)' );
define( 'SECURE_AUTH_KEY',  'y1*^nf^w[U0HQEt(wGBB|2E39DH&B3dw~LicWP3@C1&?|9?(Y_Yz0b&@f`5oDZBt' );
define( 'LOGGED_IN_KEY',    '_;wbdwjc<[;YYgeG`efAd#V6B(u_ASrcR3q6A<u#STIDVZW]sf!3T-h*F*t=>0Dy' );
define( 'NONCE_KEY',        '>S~c`C022x}u;oeU5cGJD$Eo2]uZ_77m6;a}>0qwV4,fB[2Q+SeLi&oW^=K3@ejU' );
define( 'AUTH_SALT',        'L|<95M<udgoI-9tfKu/@y9$!ak}{BUx;R0EtAQd`Y^Vk H =Do#nV0=xPUUVzK7k' );
define( 'SECURE_AUTH_SALT', ')zoJ(LO]v`R/(u3q{WY#t<fXYx8N2+ 7M1w#SO?7N!k^1r~36{rjezgJz~^3FcEs' );
define( 'LOGGED_IN_SALT',   'lCC1(Y^3~e~l`+B{Xop1uKQ=i iov#+_uk#}o!O&2oJd_jstv9korxYu`eN8yu`Q' );
define( 'NONCE_SALT',       '3bJ=@GHk2Z;Ht)F*c&s[e NIfk`a*d$l+)MYm<OtBs42v`iExrmd]BU>-Ex=9b|J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
