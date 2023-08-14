<?php
define( 'WP_CACHE', true );

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u786149635_Jb1Ub' );

/** Database username */
define( 'DB_USER', 'u786149635_bQm75' );

/** Database password */
define( 'DB_PASSWORD', 'zxY8U13Z5k' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          's?%L/;d/mqlQsD_44>AtZjAOlgzsxu#<]l-jx1c1m`<IPH[1LmyKUmE&fX8sWPng' );
define( 'SECURE_AUTH_KEY',   '/]),J9Q@[*BY}ai8(7aN{+wX;bpE@VIvQIW=Slag,*Yy6@Lz/%]E#{ly,8yoA Df' );
define( 'LOGGED_IN_KEY',     '+-Io_b?fK7HcU;7B. qyk{e1iks&C,?b*Qo+KPyFz}n0e1.-OpFs|_W4+z+|wbBd' );
define( 'NONCE_KEY',         'DEpS,EQLZR_q-I4r(x1xqy2Y:4+u3%&BiZ`}v:LHp>:l[Wv%V><72-s!.3+d#USQ' );
define( 'AUTH_SALT',         'U<~t2eVF5pD3_592g]Ck=%(WLEm_Qzl&%;XP<!XLvnObiVF=B~CrCmesaJe-rL8K' );
define( 'SECURE_AUTH_SALT',  'VqR?m6TxY~>7;Y8pF@X>[$x7|CB~[D#au|D-XRHkP4s)hAg-,a~YW!^7o_?`P8`l' );
define( 'LOGGED_IN_SALT',    'uhgI2^GLe >z/eTyl&avgi ?11bJ>%dk{reDg*#y8F5SDsA[xHSRQ=3N<qSbMRq$' );
define( 'NONCE_SALT',        '<9i.#U,d)?26XY@XEX[LJO^~#I0>bS7~11V}jb$d@JcM.FQLoP6yY@bw@<&?sWid' );
define( 'WP_CACHE_KEY_SALT', '4US|fqM:r.<E]5cV60[:Dx2-(U]|-it@z PP4sVT? @!n(@i6Ly@[%~z]uN@C5kH' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
