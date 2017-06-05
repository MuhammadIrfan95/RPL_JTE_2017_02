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
define('DB_NAME', 'newspape_wp12');

/** MySQL database username */
define('DB_USER', 'newspape_wp12');

/** MySQL database password */
define('DB_PASSWORD', 'p2@2SQ5X6)');

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
define('AUTH_KEY',         '45kkswjg90ea7lnj2u6u7z5leueeqx5avzonjfnyof5rp5ykr32wdsk0r1vibq8m');
define('SECURE_AUTH_KEY',  'isw1ds69i3rxnrkeqzzbpsortet6nqeiqlhoffd7ghfzeumal28oe48mewd7evlq');
define('LOGGED_IN_KEY',    'igu56b4vzzfhaoncnjgus1bj2znbwrwe5m6c1xtu9xipaqudev8qbemyri9aeosy');
define('NONCE_KEY',        's6qi4u6h3pcfhcmvcfrsfovkyal788utf2kidnoeeibflrfkmv4h35lep5mdewfl');
define('AUTH_SALT',        'hrhdt0syjxx8utbkkbpffxojdenobcurkaovmr4myduezaayterqi5r843v7k0c2');
define('SECURE_AUTH_SALT', '6p5k6goksirw1tf7runko3t8ocfcirljrihrgnoo4g4kychbv04lz1q0zmzgtyul');
define('LOGGED_IN_SALT',   'vft8qkpagzxg1anoalgjxkxcsk9qz5d6y0dwiukifqtomgceuac2c4ypcyywnhtt');
define('NONCE_SALT',       '5ayiijo7skmsn5rb8yjzev4nz4vzehbha6dy5gcjlu0zat2y9u6tn9vnvrfrp5tu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6q_';

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
