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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wp-user');

/** MySQL database password */
define( 'DB_PASSWORD', 'wp-pass');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';<{-X|5OX!PYG&m&mJ!cEiZ*E~}F^)/fU$De&O|jSl)>8.<;4m(5E{zG,8BymbU&');
define('SECURE_AUTH_KEY',  'l+2FMU+3-P_|%hYJk Dy@aI.:;$gNI? O?f(jz|&}?g;;F3TU5_F6-#+IgV_i;P[');
define('LOGGED_IN_KEY',    '-zZq/7@>F2uqmN!KYcU:nK-2j)xqFiO`,kwn`Y|OX8lY8-IYM|[[RYXr?}HSP4nN');
define('NONCE_KEY',        '*90EJ?Z~+5DOa<$l-*sh-m_uZ{>0!IAl:n+iKX,~{Vl+|V6*Z&Kv7C24E3!-&+_-');
define('AUTH_SALT',        '[;R<.n1].vwB&~cN?.JW-O[^jdR_V+e ggaw|j|<KyvvOgfw4_z!.l+H^--)IC,y');
define('SECURE_AUTH_SALT', 'i[i&BzN 1EZ&mlqT8rtR(urxL^Q70_JMN4c;.@(v5&G+]`Xl+ngcO3/xH6Mgb%Qg');
define('LOGGED_IN_SALT',   '[WcV/GS>_{Y-M&Pn;925n O(^`>GOd.ZG8ar66RgUbMgXmTxs7@t;j35`wO0r&`<');
define('NONCE_SALT',       'i%b]HVK*^-895O0dPC~C~8[7-{{4Ge`)0eH>S>2y{r9#8/Tn{~KcG?k>Z}DeRJ{%');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
