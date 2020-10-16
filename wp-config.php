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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'H4cking_TlsW2P' );

/** MySQL database username */
define( 'DB_USER', 'h4cking_WP' );

/** MySQL database password */
define( 'DB_PASSWORD', '2cU[5fq2cU[5fqh[' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&:_`vQ[~55zb8yO1z-g82?E8ZWURqzD*Jzyn]}4z*O_>-+ tH-1x-PO}<(Z$Vx^c');
define('SECURE_AUTH_KEY',  'a=jHe^_@|d34&8+H8qy~o{,-h1=_1AJN5`>eHl-Ze]o|E$0bSWz&5-->G6NPGuT{');
define('LOGGED_IN_KEY',    'aRGd3k9ie7$W6]!P-e+ClTGu8Z<j?}uCeKJ|V*#/fz^>f9f?-j8}zJ^YSWbu5(Mb');
define('NONCE_KEY',        'AlGm^`OD%uV^#+/OwyA?j/1)dGCw14,?>dfbzm&T#b6kG d952pUC%Fk8{78lfe-');
define('AUTH_SALT',        '*,4,s&2w9?.68mkhy}a5T) 62Hc,|Su|Wn=?137[9Qlf-5jv%.# h9:T5%`N#BmM');
define('SECURE_AUTH_SALT', '>z;O9;#JE/E^`n$K!ToE:|q>^LIrojJYZt].(qmig8_HAgvy_4rRs`c!&>RIf_f5');
define('LOGGED_IN_SALT',   ',nr u}2*6`$+audc|Pj_J>W.A!L+AjIbmG}{fm&-pQ<dc3@S0f[;Ee_-{]&WvAsv');
define('NONCE_SALT',       '}W`$8+sJy.[|4`*]|+42g4EfH5y82a Sd*k[cDIhh_K9%c =43#-<}Z+V+VViZ9:');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
