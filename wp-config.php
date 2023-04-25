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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|sa!o_DzjY]LCC/[fl7X?D Z}8MZ}pzq>Kx{(C8YiiT[1U6_Mpg68!^6saLqAL~y' );
define( 'SECURE_AUTH_KEY',  'B|Ie*!sU!M( zdmiwV$`PE3|bY5;I=[/A4>0S..NwE*MpcgJn-Nz38}:ZB(qC(dS' );
define( 'LOGGED_IN_KEY',    '|8<{6~j#HN><sdk9VgY-x+@|iu.a46tT04)0G6U81=L!,U|/  <UtE{{-!UT!*K9' );
define( 'NONCE_KEY',        'WLn:S@>?)TVs/9nlKGM9S(dIW-MEl.?Z.<Q$YA@&^l4C:*UV[r/.t(k>*|Xj$]N#' );
define( 'AUTH_SALT',        '+yeRg*!bih#r2.JkvAY3vO+dQ0M_iU?2+;XC}S`71Y-hI$g>7TX01pQk!4N+SFE%' );
define( 'SECURE_AUTH_SALT', ';jc^>4e5YbDw]5JEo5aG.@St#dMMk0F%Yi2r$((C72(hnx;QPQ{.=_ecFPBTn0/b' );
define( 'LOGGED_IN_SALT',   ';:@;bVt<}qO8.s48=Xu8dx[8PoFW<_)xTNU?;_KJO-k1~kbByrzPBoJu<fYJo<JC' );
define( 'NONCE_SALT',       'WBTIo]u#:r5s/N 8).lB|a$mGR4<@V@kF6A*sL%1>=*~?^s|2$m%MR& lTg-W9:R' );

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
