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
define( 'DB_NAME', 'liminary' );

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
define( 'AUTH_KEY',         '8~TxcL&Oz)~Iw.C+vO/xfi:mX|L>;Gs;Rsv=vFBv:Mzk@HNmr19bj$t_-D -Q@-S' );
define( 'SECURE_AUTH_KEY',  'fd+uS/YI>E!4a;=13wH$CqtHg!6D^eRI5IVrPdC6nV#!h}OvD<{Ocw(TUXq=V1hs' );
define( 'LOGGED_IN_KEY',    'DtE$?CKsDvT+BWb;/z.BMTui%EgujX1d5E.Y|#>y`K`3$[[b3O^B(61ahp7l!BEJ' );
define( 'NONCE_KEY',        ':@zD+Mpy-jhW,k9_kYHE9-8/cZ^^R*4PtFg/f{_l.fGP{|alE>hTy|*mMhL(C6,`' );
define( 'AUTH_SALT',        'YY?}~I#Rh~{#U>QO$E8t,;P{mck+QoKz[I/(O|zNKaWPt]VMIf{p/DGX*FJ/MNH6' );
define( 'SECURE_AUTH_SALT', 'eoBn|>-`VMG(|#^ by@^D|Q<iuE5PU;I*oQnpS}o<ZF!cX~a)IHSkx+}gDgCJth7' );
define( 'LOGGED_IN_SALT',   '+wfbDK{lBqCFNAMH%sSEj2MqUWOStb<t8=A+U0K4(1zRxCQ&2R:Q=pKFD:G<fK8a' );
define( 'NONCE_SALT',       'E&OxS96H,le!B%Da7(Yd)fLJQX|3!H? t|O?q,pnl<0b7q<w!w4*@dF>HG0>dEC>' );

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
