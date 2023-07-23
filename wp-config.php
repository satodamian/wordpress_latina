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
define( 'DB_NAME', 'wordpress_latina' );

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
define( 'AUTH_KEY',         '>]Q( 0#!8#Einob8UqtpmE#i}}d}m GjDmmMcM^#`[%s/F#!a^kuJl@m#VB9VR:^' );
define( 'SECURE_AUTH_KEY',  'aOjv<mwNlY4uK[Vr02`,Lzx8Ki43D^X$O](Z(@3fZL-buU p.tx~oTT/|pT-/ZKA' );
define( 'LOGGED_IN_KEY',    'Ku5tnp[pdtT`hn[NI!J}QB+_ElW3m.$b/HYhcKTIR1O{tj*)5S:#.$x?sSQ]v}ei' );
define( 'NONCE_KEY',        'lu;$=BJ*<!d~o,xm>PCw0Fh@6FA9doyhc8mF~Tet(Yaf&H)X+S-j2<T_cq9#U6M#' );
define( 'AUTH_SALT',        'GaqX/1@A]wz/ pXTUG&mxP2$@QqASH&-usUfsuDN-]OyB)TO3+wG;G@Rg(|G`daS' );
define( 'SECURE_AUTH_SALT', '6&&Y?]b_(:)kF1 Tw)J.}`m^:shcy~EUo=($U=oLl ]hDKkc<2B)_]ylrghed!RG' );
define( 'LOGGED_IN_SALT',   'TBF=-jEk#0;j0[[[{o1kyr(a49[.-kfJ6._Dq5a=F3lIOx|(B-9akOp,~/8) +%;' );
define( 'NONCE_SALT',       '[RX$vkVPvl,]/+^=/l_?>+,{hxP=`3R&mJexG1!f_s<LF[Y3dT-^XO]#aGF1p~hF' );

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
