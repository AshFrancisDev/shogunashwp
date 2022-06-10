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
define( 'DB_NAME', 'shogunash' );

/** Database username */
define( 'DB_USER', 'shogunash' );

/** Database password */
define( 'DB_PASSWORD', '_1[ctPVjJS8.ANsn' );

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
define( 'AUTH_KEY',         'm=C1Wpc`LNOE!wtvqr +gQ`aL2J:5|@F?dS/uGy`k2SjC[b<bs md0=tD|)cqM3@' );
define( 'SECURE_AUTH_KEY',  'w$cpMV{;*G=eq&P+M(YZ}ssV)h~3 Z12ZhX>FzE!M eT}O2m8,AS(pJ$`=v}8>eT' );
define( 'LOGGED_IN_KEY',    'DHC=x/&PqmTts.4Z59]]1At2P#ky-P*Ex5,h8uZ@9a@P@Y.0W#T`_tJ;::=U7,w7' );
define( 'NONCE_KEY',        'kZ>pVG6~HM;fswPDvB 4T[Cjr$):*y%UL$W7,_,;e5e]@=v@146w>^wT{x,~,Eyg' );
define( 'AUTH_SALT',        'y<Bp@UHFmc}j7Xx4#i#<4Ogv5[.1lsBryf%g~;*9.T}h O#oC4PJ}#<#bVvB]tPl' );
define( 'SECURE_AUTH_SALT', 'fD/^/,bX$_d`qjjOMf3_]que. 2#^EeRj}T|q`iq2psN T;qRWw4J].cR^_Nvyx>' );
define( 'LOGGED_IN_SALT',   'sQkGJCt>JQa;ae[S:<lD~6r`WTPa5V+H<qwZ8_Y2m6-EXV_]n5t>qxZ/z{[VmlBu' );
define( 'NONCE_SALT',       'nLxcP@O)vS:nPJ9<G`]c)1;*4/*Oet&yo78]Pwjpe}f:Gn,_&HqS2)w44urE7H|c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sawp_';

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
