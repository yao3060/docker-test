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
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'app');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '2o<!/zA3)4<Mfi#rrzKRM`rF3Up5u<or[!l-?hcXqJw$S0#9#5,XjRweFEF|XyUv');
define('SECURE_AUTH_KEY',  'j.Q#erHaV?dP4)F%$ze43OdExR@(aN*=QV2(;GZ@4u-VT`Sx}g6NT:Q_AWI.C(=>');
define('LOGGED_IN_KEY',    '|hx]Qe3C-3Poo3rwK^bS7UvM44G@5d.aY`Cj[5(G!ZpJKxyTW:u.krC:|c)63V<u');
define('NONCE_KEY',        '9i0wI(jrR0(BazC?+io^n!G~[<SA=![(8;;uOer8=npR`9d<-ajosn|>;A*uLfCU');
define('AUTH_SALT',        'sDHgt~&UK!rnJtzEvC3@ck6ZSH`O;#~zvO]&^vhH{y2^6L5JqL:j<g0VT`k_dJcV');
define('SECURE_AUTH_SALT', '|_(3).Nc!SL7-Cu#:j(R5_fT4C$a.j]TJuHTW}ly%Wu?+2!FWX,!Yw7:g7rO61E2');
define('LOGGED_IN_SALT',   'U6dO,p7k%~Z<q}^O/`8)OyI*=GxI9prTF<QZ=.P7#s-+}[b2qK(n4n82<oEhc%1)');
define('NONCE_SALT',       '?4:1lSQmkr~k@}5F&N1*g&(|v<d6AQ96?L+!Icnm+z$yR*|h>/ZQBDv40)%$M2Lv');

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
