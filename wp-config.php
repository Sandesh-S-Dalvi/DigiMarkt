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

// define('DB_NAME', 'gaiq');

/** MySQL database username */
// define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', '');

/** MySQL hostname */
// define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'wp-dm');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I{S.645]b^ l%IOJ[ZL^h_p,[z.!=n$|#e^/.{@efIp;5x`>-,=kZ`E2w|qE;LQZ');
define('SECURE_AUTH_KEY',  'hjlpBd0q-BwTA=L.v}.ORJWi<a%xw~)SXVkyI7[&?5NR+BGGnOP4t1mTt>{+<EP(');
define('LOGGED_IN_KEY',    'd2hfl:<3N]E}=ana]U!isCegjrogq x22^WT*:P]/lJr|d$3u<Tr2O3&$UrRcku7');
define('NONCE_KEY',        'cFl[b/*.lOgZ[ZLqU&?|P?=r2d]OgGl.9J7t&FrX7~BRy2</WJ[P}`PIc7(GP$]y');
define('AUTH_SALT',        'eI/}mo{D*p]O}E,12x$O >z5{xq&,}.@]m1So^M8YKv*gDKKZvod_tm|u#O=me6;');
define('SECURE_AUTH_SALT', 'rt62i9ef{{P5dsrjCK=BI(+a;zV)&ViD{4]!h!1nT%-Z61ku7l[^AYIV!b3H8NjN');
define('LOGGED_IN_SALT',   '01uaO|N3w|KowQ,.Dh8hJq_wZyhgmILGl]Hz.1dT 7C~rc[&,/b)-fE5melIY P:');
define('NONCE_SALT',       '>{I!K_+DyifD=I1|_Au8HNfPX(/;vvV-XOfM@NJJj@tCNlN+tin<`%D,mu<hf@hk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

