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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/forge/news.hcmfo3club.net/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'news_fifahcm');

/** MySQL database username */
define('DB_USER', 'forge');

/** MySQL database password */
define('DB_PASSWORD', 'itS7An771StSNkWVTebv');

/** MySQL hostname */
define('DB_HOST', '128.199.143.72');


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
define('AUTH_KEY',         '6]UxYc|j.#4E5xR@GbZp/Pg{OLyY_N?M#jz$!*nr?j)y5,nO< @/Sxl?(CizufY=');
define('SECURE_AUTH_KEY',  '2z82E+L?.MZ Xl>jt/XhzD+++]$!Q5@}-|wK+eB3}N(5rt~Kt-/Av>,D@`EF&]fw');
define('LOGGED_IN_KEY',    ' LP$&uGWo))@WtTe*uu~d4@v+v{Sf+cQe7weZ]I.pNDwO;TqkSw3dmD[uK0O+D6Y');
define('NONCE_KEY',        '~`GVGZM}aZLIr?^eg>%^o}}IL>tH-#/ 32C~Hf[smM+(?{c{>+nW-Oe>d>{f6-)o');
define('AUTH_SALT',        '>}0C.d@7$kKqZ$n|Wq_TXp2&/+NAgx-S|>Np;aTX+gk{3xy}iR*rr#MHFO_FSlO!');
define('SECURE_AUTH_SALT', ']rvNJnUfhjpdEb|Z7aNfiu%d0pU(uR-FW<j{.SwWi&d$1F/L&JYfo1eYE?zdhm?,');
define('LOGGED_IN_SALT',   'k|G`rzh@noIcKS/-zKn:$JFS6!^--=k+8i|Jx|IMLtqc_{]#zbC(YJ>(y=2$kARQ');
define('NONCE_SALT',       '/r+YdQ>.[l>9  e5oKY^-mZd+eo7hShI_?l;n]p?#f%UoVppO6=6?r:,yuM+8b|_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fifahcm_';

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
