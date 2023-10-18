<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'educourse_db' );

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
define( 'AUTH_KEY',         'q02g1m-}QgwE+5u5qKju++-Bemhps(<4uQUumP?WjE=.lFz~8GP$d;PKo$gVxK4N' );
define( 'SECURE_AUTH_KEY',  'F;`w/ J-oMSRNPnz_Yti|M;CVwC5%xw|*0QRSxpb=>=`NiBNFB,7bUdQ-;c:Ul]Y' );
define( 'LOGGED_IN_KEY',    'Za1,EW`Ao{2jf^0809E_HY}0Oih8&XScM7%UQe?!MfG|Op#)ifKc![Z_C|Fu3i6L' );
define( 'NONCE_KEY',        '9Wt8%faiS=V;?stX89&|t_qMg:-gR:P[#r]iWd1*)ammZ90~<+3K`v>y?FA%)0Pw' );
define( 'AUTH_SALT',        'Sz<T$=cMEj2<iay4GRf$mI,uBub-wDr{B#H[d09yua3[2b&01.Lp f{wI{w3ihY]' );
define( 'SECURE_AUTH_SALT', 'SS-Ti[L9~2v}teeL.j(6#J^###7-fFpj|t0>5WdKkX [=9cy<nu7m7~rX yD$Ase' );
define( 'LOGGED_IN_SALT',   'eq!T_Cm)2>[}i3S!} ;o`nz_R_`{3ez0-y1n*&_PCamTC1?mh[XQp%=r.O7DyW^s' );
define( 'NONCE_SALT',       '-(n$w;f91E7>cX<`YukOS[rIyu2)`F$=uhjrFvKl7,RUf?A{pI;St|s)IlC[ng0Z' );

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
