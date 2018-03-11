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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'QUFSEQHqmBpfodCU7hrbHNrF+WPucXVcmurEop3vv/vKvZQr+NCsDxORlgLP9u9bejpwvlrkOtdsmTAA49gMNg==');
define('SECURE_AUTH_KEY',  'E2YcYB4mk1iOrUTzhdPJmaPz8wbxX8zBiPfdvi7/62yDF7wKMRZlOa4rAReLsxCjyAoybWpwrdXoakwA87S2BQ==');
define('LOGGED_IN_KEY',    'lZtqFbDuw4az7t0viJv9LXe5+0eyedkMK6Ovbh9MGYHHKjZ+WGOrsH2taPqvwZyOes+WEcW6zD/d6d+XKxAhlw==');
define('NONCE_KEY',        'diE4NA+pFtR/lcQZfuR837qY5/AbBtlPOBoJ8+Mi8eNiiKsabWUoaC8TDyz0Df2UNFdBEfo1vEN5By5o1CPocg==');
define('AUTH_SALT',        'qOfT9PWyBPZciCJpfmMGozp/71gwm0qVBA3g6F/HE62fFGbLv1K+GnOuydq64iZej+VzhOTNJdAjhckj+RmlHw==');
define('SECURE_AUTH_SALT', '8uj0VDbQlXKrdKDnYdUkoOE5BWhK3tWBr4oX12bHUDpuQRwrfv7Nkp2xmGoZtvSH2b5k5/YlQCU1kWEIqOxbSw==');
define('LOGGED_IN_SALT',   'SPGjSC/AUUkNr/F/zicqQ0po4BtY7whXBTZczp0pUXioS65VjiLQiY2gDbVbbb7C4zN31MDM7Vxr0H6mnBlslg==');
define('NONCE_SALT',       'C71hqPftvNBDTzF4BHPRw1mUy8uydGhAn7FsEpwKbPsi9d00flEAewrzQt56ac1/w6sCfxHm6hz048lmZ9X5ow==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
