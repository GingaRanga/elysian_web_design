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
define('DB_NAME', 'elysianwordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'ceGWygcKdqF65G71');

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
define('AUTH_KEY',         'Ks4*@S5/&O0w>{I|M_nn+%8u;7A3$/RT?VE>IvP<FUdEo(*#HQh5`Qf?Wwby]9ls');
define('SECURE_AUTH_KEY',  'Os_d- qIq5O9;km`#:$IJUq7O;ZezjdUGi5FDT0RS*NLd1vM}-n|!vY5be}<4(ht');
define('LOGGED_IN_KEY',    'VK_<P%ZXveug5&4qz[vT!waTg:bx#_ Y-l*slHY-0N++lw{yj:P-EaeGZ09+{<ZK');
define('NONCE_KEY',        '*Is3!apZx}m0</~h&a{5mN(L .>>4UJ#uERlX(&-Q0|iud{|F3/>!@@7HZae6A_0');
define('AUTH_SALT',        'A ?,j3loX-q-?~D8RY!74R&:VS]r>^Y4SLtuTA}-DD`I|cX:|uPy#vxyi]g}/ZFH');
define('SECURE_AUTH_SALT', 'UN?DIA7!aFl6D}]x}qvR=u)(sy{^ypR^y8<7l:U=V$2sJ|H`k|f7;:*<&QmC[7Gl');
define('LOGGED_IN_SALT',   '%|,H-@ 8WA!U$3c}?=0[D.Q]#z4}A65U-H<IuNL@f?s~Hxw[i+;]A)Z`,gM>M=< ');
define('NONCE_SALT',       '+|`+s-?{,fu4}A-zA#TDP!|.Go7w9,8# %OI|f9XN.+FAu,e<(6.7@)C59|uua[U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 * CHANGE FROM WP_ TO PREVENT HACKING
 */
// $table_prefix  = 'wp_';
$table_prefix  = 'ewd_';

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
