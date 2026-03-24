<?php
/**
 * The base configuration for WordPress
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

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
 * You can generate these using the WordPress.org secret-key service
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 * You can change these at any point in time to invalidate all existing cookies.
 */
define('AUTH_KEY',         '1a2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t');
define('SECURE_AUTH_KEY',  '2b3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a');
define('LOGGED_IN_KEY',    '3c4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b');
define('NONCE_KEY',        '4d5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b3c');
define('AUTH_SALT',        '5e6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b3c4d');
define('SECURE_AUTH_SALT', '6f7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b3c4d5e');
define('LOGGED_IN_SALT',   '7g8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b3c4d5e6f');
define('NONCE_SALT',       '8h9i0j1k2l3m4n5o6p7q8r9s0t1a2b3c4d5e6f7g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 */
define('WP_DEBUG', false);

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
