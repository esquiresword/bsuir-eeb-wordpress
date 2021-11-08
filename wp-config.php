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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1540' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l{1*JCmU2xk&91:&mohE[@c%!z# J(.AcylG2$u`/=6~zc/_fH[zCp#d_=m|`,d?' );
define( 'SECURE_AUTH_KEY',  'tOKL0~3)y)bq=>~$oE8E8zB_K3ZIC>>LUm!z)}!:7uut`CHQ,&}MLdpI-/pmMJ37' );
define( 'LOGGED_IN_KEY',    '-u3NeF%..myCR`2b/>]:%Ne,1X?5wY8w%b]ETW]]^P[(#7GEqecQMP9--V]5+B<f' );
define( 'NONCE_KEY',        'CA.cSs@Lh!5,uBtOv!_JJ`X/(mib)>%%SPjp0j7c>U,ODqC)w~5pwh:%Zr,N|`-w' );
define( 'AUTH_SALT',        'da)N7%M2G!(QQ;pFU*vg|PZD%.M?)9%i;7V%)*ki-r1l=2$Zw_G~W[X@LW0:0saK' );
define( 'SECURE_AUTH_SALT', '5Qwp>~ ?l<`b@[/%b8AJ(D-Oz>79tui!Y+}EbLKr7Q9SWJ>Uak|NI;$hY&>D=xJI' );
define( 'LOGGED_IN_SALT',   'vH.6Rc<vJDmZ[HBPq) ]v<:;~D]V=|2Zct(0^E~o;yb1[ye^h*L>5T!t{qK8s)I`' );
define( 'NONCE_SALT',       'wLZ{&nY2cPNukfWc5`q_]W!t;;3m,GAV{R72KWO{E!2BhXg)C~|iiZ[dn=H,(gWr' );

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
