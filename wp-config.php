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
define( 'DB_NAME', 'projectN01' );

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
define( 'AUTH_KEY',         '6fF]DwMv*CxhMV|#_q7YfF AuDy)=QCMv{$dxFoZy$d06y` %^[#njMebA&br$ >' );
define( 'SECURE_AUTH_KEY',  't @E7S?9*wPSrN1L`pqHS%wzP2sjnAGaRr*r%iE^Cu]S-%;>nd= Q5nZl0Q`;smP' );
define( 'LOGGED_IN_KEY',    '$&kDJUAIq1R~uFScsH6l6Ua&j@SprDao,?*QNh*1%j;x3dszcblv!J-<_M(DT$#?' );
define( 'NONCE_KEY',        '?+wweS:E^4c^d4!IeEB4-fE,iD4fuA+{B%#c5d{jgF~bF`<=({Pv+j07ia5$Na[@' );
define( 'AUTH_SALT',        '/-;9XaLP[:2Xy@.-6fa GpHCV#3.q5Ay>Q5B>~sN;MX{t7JU)L.t!#p9aET3yv8~' );
define( 'SECURE_AUTH_SALT', 'D>dNtV*!3d%8u2KC8p^SKWckf/**PcSovTbfH QP({YD!W=EH4P{N&HtR(9N]x|`' );
define( 'LOGGED_IN_SALT',   'K~5:~f%N|cHi++@M #,;5d-N|.6!G@k?63d i=s!%lMyV! s07k5fVZeMC-|Mw:d' );
define( 'NONCE_SALT',       'kQUeJoI)xO>s0D*xs<B2d~? $hg7&jDvHJdx}=%R.f,h_G2eU>=UO/55|V./ma69' );

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
