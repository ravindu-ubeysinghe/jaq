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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '$$ravindu123$$');

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
define('AUTH_KEY',         'm:B ( :frEzGmCPND*ptmO54Nj:}0.t0k%iA.X&uwLW4W;*>RG!8*AVaPrf*]<?m');
define('SECURE_AUTH_KEY',  'XlMB_-8tr9OKqyXf*gNz/H`Dl!UfSrKRqzHw1.J@PB5zR$1@8=l(.2Ce5q3zn9(/');
define('LOGGED_IN_KEY',    'wq(3*&o.!?-293N,=|{a<}ml+^{;+h:zaLyQ^jqN}Zqd.S_8STl0+DWPAgup[gW*');
define('NONCE_KEY',        'mP6!V*`VcO>6#qP  UZYdqfl].S9-Cx^Y bk:-2,9s!!H_B*4Ru8)O2s2l7[6,yc');
define('AUTH_SALT',        ',&;K&r8= 7q?Bd&FlfF#xt7/2)u45&wZYn71!$4)(_O>O]sBK#X!:lyGx (z5dL+');
define('SECURE_AUTH_SALT', 'VAf:jMBylTBWhBDs!R;+XOi`gF JVOg6yG_&9.ZHWRQgRZo[f a&lj75]jA^Vm/u');
define('LOGGED_IN_SALT',   ';NZI~<[k:N.+0hG0.+]={$=Q(]Ux?R;~$YlCT5oO3.Tuou]0zHb?`n!%x]ldrTV`');
define('NONCE_SALT',       'hKv]P}Y4}((h=Ha6M)r`(n?kKdXXJZ.T:Ls#?hk19v(/F%5S~1`6iQA<f`uOyS)P');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
