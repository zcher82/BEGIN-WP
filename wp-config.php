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
define('DB_NAME', 'zeng1');

/** MySQL database username */
define('DB_USER', 'zcher82');

/** MySQL database password */
define('DB_PASSWORD', 'higginsher8082');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'p$juwH#SrJ]fYVA1C0&dOzvj6opW|jL Mu2fT%a8_=%{0z0f7++R,l9?BT,90z:!');
define('SECURE_AUTH_KEY',  '/4.;xJB.As[hl3$HPTZ9#d`^OAM$xMj=^Vy-TGmEZnP +sFv3{ (k1>*r2syYnjJ');
define('LOGGED_IN_KEY',    'dMs]Eh)s8Ft `lc&;iOU6xf5)!i?cWy4zGwY!^cOYG#RHcf(Takn]3Apb4<OgLr#');
define('NONCE_KEY',        '5X9}_;z7O5x#9-tA3|L5,W=`MPIs7O$Fv9Q)Kj<#S5 te=ID6ar3)M}5KZ9)S0<Z');
define('AUTH_SALT',        ';;X?R|f{(I2HKj=.=;O!,&0o(^x[NV79*C[dVG^>F^d2^yn5h@e;@kn~|`-Ts&? ');
define('SECURE_AUTH_SALT', 'k@vhMTwcKDBJXy:MT5Gq?P_>v(PXprn<_k=>aBqQr;~:RGhg+VcLEE^I`c!TM~%S');
define('LOGGED_IN_SALT',   'MA5:^8fvoDr:b>:s).(1Qz]{[WpEp*DQpuoLm^OP;=W2@nwaTcr|wS=GJU)~<h:R');
define('NONCE_SALT',       '[a,(^wDVh!cz!{?YK!3EMvUx 3!iaCZL[YdF9^r7~Dz7+htPPxg6PTGGngi:+,(s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
