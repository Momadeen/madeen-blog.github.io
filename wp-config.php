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
define('DB_NAME', 'madtech');

/** MySQL database username */
define('DB_USER', 'madtech');

/** MySQL database password */
define('DB_PASSWORD', 'madtech');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'aWcn+%W^NmTQ7;<ZgJ3{ Wj(Z:eV@aD}|^|: g*ENiil65-qD$%ojaCyb+cJ6^%m');
define('SECURE_AUTH_KEY',  'fX+ox0O/#Z.VK-Ns`+O]X~D65Nz-/U/5t(fcS%({}b%InejjyfyW~Lu)ftBp,e3C');
define('LOGGED_IN_KEY',    'IG3XYr:L _y,B-[jq6jS5=c5+}MK2b_26`M,eDBQ3.%Fi|,k&|W+zEPWS5?U[*]H');
define('NONCE_KEY',        'BSgDWYAH+bFu~:Vl2_%6t@-)fv+yLf,RO|I4Ha)AJb<csUlM+>6/qrV1oAznmJph');
define('AUTH_SALT',        '~XS)<qcmU3ncp<]lFMqF+5DsoAcao3sb:O:.-?l*R#1SUKC;$0(})$g2u^!@|(N?');
define('SECURE_AUTH_SALT', ';@rru+SDD)@-=[FeoPMzR?W(FN?QQB.IeyVmXhQS%p`<%{[;)f|,@)=w%.3J}S7*');
define('LOGGED_IN_SALT',   ':gR{?^Vr$1|p{3:(:.bfbO:w[]a*dD`zz/p!>7EehO^-@)r:@H`eKgB,hxl>h*VX');
define('NONCE_SALT',       'YOWXl.U;aEpRiCcJ#m%-g4D ?L/,[[b od:B#|Dcp-nwl 7NwfjIb5eK>P)c-5,k');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
