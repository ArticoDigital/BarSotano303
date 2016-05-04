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
define('DB_NAME', 'bar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't*$-08sLAt+P3 9~+i;.+.K-7W!+bap?-.+3`<nNr}|C?R[+0;`+Jl{g`n::kooC');
define('SECURE_AUTH_KEY',  's_UK(fR$tGmG1z|HwMb`-9|M$*z8|Aj/1b$y&v^|_N:`IvP%pl@({v|E+Qlh=lG1');
define('LOGGED_IN_KEY',    'P0yE~d)Tz[FkF8D(xwrs%]}9 iN+h,OgOv2FN}(cD-NA0:|L5<7SnQQI}(61DN!?');
define('NONCE_KEY',        'CxN(2X%.6x2(0Vh+6vJR-L j_@i(o0?Ghp1_y*O+L7A/Jx-t>{,lUo4>&|Gcw8Z[');
define('AUTH_SALT',        'n,elTiO&9-Ec+m)h^i-MvB86]IO=?k+U&=KNZ-LUG1Tm9`W8D#|#A;-K<{75+F,%');
define('SECURE_AUTH_SALT', '=PsP7k$mVfTS&ek-_<tg(AZ_k%^Z2+p%+K|O+P?f@h~(vtFJ~^X$I+W+,}x}KNBe');
define('LOGGED_IN_SALT',   '_~TOqP&Pyz+tT=+*6Qzx.x1hX{:RA{}:gNUsVyA6+]j:>+_=KZuM4wE4,7?n4a^_');
define('NONCE_SALT',       'KW)IcL6Kt.q`O(57vE}aS?{|}iDh`4-OJ~_W~xU7s2 R0z4|L?<tA=}td/6LOjG@');

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