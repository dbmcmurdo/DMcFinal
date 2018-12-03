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
define('DB_NAME', 'DMcFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '=^1Lr},0B:;3zMW>t}l<y;/wX<})YXh9.VN5F~cDqB<1v[kfNl1QDA~/TRmi@@H!');
define('SECURE_AUTH_KEY',  'FW!(!12Djal|2Y`^t,.SpER)=V63lbux$r}=%]Y?[QT/:R.g#<2S2v|Zk9en!k%M');
define('LOGGED_IN_KEY',    '{u~xT3W|le<LlxCbi%3f| B`-c*b-t67]gD?0o#o5)#BRUns^=[c~R%Il@/)YQ(Y');
define('NONCE_KEY',        ']yxvpToNOZ:iH,!4YRD%uS txt%ib{(eX/VLl8rX{Hy3]?)=WX=biJ7h%UmazXcK');
define('AUTH_SALT',        '(^=AKzC8wR~<%5zFn$<5u47vkLiTLU)6] LR$vNk,Fn+$s>99NPs tsFug4(f,<;');
define('SECURE_AUTH_SALT', 'l;m@VB^ElqMxj4T6@lyPZQB$+{G&Nb&&ec5Bc-1RZx47TQ7B7_oCeVpxlWtU&[S_');
define('LOGGED_IN_SALT',   'M+#+L(r,f>u{M:(vqY+%YW_[1bT+/6?V%UH;A<X~E1c~iBjh*@.v=5VV9Mk<td91');
define('NONCE_SALT',       'T^HVQSty3D|MDjm:{1VKH(An^do-s$b ~1N>%LK[,Xbe`~sM!dTnl]_Ge[9cT`sY');

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
