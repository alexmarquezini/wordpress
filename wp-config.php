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
define( 'AUTH_KEY',         '@!7FKrF#*SbnLkE!MD{IW/j;oL[7Xd>e?[D,bF5pHSgfBFE*RW&B0&eeC~6WbFT4' );
define( 'SECURE_AUTH_KEY',  '$odV`PRZ]Fy)_;+^K,H#EzSQb,>LV;4s%0q3)P*A2U-1^&N!37*:}530y{qAYvk%' );
define( 'LOGGED_IN_KEY',    ')9,_4LAF8P]0V4AEpheQexSu2)UA=,JpBypI{CGU+lxe`{8Q]|-Tl&(M]0SvUQut' );
define( 'NONCE_KEY',        '9+23 p}va&~NP~jA**<_QFu2fAJYC,%w|1+5pX^@K$^t]*mr;ZZ;SuaL*|1PFc/A' );
define( 'AUTH_SALT',        'Elh6~uB#{ANV_r:+KK>E&Veo^2`fXPf!V$GJ)EG@4)hP;*bX%z8ti}7M>ST4y0.w' );
define( 'SECURE_AUTH_SALT', 'W]qm4?K=/.Z}>p~+KpqO(?jY@=AN+J-;{$`W5fDn*W%Qzy|TU:v?jH[W_Md#I~ZM' );
define( 'LOGGED_IN_SALT',   'nM@hod0%T-;)9@xE_caEnWyBI-;/[x$ic[D;pQusY^^as,#}`of1UZZ,|Hn(QrHK' );
define( 'NONCE_SALT',       'D_Y{K]E~TDLiuT|a${r5Bib59un^=8Q(kT>vPwOz}TK/d)B^*`rx}~OxEDui2Ohg' );

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
