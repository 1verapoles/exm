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
define( 'DB_NAME', 'newone' );

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
define( 'AUTH_KEY',         'P;pr t!+eUWEw?kv(#RGAIac^A%K8&N5d?dN8@Eq`IFks5R~?<|<K T3#VhcOx=5' );
define( 'SECURE_AUTH_KEY',  '<]O|O?VZ[Iz>W|hA {M[$-i&.3s&<+> <R&7<0/{o#N _}-}2#B99Q%%PEZ4ZpBq' );
define( 'LOGGED_IN_KEY',    '!t~LNFv,DR_Cb*f3j?4]&Z1-wh?{tNW=kWW.|dN<E!lRiJ!Jno;EChA-Qjf4!x9w' );
define( 'NONCE_KEY',        'M`MxuZ)Txf:H}MkD1x@epe^k2o}C$W@!W}-cx|ya}MahE|3*[W0^8-% 397rdaDy' );
define( 'AUTH_SALT',        'X>9qd_hQxa D9o*CK}U)<[Zf}_0,/)eGP(*l-:u/&$)`)d,]h6-+0$kVGr`s)QI.' );
define( 'SECURE_AUTH_SALT', 'h.K*oEv?QE[x-zzJ4yg266Ki!8|u*]^T9Eq;}dL%(F/9XTFqH4qGD+%ph2QR 2z&' );
define( 'LOGGED_IN_SALT',   'sEMAm7+U`Sz~dH=]Of2+1/0QeW&lOJ/5;*?CrUrB6*|OwI}>LxS~QC/h1r{&B6l}' );
define( 'NONCE_SALT',       '7.Ks8RBn]2w %K3$rL@%2s7^m+?--:7RA4&=YKh+XMcbB3]6IjH7{%3+F.MK*zr9' );

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
