<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'xo,j3RaxYb4<BRb6k>a+9cu1 l5KG&22^t]N^_re1R{D$BMV;No51x|_zd$4s|9#' );
define( 'SECURE_AUTH_KEY',  '@4}}gOuXG]Ku_4.Ss4d3gA|+VAIbs4?!NdFi&F#@1+;82%7+F7m2Gi#Lr3Z!LbN4' );
define( 'LOGGED_IN_KEY',    '2XL=mRoI5UvSn,k`6z!J(*8|l.db|msA75whS*3BwTl!?230n!g.[t5BV`A7;gFm' );
define( 'NONCE_KEY',        '1d~q>GYs|*YARqz?#^g):*hsFLn@F;MP4Hf=iA47t8)4!RSqoVbfG)+Js8fWoU>/' );
define( 'AUTH_SALT',        '!cYP?Qz}..-gcUwn$Z&[f3O&NCXwFs>xM)J8XUztlWJx{}cu`lI>gX{Xq:a.;MFr' );
define( 'SECURE_AUTH_SALT', '&M7CVH@tgVbrFkgV@v|dV{;fX/u((25iD2j$(5+8-NQS1qldPd4MoG3Lduqlh9GM' );
define( 'LOGGED_IN_SALT',   'x|FWt&>I{F-e[;76kf9TdsqrU+.`En=#KNDaB)kK~V]in0;dYKz&JYawB[lK ?A!' );
define( 'NONCE_SALT',       'K>>8n@!3}=/g/3vY}|81s}Ao[`wl -(Np9+X@H`~BI,s#.PCqVe<=d8r}$+Ayk_F' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
