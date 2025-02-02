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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aktivatooldb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Y)]A(/o+5w_U/HSkR3.Dl8d.61;*T%(?<~#n1;ehi*W+{6U(I&Hl@1S2s<isLZ|T' );
define( 'SECURE_AUTH_KEY',  'X(f @m&=[D,bgT<W~sjD-[_P}nY:+d@Xp33;)S|w5a5(SLuW,&9xI~nJ=ve@c~gb' );
define( 'LOGGED_IN_KEY',    'Q=rIRTL{fKO[7X[%.uhLJ),vk4y4zco9{Qf)6-2jZ2Div Tf~%;bm!mvOKofKCBK' );
define( 'NONCE_KEY',        '=C~aF]2Bzyl$i71K4UUB=y0|7vZVVrH?oU{RCbU}qpZ&*pEOah75)m4_4tQ[V^h+' );
define( 'AUTH_SALT',        '/4;qW,-Y`PJ]@S>G?pfXM@u]~LZ5?p%SZCI%vp<+w)l,e 5%(GCWg!c2]kTkFid2' );
define( 'SECURE_AUTH_SALT', ' +1x||wK``F|&r;HxQTy|l:ng!M`z;|@W7Q2)VJ%+`.y&c@7{m/M{>+KaVLDJ3KE' );
define( 'LOGGED_IN_SALT',   'As3k3LJ:PW[x/?Lgfz{H,V5<IA4^e]@SDpG)`JZcaX*0r.9D2|?w5h,cYKs}JD>A' );
define( 'NONCE_SALT',       'C@LyF8BbHLZBQ}h%|j7m_Km_oy!8$SGT0rcX| DFbcNbapSV3t t#%6lI/u2~xY4' );

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
