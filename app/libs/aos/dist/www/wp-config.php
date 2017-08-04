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
define('DB_NAME', 'mpro123_market');

/** MySQL database username */
define('DB_USER', 'mpro123_market');

/** MySQL database password */
define('DB_PASSWORD', 'yd5mkvve');

/** MySQL hostname */
define('DB_HOST', 'mpro123.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         '_6aj8e^IL +.ja|yN=*7Ymzo)q[~-%kdakj%@@(6G>bb2;%$v3[ze]t=+:pK=Ish');
define('SECURE_AUTH_KEY',  ':L9DPE5,4i>0U^z)(.~nYiFD<4Q|4|kqpqwG6^T>j#S)2eDa1%f-cS7;Fjz1=,e=');
define('LOGGED_IN_KEY',    ')nunJ,+*G86pC*I+xW;-_UTWPtUzy8(SG5JneYxJ|tMx17H` d<FYN0X67XWGb~M');
define('NONCE_KEY',        '@%OKX_|G;-s60x y82P~Ki8iG63H{bxrPY{ATNHMzrZvvH7D|oY[Hl]xt-6lp,D^');
define('AUTH_SALT',        '=gS{=exJz@HnqnTn1EGmB0S#o{g0FiNMqL^vX+CzHz2^vE>/].XrzP$ w%6T_ Q*');
define('SECURE_AUTH_SALT', '7*+OZm&WnxMZ!mH-&wb5e0GT3t<M,3AG Gb!Z{m`gFJApmKS$9BA{A% !$=ZVu[<');
define('LOGGED_IN_SALT',   'y@VM_1^SE36;mUNf56o#|87v>E&f(xFa}s5>>NKr1{G^!h-}3T3FBv9sh5U]_4<j');
define('NONCE_SALT',       'y9ki=WOm;=|@]u6J)+d[7+Lq@ggEv}.Pj%N+|6^.pz,`ooBWO)7H;#{]CDX/4!f%');

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
