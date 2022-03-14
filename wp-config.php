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
define( 'DB_NAME', 'prevision_db' );

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
define( 'AUTH_KEY',         '3W ;RHH>=JrZrRar4D7s*o6G17mMz8/)Z}?UQP:.Tl~L&iwCDsB)OVc1gn/MA%O>' );
define( 'SECURE_AUTH_KEY',  'EXUB$|$YK:($c+%z/UncMH$1rG$bjNr^N]`RhEZ7n{(_FQ!TfB<zAC5][9a9d->^' );
define( 'LOGGED_IN_KEY',    '}jb_-MKPKB2q|KQyg<*<AMt%{8l5[bE/0i>S2=171!ObD]jNR|Q56~^)Qx1eSp1y' );
define( 'NONCE_KEY',        '~S8vZ_D^?NX%!<D$O,:XODeG&F&<c_4m-YV.r:!V&#z(Qj]@KNL@YZ~Kw&(3c1yn' );
define( 'AUTH_SALT',        'YxU9MEo)~P39rMgaW[zhUtG>ozl`e44]g>Pv&&FH`=3R5~CC5T7!`m8?NPX!X<~v' );
define( 'SECURE_AUTH_SALT', 'VL#b6 ._&UT:|0u@ b?V[j&5w,p5{4/W%ZIn*DigXxlMP c)rcI2*=W*aN,@-N;E' );
define( 'LOGGED_IN_SALT',   '80!-q|Yw^-ar! _h^{%3fqSQ_Ho#W,,&qv]D@gTY45yp^OOB=QE]%yvBJ)is& {-' );
define( 'NONCE_SALT',       'JAT%x?J%pXZj}| Z;`*fRi `Y`GFscla4xf1[NU.X;JM1UA+i.=id)8 EDPz)6E/' );

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
