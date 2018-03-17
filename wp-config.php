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
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         'sM`^,P S//C,&H!RaW=@rh/zCH;#z}(d0:@^i?&$DsIN^SRA8.O[V;<itH2:0/r ');
define('SECURE_AUTH_KEY',  '}+P-|_E~?EK|Xw37<6DXFe47fD1dj64?Jlg=q&<EkU_)378sgTG<~J *R$$1O2L0');
define('LOGGED_IN_KEY',    ')yL+tfnT &e43eMj5w=E#Myj&W10fr|HI4SP?c(|zU}4r/{B?$*#i0A&a)0W3+Uc');
define('NONCE_KEY',        'Ymr IN^Gz}Sdaqq|6Y&,[16BEtnxXpP-ZtX}q?.D]J*uEewn%+BeHKdsEH+s(4[#');
define('AUTH_SALT',        '}O3:h6PwGR]Y]2&-t&5oqm@n7O5?wcCm|! s=nAZN1~/LT8ubpf9aUhWQ-19oK9A');
define('SECURE_AUTH_SALT', '}zCz~*d!/fU>]X_.f]j-A1LQp.t>%l/.W?eNguS&! K08,,Y*[?m%h8DBlcKjqv7');
define('LOGGED_IN_SALT',   '0=1zBXfyEE?V$ g?C~T`6`lX7C3uU-M@-_v1L.B>#Zhvq3={(;ssgV;x3mX2fm>5');
define('NONCE_SALT',       '09F)f6&qv(?AZxFIp)h<S9puxY1t7C=i Lw7Rdzg_W(]Sd& 4R=&X@%bxilSaFKD');

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
