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
define( 'DB_NAME', 'amateurfunk_ulm' );

/** Database username */
define( 'DB_USER', 'amateurfunk_ulm' );

/** Database password */
define( 'DB_PASSWORD', 'tschuess' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         '~>QOuBCGHY|-[p4etl,uqTxF/jhnzBm+nO0;eC,p&?Xbc~}p|yl-<@Z:OtO2t29`');
define('SECURE_AUTH_KEY',  'Q!p]9p=mm5_vUb`l^tTng`Ap~}[UkM7f+$u2 q@WBMH4>]8+Jta#TeyR!lPO-Qfm');
define('LOGGED_IN_KEY',    'O1MU&BvQ0uH)CDRzWz.Z~SguZuBHSVE5OkoY?9zcv;JE`&DL|3;&|6^)JkQf&%u{');
define('NONCE_KEY',        '1JFz1^n~*y9(^=3Aanpx=/@K^hJ}!H^XF}WmN,tC_hW%0<Lr/X,OdIX94;QOsi(^');
define('AUTH_SALT',        '?|-2JCO1SI-b8vIp@+UFY9nn_9(&=Adnx.~;O!W3 6Kql|[6JA+)9A3%<86KS.$i');
define('SECURE_AUTH_SALT', '3:?J7+Yn/Dyy1*!@@D@|XiK5,DNR;75QD]Xm8E./{%0x=r?gE9r`:lC+7ogmeC!%');
define('LOGGED_IN_SALT',   'DfE>O:-&q*6kL-q~5!~ 5TKy.+SWftxV9=s=^NyDzTmu-8xW#@n-]-Xpy]]ErP-5');
define('NONCE_SALT',       ')buA;fI2HF@2f.@wwLET[`A<y4kOR|c2m9a1(i|le1OCB_UlBwU,ri9aB3?Bu;<{');

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
