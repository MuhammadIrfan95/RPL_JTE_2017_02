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
define('DB_NAME', 'newspape_wp506');

/** MySQL database username */
define('DB_USER', 'newspape_wp506');

/** MySQL database password */
define('DB_PASSWORD', ']ip(f608S1');

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
define('AUTH_KEY',         '21mu9jubseo2jppilbvpbby7r7n0zckchosgrdmmn46i13yyjyzjt9hqmlwvaj9b');
define('SECURE_AUTH_KEY',  'gi0kceoo0v2s07rkts6hcvc8tmwbrvcntm3lcef3gfmqmwalwl3sui31sxn1kccl');
define('LOGGED_IN_KEY',    'mxi0xtizx5jg0fcpcmeexerm8ktvgngwj8hldfuh4ekteib8po4xoiirtknfeka4');
define('NONCE_KEY',        'cqeneedjrmptbcqc0vznqktahm7fsa67iyco2mfxdwpa51lbqvquivfsjxlzhogz');
define('AUTH_SALT',        'wayacsdgswvatxmcyvzttn210bv5wgj7prwuppuft0egk8rqs11lunqgqffwn39x');
define('SECURE_AUTH_SALT', 'hg7abpoe4bkaotpsw0dna6mzpq8jpaokcxku2tqwyvmyimdxyyzixrmtzdjykpwg');
define('LOGGED_IN_SALT',   'aqeevqy9tithpt84epoqq3sygd90ntgkxycttaefrrs6yrxwjjrmkromnjv3qoyq');
define('NONCE_SALT',       'df5b1ubxv7e8o7wli5g3frox3yjzucyelrcltzxgm6hbbhjr5rq3awanno6rfbuq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpg8_';

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
