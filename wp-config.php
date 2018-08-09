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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mirecatres3');

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
define('AUTH_KEY',         'XFk9Q@W(B-;TzYoj~F$>CK%/vsI<<=w*Hy$@{#Jk<0*D8Zl&&;;Al(Q|-AnL5B`e');
define('SECURE_AUTH_KEY',  ')nio~axwxR#)O$_)ZX5eaqP/?YKtO2}H~nAAT1-LZ9XL@{y}*Qm7Ebc9mLR.{J!7');
define('LOGGED_IN_KEY',    '_@T54ze+&x)x`pAT]:A}<b6$(AT,!>_y{~Ys}Xn<q;UzcV:sP}2NOwi1d:fFtf.b');
define('NONCE_KEY',        '=iq2]#UzIR) 6d>]*mcJh.*Y:I/r^Y&pSUh{.t;rV_D=2.1I-s]0~rXfH#FD<$n(');
define('AUTH_SALT',        '6=3ah8F35kC&>a&y-#>5l_l=X&KL;E{aDHe5XA^;-tu?SQTejL1qvD6E#;W%3tDL');
define('SECURE_AUTH_SALT', 'I,[Vzo$F}$@(w!02c`Bc}S-oj8,9hc]iyUA+w|gc%i;~Shk%&B*a$enBNK(m~)}U');
define('LOGGED_IN_SALT',   'd5md]G-iD._6MmUZN-H_*<c[h7WH_5n:m,.T#18,0s<8*QweDP1?!&E8E;G/`<1B');
define('NONCE_SALT',       'q1du!z<6 a!2(=p,|gRD))OcR!_+AF *hMcr}_r+9KFViHvpxuFAh:log^$}SV]l');

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
