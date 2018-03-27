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
define('DB_NAME', 'uoolo_21748519_357');

/** MySQL database username */
define('DB_USER', '21748519_8');

/** MySQL database password */
define('DB_PASSWORD', '93S7p@51]w');

/** MySQL hostname */
define('DB_HOST', 'sql112.byetcluster.com');

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
define('AUTH_KEY',         '27biw7tgvu6dpmuyrxlc5vz5wlqpzszydmtoqseq2xkkq1ktvhklcv2id7tocbjf');
define('SECURE_AUTH_KEY',  'j0vwheit0r3kmdajw7epagifiqbebw1rlbzktow6d4ccuetvzn3cx6qollrzo05z');
define('LOGGED_IN_KEY',    'hte63lpy10v52rc2uirrr7ixidppkmy5qvek19lwwc6ph1ztpqr8i5gnbco9hjpu');
define('NONCE_KEY',        'owoizjqoaffjdhce7axy7jjn0dal5upb0nmk1ms21sffbhjhflk7pf8pq6kp07ox');
define('AUTH_SALT',        'orsyx2hsondgubenbmx6fhwnglh5xpna6enqup12imfgkz6yz5n5lexsx15g2qk4');
define('SECURE_AUTH_SALT', 'oofx6slz4gzynuy89d3bx23fjj7wltdr089vugm0mhftsz4njs7qxxhaphpmseu3');
define('LOGGED_IN_SALT',   '5m4pezxvmadnw673xgb5tmdxmrrybiylmggfea7rj4v1126jbbebvkv5fk4th72z');
define('NONCE_SALT',       'n2rvzhdccywpplojr8lhezuqalejozlpxwrtowowtfo5gqvpzajtba21ko8zmqhu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpij96_';

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
