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
define( 'DB_NAME', 'gitweb_db' );

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
define( 'AUTH_KEY',         'mE-Yw0y6~Lx^31gi]<7l^_WFB&Iw+szSj#u`x]:o=$k)x{#>Shf$6A=G][+-d_L~' );
define( 'SECURE_AUTH_KEY',  'wg9LivU!~ACNo4N]-?w;U_YNb$8+ik/mYWjODjn^wV6fI  {KVbm]=i!0E~Ov|G/' );
define( 'LOGGED_IN_KEY',    ';tyQsnL?A05]Zn&5F$Yz2yvRp4;!>M$|7{U=O<hqC)s|f[~lh6S|WkZ7+|/3uK e' );
define( 'NONCE_KEY',        '$0QX?]QP#4f=qb#91 i4af;|G{_/Db9JY1_;QlmN`!X;4K=VB4j~~O>,mU3mq~TW' );
define( 'AUTH_SALT',        '(rOtUN|elr!_MkWq tN8Ai|yy:Y+,^D+[n2otKG$5r;q;hA3cH`(PoF8O0C]G~_(' );
define( 'SECURE_AUTH_SALT', 'pW(zg<%a]/]1aZ}in#7ELd9O9;p]3E)ZMx)_xT&gs[,Cr% v0`_NpBSP!) MxWa_' );
define( 'LOGGED_IN_SALT',   '~:ed!k|-hvooI2L]B875~Z[d]{&!cx2%##BS8nVBmP9hsfJAW`yn/*P:?Ph5WO}^' );
define( 'NONCE_SALT',       'Kwc*pq*VG&=v<-X [}V3jt@P/qXW7.ASW>~!<4^6f#VXO$`U%7gqGVW=9BD)86&r' );

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
