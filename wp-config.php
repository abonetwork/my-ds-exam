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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wproot' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootpass' );

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
define( 'AUTH_KEY',         'dEJ.c.%5$y|IF@k.[E2643od!)8l5Kq/R@LmWS([VppKH{?i^A=bS5nR0(^mc]V#' );
define( 'SECURE_AUTH_KEY',  'r {GB40t;zc*t:`b!I$M@4S`~{Dt}/yxJ]B_O;G8rO+F%xEAdN,]N^IN-LfC}blG' );
define( 'LOGGED_IN_KEY',    'NjzLGdSo/O<UPv618.B&QN{0a5,dv1l>wX@LAI8~NC_hV~I]KzvBPOye(deabluj' );
define( 'NONCE_KEY',        'l_}XTVER)0+rYx#!H+oQO8,:9DIf=/4?0T.0gX1o[`zcM]Q/:V4RqI_k_P!4gd*:' );
define( 'AUTH_SALT',        'V6M&/CTPWWx%cK]2PkbAx?f|C8ULREk)sO7O?xmh8p<pFw>Wm]ihYb`,r{4|g&Z:' );
define( 'SECURE_AUTH_SALT', 'Y2tJ4gr-NYFTr1Yg#NuPb3#tnv[7<c-o5}2H,8Y/oTryoww6oY}>`j}mdl JW4eO' );
define( 'LOGGED_IN_SALT',   'OF:nX7?^>W{JJLN;XGCnCxFq/q~RuZ{n&kl4MVL<j/jn2<!xf]7w1n=JPHP1Gl1b' );
define( 'NONCE_SALT',       ';fMOq,L Kknc~;$:l&t;(>zd5)/Kl6Kf-NY<xAy}nS}%{?Sc[PJMLZI]?+KeGBvy' );

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
