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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty123');

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
define('AUTH_KEY',         '[w@-t:`6T; z>$ Hn[fD;1=ydaE)=2:l(PnRyv`#5FY<}t{h*VDUBe$58bmpwpqs');
define('SECURE_AUTH_KEY',  'tg<8fs:8]bJN.gQ)# NJwQRg%l|5(a FbjfBsHEyz>_{3SVJ26BRMGvu`$!|9]=e');
define('LOGGED_IN_KEY',    '(6688T)@vAIMLf|xep9VYVu ^<kgW7nz:Ha,[VdZ7AlZ%edUxJ7TA>FcGE?MMQ+_');
define('NONCE_KEY',        'a0;2BKdQ=KB%%!z[Zp qNw5TXP%o|mg;h,z:J&)<(twmQ??NM%/Sm_Ng])MWu:}I');
define('AUTH_SALT',        '5Q}qn{=i<&irnWRybGmmBgB2W3bHkg@XXP|e]o}ItK4[~ar?nxs/C9k7{!P3jN )');
define('SECURE_AUTH_SALT', '%W|${h3R9#zjF7v|lE;<Az>-[[2/KWBNN?uN,]c2]Nek%J_5D<3uL3_yVk5jTi6A');
define('LOGGED_IN_SALT',   'nr.Q_h|#d_d]Xd9q1$A=qX03M?YA>e61#El<!9Cw5#&cT4=0`I`JWNhACSYVurR{');
define('NONCE_SALT',       'suX?Q:=dK?/-Zgqkgw;o8 *I0hm|k|,K^ON9`QITJ*[-5<LgWNBviO%4{ECF)WG)');
define('FS_METHOD', 'direct');


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
