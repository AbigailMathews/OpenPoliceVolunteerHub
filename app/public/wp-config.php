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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6WjDRuWMFrXedvzEccmiHPKfrIKZ23C1qrBZalSt1rukYjV+7xYtcnXAsPb2g9E7s3IKHVwldsOWQiBpwiMIIw==');
define('SECURE_AUTH_KEY',  'uYWVhlwY3HgpjBZGcxC1+DfxI5DH8+qGCdLCzWoKAE4G/Qd3pjo4j2NYOeIbktfFpgPsxhsmCrgsuYTtsiQqPw==');
define('LOGGED_IN_KEY',    'icjFn37SATk5SKA0wk8/pyzYoh5E1kRdhtB9iLbcknWGaCFlUbrrZ2GyMAaayX8Moe19RhZlfnmkJ20m3Td4hw==');
define('NONCE_KEY',        'V4mb9ftMMo9UQ0N62jzdI7BVRkd0TKznzLer+dji87NG2GE+pqASUV0zQF/2KFbYIt/tkhSmhO8cw94Ug5+zBA==');
define('AUTH_SALT',        'udQsrYPSIluVNhql6oSoc115PKWhoboX/wmtKXs14NNhUyaj4gydSLqp4+oQM2xNHLJVu6soug/35zyBFjOAwg==');
define('SECURE_AUTH_SALT', 'fGDGfDNanuwx/N2DY4bxTQzpSNWA2qk3ZY/W9s83J340UtmHDMXdDiYToKe9q2ieo9eQEMABqKjvzi2J8CdoKQ==');
define('LOGGED_IN_SALT',   'CNn4Uam4kWHJAHzdavyaedZqJKk5ET5uUA+mU98BPzWFOwemCDgTEkFWS9/mzS3wc4wIUioYI436kEjTAb7gJg==');
define('NONCE_SALT',       'WKC3jwLVtGVK+4hnZWTuNz4MREiB74FN8bKooeSH+1xo7+XGZf5ezMvAMyAWEYxN92y1V7GcaJ4Fj5AG6RGAbQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
