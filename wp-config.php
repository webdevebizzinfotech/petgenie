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
define('DB_NAME', 'anubhavh_wp567');

/** MySQL database username */
define('DB_USER', 'anubhavh_wp567');

/** MySQL database password */
define('DB_PASSWORD', '_sbKv+pc{nWG');

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
define('AUTH_KEY',         'b9yhlxlsuycdrmd9y4j1kobgywhvubgcdecr0zcuvqzr56bvfzj0zo3yamjdlv4x');
define('SECURE_AUTH_KEY',  'xirv1qohmjcyzbkrquslohq8dnb7wghnqw8jc3gkznqi5bdenuzjdh1daeg9btet');
define('LOGGED_IN_KEY',    'gtvsrcitysfvxkuz5rc3l4ldqe5vii6fgidmffmtifamoyfiuusaz2jljtlwunfk');
define('NONCE_KEY',        'w5r3vzxbt4epzkqj9fbt0s3nvfxjgtljvj5sln9wfenqyh6ooikxentnk1ubbjxg');
define('AUTH_SALT',        'gztjh44hyfjix9uczqn0iygdjmidgf4x4to4opjtnhphyrn6jyftksvepal6tnhd');
define('SECURE_AUTH_SALT', '1xq2yfjvgdl58yjnijunbtkhmrlsfgdzpud2p37r22zlexfxwkrm7xobhvrf2slt');
define('LOGGED_IN_SALT',   'k5qeaxo4mehevomze3wqx5unaj6s3rxvepb7qqdlolop29tgpm9qzcukuigkvtun');
define('NONCE_SALT',       'ur4wrejc2zzs6wg1fb0m45r505jshmqrgpmkodvbvxnlp6ryqle9vsv8f8lv1a4x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpgt_';

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
define( 'WP_MEMORY_LIMIT', '128M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );
