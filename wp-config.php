<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'BWDMobile');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '{]<b]:Z=w@N6eys2(0-]Ro7Jh*?=hMs4@V{x~#X|Ls:~d/kTCy<cP#U?9GDD<.d&');
define('SECURE_AUTH_KEY',  '@!=9Vx%(vE16$;L/M-/prQ<~J#%QsB9jU[gMK@~sV1fZ _d1`<:)7,!s4%9SXL{l');
define('LOGGED_IN_KEY',    'blqXcFqy7n1X`BLKpRw{quUTQ,vCYJgM~KML}lvi3Y`gdGB[dTU931+`=?VQO]n5');
define('NONCE_KEY',        ')?i??C{4>8RDg[F_MxRL)S6z]~{+Wge}crbO.UUQ4{YcJ<8czpTT*Pz/Y~3Q/-^%');
define('AUTH_SALT',        's-j/7>/s29RFn=XxH4o/2S~w[ !W7|QA/vg#OC!xnTzA;Wy%k0h!-&lY-J&!@+~V');
define('SECURE_AUTH_SALT', 'A__si}T8]Wh d~9~_=Y-n<2rwU%~B0}n LBy9@2r)?+Y4Q;vj XdQAJnItYIUAs?');
define('LOGGED_IN_SALT',   '/UclAqX[Pi]x!.wSv+KV4_~!7MP[E2:RL3i58I}.6vQ#&N{^(L;cjQYMP-2qILvN');
define('NONCE_SALT',       'vsf$K,Kaw`0zR&A(<a[~pEJt@7G_y!<].$9:j.2.deq@~V}C|acF.DS.we_8g]9F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
