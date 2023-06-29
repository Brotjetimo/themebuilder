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
define( 'DB_NAME', 'themebuilder' );

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
define( 'AUTH_KEY',         '@L[UA]|64UKZcHB,x=rm}9,2AUUYX<xw$&.%$W#htRLoGvKM-c{v4PS.WVzU[dRe' );
define( 'SECURE_AUTH_KEY',  '-5g(qDL?MK}rK&T`xAw&nbim<;>eE!wY_?m!v;i[y@f_;ynb-+!/N&XCU?{vv Bj' );
define( 'LOGGED_IN_KEY',    ',/gocQ*<w;)5*+PpOD*jFKh$g3$(-u=L>tsI{vz(`zKU`v3b,Txdu~a9QQB=0b#h' );
define( 'NONCE_KEY',        'epszxTuF[F`[@Q)uS;/.K!i6t fIrSwFY3uQz+km=C$,U*nMZ1.fRjFZ<YT?*c*B' );
define( 'AUTH_SALT',        '*,3mt<M%-~.[{n.Rc$vmP.RxH!r8Gn~w,COrtCY*0tZlojVzhtbrqJ9).y~zHl,C' );
define( 'SECURE_AUTH_SALT', '+@bN~!@BNXO!p,Zq.BE!v~~S8T2x3j|,)i0qNmOC Jk<1b{]K(@Gen39YMV{1+Ae' );
define( 'LOGGED_IN_SALT',   'c+&NhE{JzxX^us4(K<-:>vY0^Psw|.ue2u#2yv{Ff~W5ux@TH|}L)oH&@6IEf&U3' );
define( 'NONCE_SALT',       '&fcL(0gM.3>TE$hXzGNO1D{BtZvaI*o m= Xp0I9z1>--Fjwl.fthme({`a#^Isq' );

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
