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
define( 'DB_NAME', 'db-wordpress' );

/** Database username */
define( 'DB_USER', 'wp-admin' );

/** Database password */
define( 'DB_PASSWORD', 'wp-admin' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server' );

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
define( 'AUTH_KEY',         '4=~Um^$y?AbRP,F~9854!K{RW_;7V=;SJG@bL-TaUHDua0/t_XK9eYz@85yU5pNM' );
define( 'SECURE_AUTH_KEY',  'C YM=9Z]u pYV(ZoOEJ`s06J+XaqeAD#1tiNCbM/( +?4[S~^ rt,%#RAk]A2o;R' );
define( 'LOGGED_IN_KEY',    ')2-x9v%gVYK@VFq6ODsq4O<EZ|r1-<9{_=R=8vT3o4=H@{%l0Ue[R7g9Y*0##F|k' );
define( 'NONCE_KEY',        'S,mdY~jXc]kU4<KW>8Q8[I(A8hU,-[mAF*Jm-xG`IW_<N[Vj*y?8PRk,Q^#6J#;z' );
define( 'AUTH_SALT',        'Xpy KgV}bq/f%=uEfN><@Q>qPdl;=`$DW8Nz0_Dm!BS|`yV5@~(JC>O;GqY;(_Zf' );
define( 'SECURE_AUTH_SALT', 'Z#dKdHV0sb7b+Tnz*6cd~978E;/?2Dw*;k7o<_+,ZoC_&sq*gTTz!k*-jO%Z7}Kz' );
define( 'LOGGED_IN_SALT',   'P2+L?&L8#1WVfMw[7{Ak62l$N1_9v=GQawBr~X)y$D2QNtG+oEs/iPC7dU&Q40&f' );
define( 'NONCE_SALT',       'TV5u74fRgIi*1^}IUEHdWmz>0*n4IFkE]:P{+r]U5z>IfSkslnw+DG[?-!mQj7KV' );

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
