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
define( 'DB_NAME', 'wp_anacapa' );

/** MySQL database username */
define( 'DB_USER', 'wp_dev_anacapa' );

/** MySQL database password */
define( 'DB_PASSWORD', '.t?6N/3%29[%49j' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'B|K=xa{.A7vd)jt94mB,.+ a`3JgQ|u}/C-nmaLh60nALFrWDv-#F_tw^xTrB;Yl');
define('SECURE_AUTH_KEY',  'W~%:kgD3X{ycV{{M|<HzMm8lObyC|Y+1]+ !W&DY|n%az5,O%8Zl&Wo9Z.vx]:yg');
define('LOGGED_IN_KEY',    'f|E{Y-dG+=X( FX)Jex&-u6HNh g ?/O>m.YDgR0s{{ya{kD2#(2lXy;S6]T}% *');
define('NONCE_KEY',        '7;ba-&A</MbJ.# }}[neGEPgvPQR*y<e-[R|y;YkC}haUM.94b-A2?._ !Ab!s.{');
define('AUTH_SALT',        '@%:s0*2(U?gZ|W50& l?:~l!UKkzE+<)S}_5iyl5l@E;yRGfdPY8e e^+!b;EG[k');
define('SECURE_AUTH_SALT', '$u-^>Oyhzlfpcgw#X(hFM1papA1&_0/Vz?2s-|7:>MNm7RTR#iY)$B:al8<:G^$0');
define('LOGGED_IN_SALT',   '0]UH_t#mAuFk0HKC5x~cty/m82++0 %V|HHpxiOta?{?8vq#G97:{O^ L{DwDak)');
define('NONCE_SALT',       'uV~:YE!p9,aUh(sv)B`ri6}@[2f;6ydm||mPFq@jb$^BE=kj.eC]!!09j]A;al(H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dykyb_';

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
