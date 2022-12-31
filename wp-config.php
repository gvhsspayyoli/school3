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
define( 'DB_NAME', 'school_db' );

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
define( 'AUTH_KEY',         '[*660Wn^1}|_s>e5z{_q|Ufcz,`BU}Sqh{ ]EKJ]ti}[g+VAM@5+*VAHy|I?:p|[' );
define( 'SECURE_AUTH_KEY',  'N0oMq5o!k)FPv+Nav9uuNb~60]Y?sX(>2d<,n]guTy5>:v*&l <+0f5NC/g4 BGK' );
define( 'LOGGED_IN_KEY',    'b0kHJ6GhA7gH```WefZIuR~KII3#IND&j|v[b{i-W/COq/e`xud=$ujW9mEFI|mb' );
define( 'NONCE_KEY',        'x/tLWz(IItGxN_DnTp%L7VWgJ1wz~T6Om(W}ZUy,9HZ5>UH!6lgiUmWrCI>s<7{|' );
define( 'AUTH_SALT',        'NFeM@I&:fhv>ZidX~TfS1icS<ur{eo3cHn}w1_s&(dV,^;5n<hhRa9%T]5cLue@%' );
define( 'SECURE_AUTH_SALT', 'eia}-Y*-pd)]GrbyW?W[ndQ>K=*Uj1lFwz5jmV`% oA*&JK$:-!R*NQ`sB:>]4N{' );
define( 'LOGGED_IN_SALT',   '[<4S6]9iMkK1(H#E%h(RUmPL~m!G#`!dhQT5X:vDgr&!?vez-(M4wb>LZ%q5bLaA' );
define( 'NONCE_SALT',       ']:/6PLy1U+!pOc-SoRpHIzF-m#zpZRr@sYnDLBCT$JSH{.Jl/K}.{{9D#zix-10H' );

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
