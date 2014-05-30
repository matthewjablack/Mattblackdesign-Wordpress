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
define('DB_NAME', 'mattblackdesign');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '@Mblack123');

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
define('AUTH_KEY',         '{ =/Wp[O;EdWfN#m`jJumf]=5-n5SX=l9,.t_oc 2Pntd{t576mr/,-G!^us{R`y');
define('SECURE_AUTH_KEY',  'u94UQ]$eqZYP(g2f^)NT6A(7Y}BV#0{#>R8lYy0+egtIle.h/NJ,.f/udu3q@dK1');
define('LOGGED_IN_KEY',    'py!RS|YU^w=OqrWhE?fW~44CUF9Q+}j2&ydoBnvDKPX[~#Up*9..?Pt)+]=gmno|');
define('NONCE_KEY',        't%<Cr6aGHe{4*z+U`Z:_KEeZT_)WG8cz9aB=o+8Q51Fm_rssMNK_O-jv7o^`R200');
define('AUTH_SALT',        'y} jOJZTxNVJ].dn^|w.n8C_.dwif?gA7 j;@n+go/t35j5<{&ZK(87NCq=xhWyq');
define('SECURE_AUTH_SALT', 'R4S//;mG}w/.3rPb}1]Z)tNo`B;Ii`30;i;=SY;uK85EO}bJQ^-pr)<&#8.E072m');
define('LOGGED_IN_SALT',   'lvNvMwZ.e?X3]xkn&PG`(:&vo+00f.nsTr/m9.ZJ` `OTJ.{XHL0ZhF2oC`wc[O8');
define('NONCE_SALT',       'dgqu9_gEt&Y>Ia$l#n<r+ip1<k!ZVGj>j?40ufeXY?G7WFy1lYzmdQy@wj$KVagU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to Canadian English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * en_CA.mo to wp-content/languages and set WPLANG to 'en_CA' to enable Canadian
 * English language support.
 */
define('WPLANG', 'en_CA');

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
