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
define( 'DB_NAME', 'skyfarm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'usbw' );

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
define( 'AUTH_KEY',         '>J%D?dUTYP^)85Q]/g5OH.ecd#KJDV&p~fE3c8d~)^|dZ@7,yz~mMup7ExHzXL%`' );
define( 'SECURE_AUTH_KEY',  'GP|c5/r>MZk`_,3R9f##LR6}^FDj M@l+I+ *pE&w.cF}u9~S9*^P5?dSC[~W^8v' );
define( 'LOGGED_IN_KEY',    'UBxlh0&-[S#=vug/SvogI6vatfK(YS2DuQT/DytVp6~8R(zb?G-{d_vX@LY_3vr@' );
define( 'NONCE_KEY',        '+ra^Xv6!Q+6R$^^Q/I$ CUQ)~0^ki^X4.aVHZKr@<sjC~Zr)2LL#VQ#r`W,R=eja' );
define( 'AUTH_SALT',        'C!JY6p.(d5Aa#jx}u*ums,sU]gKrH>A-ZmQMkHo:amU]zF`1xgEHW`~@Lf#O(k=5' );
define( 'SECURE_AUTH_SALT', '=Wg$edi7Fl0e>%awpedrS|;O*G2Kc16E%VP<HhL.Pnk=ZUjJWURhkXN@DsB>`f]*' );
define( 'LOGGED_IN_SALT',   'HA|XPz?eH,/aXgN2h-4w[H)H(czn U~svV5HHm/PfEJjKYl4{nFJ+.<K;P:EqLH9' );
define( 'NONCE_SALT',       ':9^!3Uc6|s2K%|fwyE:{-w5=rKYbfUCbD$aLE#CAc<!<Hm^=y$-6}s_.5 vHj_$b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpskyfarm';

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
