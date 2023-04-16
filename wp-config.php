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
define( 'DB_NAME', 'labb1signe' );

/** Database username */
define( 'DB_USER', 'labb1signe' );

/** Database password */
define( 'DB_PASSWORD', 'Deko532!' );

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
define( 'AUTH_KEY',         'A9b+WcJh~IJg`~2X*>LHA^RYUZ@tIva77C8+2VMR%Qh,xd^h(U~1x4?c>Yx#!]:T' );
define( 'SECURE_AUTH_KEY',  'r4-Kr_{):0e^5<q#G^lXwZGU|Qy>{g2h,/O=dkOs~NjRZ$S*;G,~FQS})*y+^/u;' );
define( 'LOGGED_IN_KEY',    '|DlGDav]Hr}+3Y~:X+xa 9CDzdNJ$W_#3Cv`m^z(X&N~ Uk/WPcpexFQM.i1th< ' );
define( 'NONCE_KEY',        'qI7b%^$Ol^4XwREJ]u;]BHl!X!y_?%DnzJ#b/ArFAfy&P4N9&CRD<m6D&&9##0-h' );
define( 'AUTH_SALT',        'Mqa#_8Z[6!u>]0x38931a6Peu*YM&KGJ`GvXg`DhF$y.8*mRCx5#zTWaeqN_gsm^' );
define( 'SECURE_AUTH_SALT', '<yqJ9I0LA{.W!AkA4(wxH]Uz8/Y3Fc|;KzO=8GG9fxlzOo5GE6[a=:uVLn@f m/]' );
define( 'LOGGED_IN_SALT',   'Ie~]oZo5d3t/9Sjpg#rX!8uc=_Qm_0n.3&CbB@Vb{L8Jl#iD=?buR^K _2BDMBsS' );
define( 'NONCE_SALT',       '(6K63U9u7>;s^E^_f*cej]P$3fPxpwG$q@g%jbPN8]Ftns^&%J6$yKW_j85vke>[' );

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
