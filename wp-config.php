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
define( 'DB_NAME', 'lawfirm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~cIS5uzaZH2TDRut07/~JLV.sy$EYr41Lb.:H&p=x}63!tcOm$jH:J* Yp_b7pjR' );
define( 'SECURE_AUTH_KEY',  'Xv`y]`Id8 Hip)d g)~*V{@(j0R}~7ARemn:FWqYx6(}mL9&~rTiu}{!$p$t<ofG' );
define( 'LOGGED_IN_KEY',    'LQ5%^vxXCiy#/PhX*Q3:q?$ -p+`#enN;s})Iy%DSUYIroeXYINZKegL*}}m&0Gh' );
define( 'NONCE_KEY',        'i*s~#Jj5Gai+$`B>i,1PlMm)mE!LdVs|sZsiB E5Mg_2XZ^YlFX<{vcF4FU bTO3' );
define( 'AUTH_SALT',        'ckIXHO$G6Y`HT^v|KUI/S,[0K*f6|:dP+z2DQ0x=/L#uSb/WhZ&T*#a8Po1#<^-*' );
define( 'SECURE_AUTH_SALT', '%p:i&-X lgVV~^Y&kvbj(4}*1}[v5ZbwnAgA.atllCj1/fe0PHc{|4<tPx-@xDnU' );
define( 'LOGGED_IN_SALT',   'b=}dGSiWY4NgEq9)@+E_]mC3!h^b2/pGF+2+g:yiG#WT(s[dcc6BhS9k3UHk2)H8' );
define( 'NONCE_SALT',       '!6IX ^W]pq1+6uA~cC!BWDpJ6@Iaa{b. y!9A^G).q?,Xi/*yxQ%C&Hj]4@_YRPV' );

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
