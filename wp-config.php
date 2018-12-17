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
define('DB_NAME', 'dote_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'O}D ,,r>_zTCcu`xtwXdbfhdrOJ%Jyd;q6v,)ErT%,M%@1>>C+nq&(@Ga}=,o+gW');
define('SECURE_AUTH_KEY',  '+Z8{z D;UR-X:3S`o>:y(ba1@4bM$/589OT?}qN2tVJ,d*};BYGmY,wzWN;Wv-*3');
define('LOGGED_IN_KEY',    'G?<93Yv{E<%8%y9S6t&ErB_4F$9F3+|!N=mFqeH^G!:x6UUq/& 4<:tKH`;p]DW0');
define('NONCE_KEY',        'sghT8m<b#WKb%yH*!)0 T<TGMDe`.%wEl`p8$0JJl8cq1C>UKJy9t)POZ@<#P5&$');
define('AUTH_SALT',        'PU Pd(>,G4mhy(]+9`Q?!>(YXmJhN)VTGlGNCtr-HB0`#7ha Ak.knPsdpfW1-5l');
define('SECURE_AUTH_SALT', 'M6K}t/lS}t=/jaDg]xVF2q{a^./wl=Z/c8p[,$-M..-$eUd?Y&!gP!YvR$66,+w ');
define('LOGGED_IN_SALT',   'qccdjs_!jrw9p#=4S%<*ngCqTA9+z!*Q;%*u=l{Vd0_|@IM@k2Y~q~k>p*^8c[2X');
define('NONCE_SALT',       'bNXLLTC.M=.L(R,m99sP.qJ]Ioi@n6C}SLDLGF^p4!=oL!psDu&A63O01_T<wq(D');

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
