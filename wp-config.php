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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp01' );

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
define( 'AUTH_KEY',         ';>r}|$gw<)w.)^6MF1}pAo#`H98sk?eN85(KMwCTArc?G@36k5y:nX,y)g5W[i%/' );
define( 'SECURE_AUTH_KEY',  'l+wi_/[+^Jq0Hgv<r]too8l`ET!X>LoadwC#jVdi8eFIl,<mq0AdsT*?Aubb-re1' );
define( 'LOGGED_IN_KEY',    '3[zit)tn-|A~_b *Fz~N!bS5B%U*LsV!?|#(gaOYtoNVTSw,:%L{wdCd1^&qYqfe' );
define( 'NONCE_KEY',        'O)!C&D-p#NIWFuJd|)$-E-_H}zPx*7fs=9w;3I$-Dh*PAh>ZBW$|/B=Y!z~H~:B&' );
define( 'AUTH_SALT',        '%#ln@SSxfO5o~ZZtRVGAI%g{-NJK`i)6lGL/xdmX![X~$cgqcK7Av;q1s=Rb^~y8' );
define( 'SECURE_AUTH_SALT', 'B1+InW[o7D>!)@GYtOObwR;`Z}$*)Z@o=!9z}6(}_(&&qL%[Z<TR>=:J#aTpS(zM' );
define( 'LOGGED_IN_SALT',   'SV?:C0LT^!zhZslCyg&VE2 GY163g?/Q}(jqZ.o]CL,&.M2 77E0{sjU7e.X N(0' );
define( 'NONCE_SALT',       'TL##3A>~AlD3Swqs 7{^@j=zA*-C<~UK^lz{vc>O@hA:zfxzZNRRyiPLR|#%alyu' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
