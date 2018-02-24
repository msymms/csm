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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'csymms');

/** MySQL database username */
define('DB_USER', 'csm_root');

/** MySQL database password */
define('DB_PASSWORD', 'chris');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*e$aG{K-E#/Q}^c:(s[A^GqjC)f]y76V8U.$B00DLU4h5_ih-ed3`<-+&oQ)p3v*');
define('SECURE_AUTH_KEY',  ';=K|zAPG7:Z{NH5+MFL;)V$,;lzrrQ^O*<S(g3|SPn*_befqG^n:9g|,(UJmu2CA');
define('LOGGED_IN_KEY',    '0;aU^bw#T~}2(FFmcHD C>5[=?s%gJ&S~%|WmX3tH;aM@<[DxFUO$rO@iytuH${|');
define('NONCE_KEY',        'Il](BKm#]H8!//K#&:*[orSRMbo99L&T %e,se Br=.R2d3J2|5k]fWY62GFzK/S');
define('AUTH_SALT',        'bqM:<;K_aT>cIUGD4oG(zT+YP6V9.RjEY>(`@isEO2G 96# _nexOX@0A/V]X? h');
define('SECURE_AUTH_SALT', 'tnHd2`k}ri?ZdCZ5z739L3mZ&dpI]lMI9U]d$Deh#_@#lso}`p/2AD_9A%}$.A6,');
define('LOGGED_IN_SALT',   'sH?Qw qR$yO4EON@3<[TKA<6Tk:d/a%6ir2%=/*+LIz ulm33f6/K%C&bk*0#sP@');
define('NONCE_SALT',       '`H~8FReQBj,(Zmt+eW6j0!zqJ(N%h*N+g}p$,(I[IyDPo&Y;9ay(@:KKzj[G^RB{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'csm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
