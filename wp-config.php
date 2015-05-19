<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Z[K%Mi~&j>]D^A&Wm34&@pg>C56vMFJKTDUxSJB~fz|K4*7)v`6prR9@Gx8owomQ');
define('SECURE_AUTH_KEY',  'Ty,>/>tuw9M&(MLg4dF4Iz?;XeWqx:;9Uxc$7v|(:^r+~-25wI!{L;qgfRa*gvr7');
define('LOGGED_IN_KEY',    'q 3Ln/|-.ZXm&(%l^8)hqMIVhIun@lrpYr)>NTRFl_1`^AT%CTQL_SIa(f![y8X|');
define('NONCE_KEY',        '4l+u_QRNBGYM|f7Ms}pX1f$_Erkbbnd+*hR&+&&1rx)2?@SuY}?YScye)vj)s&|P');
define('AUTH_SALT',        '7$u8z~+v@%|4xMn0%e{X)E-Y3bPY&PvpB=b!Pg1]Cbj! rWazZNF|4UNSlYuH_,|');
define('SECURE_AUTH_SALT', '-}+|R#=`-kDQi4A+2kg|8RxtEDF.`0v jm!oB-qFD9,/fmr4Ij+/P,=M*L5r+}#|');
define('LOGGED_IN_SALT',   'L;w;kDn2u7@~3zdfbE+8~[#oT:5)H!rP)^}0y&n@E2dd^0^AP2g?OFmkU1TB]Ks~');
define('NONCE_SALT',       'S=Ki%lz<ken2|H^s^@;241~G9]Zx03(jaq+@_7%%Jl3?C,ju<{!iJo(n@KbZ#GNj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
