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
define('DB_NAME', 'clevelandneurocare_new');

/** MySQL database username */
define('DB_USER', 'neurocare_new');

/** MySQL database password */
define('DB_PASSWORD', '80g3O#tf');

/** MySQL hostname */
define('DB_HOST', '50.62.209.77:3306 ');

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
define('AUTH_KEY',         '.,+8oz9UF(eV#=36$Jf}^_Dt5]pIGHpUjib(LH098SAE/u{jiRsj/8VS~1R%]EDY');
define('SECURE_AUTH_KEY',  't7|QKf0 ?rRY^-lm3h4Z-/GX4Q(ey@syM?nFZ$?%F,(Rfa<@18b!y@BQG=kE2ok}');
define('LOGGED_IN_KEY',    '.~Gijtd[g7&WiguEl}aUs:2M`o.9?sx<jZpB)p?MpjG%:WE2qe&iR<We%x;v@O;K');
define('NONCE_KEY',        '5ykMMlY(n{1K/(vOfB}::l`sK,eXic86>UgdF2&_r7-O5_m`A2}8PmNLVnN}qcx*');
define('AUTH_SALT',        'FYMV^Jph<d&>_gE,Ur,su yjp*HHM_{a>/V|eeT-zr,Z5Or=k1LU|]mM2j.+U7?b');
define('SECURE_AUTH_SALT', '79s$v~?)5l3lG3D$*E~}f3d-xoFL$_1qpqa;F4 3Y/<VT4>f7?^B`*}39l{o0{DC');
define('LOGGED_IN_SALT',   'a;BKfK:yF~ArmM0ICXhNqO h,u<{WJ4NPDO[T9WL6kx]Ouy@q{/3l~f2<lb:0Un`');
define('NONCE_SALT',       'eGRt pk&t {Kj61K`PG9RW;L3w[uHhbFd7lLjZ%aT`>6~y6e}/U8/qDQ2<scGVV:');

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
