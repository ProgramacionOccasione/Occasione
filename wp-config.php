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
define( 'DB_NAME', 'bdoccasione' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'EmFA?fGlAj80fIIx`<K~:/Z-BE?G]b[gh(7bp`7[ibwD4W:g*qsOy;a_JdOm2JY4' );
define( 'SECURE_AUTH_KEY',  'O%i}_}hNb?:,Qn]$W!-kIkBsm-Ms~$m+9vPI``L_BanF@Vz.cea;pS`2E7Y1fvEx' );
define( 'LOGGED_IN_KEY',    'HS~|~8;G5_>.0!>nxNqWUjTKj6q^.*s*rXu_#%vj:Dh!l(>J2T e>e8:WW45OL)Z' );
define( 'NONCE_KEY',        'mY*MtU=dLc}:.3pl.>i9*Qa}?-%$@-w=CQas`[b{x_WY|8{U]]$%MA@c6(p_|*z+' );
define( 'AUTH_SALT',        '6B)/#U2[leNjo>[bL;,ZCqD2oWb?a4kR{Y-phL~4Ob:,r)/Q.|&#rDlq$/GWBVqM' );
define( 'SECURE_AUTH_SALT', 'f,0g~:d`Ng4}oO6ARMR5CJ~{+WdI*a{DvY37 _$&,;=)eR&;}?K6_Y87L6!S`(#a' );
define( 'LOGGED_IN_SALT',   '6Hb<CHd?x^e9t&uK3Wn=QBV/hL4n`bk|K<BXa<QA?vQ9YCa>H,TqQ>D5Mezi(r`D' );
define( 'NONCE_SALT',       '^IkGqNn!lc)iqhOo$0,(>{.JG T5LBEK@wC[3+@5gLq1WCurPZT NL{sc|gjws8M' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
