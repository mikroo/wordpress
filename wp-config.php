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
define('AUTH_KEY',         'qvK?STL(/.L[1vEm|d 6=k%mHpv:D bwmEI0rJTu6R@2_.+-}$D)M]3;H <QhDn-');
define('SECURE_AUTH_KEY',  '91Qn&fAgbE I(j-%D}h`Jx:Lh2PzQsQ7z[+ZK7HN34^Yco7dgplJ+c8cUbkK844t');
define('LOGGED_IN_KEY',    'id=mcMtPw-AT N2OEYR]e}>0>9^MeV#y}@Q yJ_1^?xn`zfn6q?^h!>y{] M|ARy');
define('NONCE_KEY',        'gBM$QJCKr@ZZR2$})Dtpiqf|,)Ad}n-*Q9R&WC_[|?*`KqCKQM]aqWC),hyP7JGs');
define('AUTH_SALT',        '&wfyB!4hqYsr>Bb)Kk6p?gVf]khbs0LQq%_5QeVJTo#ckqe (prn.v3}##ADmEys');
define('SECURE_AUTH_SALT', '!X{<2LNj{m&dc2Z]Y<UQN,JaAd8h$!jnO4DW9z5(2GK8{hKg$NhEn%~855r_s5y%');
define('LOGGED_IN_SALT',   'O}y^qXQop)dqoI=fD2sz)RHI$kcAT1aJ2>~uJfk/0f#>YucuLql9L0qM9: 8KN{%');
define('NONCE_SALT',       'qDa]gmcde[4s/bP^hEHBc^ZItJAfgFH:P@1]=jb$zmfw]6#.TFUgq6dFWD :CA[U');

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
