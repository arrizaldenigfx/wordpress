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
define( 'AUTH_KEY',         '6x,!%o-Z=%%(;})!T2nqZiJFsg71RT>+3{+_4|s@=ru_6%,bjq*0x>}UdZl]G>N+' );
define( 'SECURE_AUTH_KEY',  'Nn~ <?W%imuTK~dL Z~}nV-jpNDlu15$wAqTraS%iX;4oj&dhSm<.hjQl`y`tUoJ' );
define( 'LOGGED_IN_KEY',    'T:e8U4 yK(JQs@=%}JA3^31-`;VCy2TQ=MhYxzqc]3lb0_W>0#0Fjqo;bxv#-IRL' );
define( 'NONCE_KEY',        'D#Ut*K>@BB9KjU;}@CF&i6/Pfe5{EafW5{jT6JL4A=xt<3yg(-y^I~a|E2clT9?$' );
define( 'AUTH_SALT',        'W;o!X#?Nb7K/>.d9^R<Wxc*~Dr74S$zS3ndtG!ouVUzfK(1q{7t65ByS<B}]1YFQ' );
define( 'SECURE_AUTH_SALT', '?^m3xnB#K8wGdEXPiWZ3-:GfP21nkehnC7Kq%1UU{jeAErdukF5/>fN}%&b[[o.;' );
define( 'LOGGED_IN_SALT',   'K[4zV^gD[OBZ]1p30.7Vq[uYKDN>{CE<VGw*Cp1ImB9&_CS^:x%L(Q|$0)ZcyJsU' );
define( 'NONCE_SALT',       '<K(f{Sj4IzX@rx3X<fSyIFAo1xtT/lidB[%{HX<u;TdeyD|G2lm?Y@&SIYu0;Fp[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
