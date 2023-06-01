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
define('DB_NAME', 'u306791733_opselcomplnews');

/** MySQL database username */
define('DB_USER', 'u306791733_opselcomplianc');

/** MySQL database password */
define('DB_PASSWORD', 'A307802d85566');

/** MySQL hostname */
define('DB_HOST',  '109.106.246.249');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jC8EkujWzlJuxcrbwTbdEpPTyLbKuyBq');
define('SECURE_AUTH_KEY',  'sSWqfGOz2+xsbXGOkQSltn+Vhy+vdfIV');
define('LOGGED_IN_KEY',    'qzTuQfRXkfOnznTRVLv3ojt1zT2EFv54');
define('NONCE_KEY',        '2O06gmj++5+5H5BlfWV0eHJcvtpoGdyz');
define('AUTH_SALT',        'rZqg2uB4BOyGEXswxHyWk1EO5lYKv7hh');
define('SECURE_AUTH_SALT', 'oXK33WFuvtzD2tCW8VlXmp1HNr5UwD5v');
define('LOGGED_IN_SALT',   'R7NNYlVzGfrbPATEzxxHGn8TJjNk3grH');
define('NONCE_SALT',       'lY1AWC3okbIg0+GdlHfuhddigU9GvdSH');
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
/* define('WP_HOME','http://opselcompliance.com/news');
define('WP_SITEURL','http://opselcompliance.com/news');
That's all, stop editing! Happy blogging. */

define('WP_HOME','http://opselcompliance.com/pages');
define('WP_SITEURL','http://opselcompliance.com/pages');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
