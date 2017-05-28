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
define('DB_NAME', 'newspape_wp3');

/** MySQL database username */
define('DB_USER', 'newspape_wp3');

/** MySQL database password */
define('DB_PASSWORD', '7dp9(S(6Cz');

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
define('AUTH_KEY',         'ht2ezkcyhgjlionfxqlherzh0xcsxfedshsu9imy2zbteuu5pnycvegyj0khbs21');
define('SECURE_AUTH_KEY',  'dhuas0xngyznzohisldmb3firzambu0ycfppydxsdxxies1dqbm6tuqpmkgwkhar');
define('LOGGED_IN_KEY',    '1uy38muzwn5lvjszw1mcxqowcylceeihumlxumdpffrmiqvw9p0acqjtnkvimndt');
define('NONCE_KEY',        'cmpt35jihf7grcdgsktxo0orynb12eaaah2ugyof7dqvleqbcpyvvvyk9w506zoo');
define('AUTH_SALT',        'yuj6rrqmu3vcfmjrrdbordfnuzrfp51czz0kpfye9put7ydtm3j2awsgqljkyfpp');
define('SECURE_AUTH_SALT', 'ved80e01t4ftip0aqsl3h9fn65qvhqosfxh8frirjfhcjxygwettcxv3ox0aihnk');
define('LOGGED_IN_SALT',   's1puxjqrjksunq23aaqrjemcfeegp3yilya7sscq7utmlvihm9wbmsuxlia4rinb');
define('NONCE_SALT',       'nhxtzbnqhtlr0y3n5zopmflps4pc5pgqwsxdcxum2gwpcrsfbixvec9xenk0ac0i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpot_';

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
