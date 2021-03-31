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
define('DB_NAME', 'sheytannku533');
/** MySQL database username */
define('DB_USER', 'sheytannku533');
/** MySQL database password */
define('DB_PASSWORD', '2neqj7pQ3s25');
/** MySQL hostname */
define('DB_HOST', 'sheytannku533.mysql.db:3306');
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
define('AUTH_KEY',         '8p7+Z3/mtoNdNkD71Mub0FrYTDonpXSCOV1dxMZxt6aQ7JGScq6dGoeBZ49o');
define('SECURE_AUTH_KEY',  'Mwt9zZ3ERlhwvZI+2CAkXQCpgG63isGaA5TMkOIPbhDgAxmJ3bHVEcOb7M/3');
define('LOGGED_IN_KEY',    'tttKB4mqrsDvVcH/bbsBsI9GcCI5Ivv9FwiWhAlHhAmXFqSXxEj5Bsv+AcO5');
define('NONCE_KEY',        'Mh+jB3Yg7o5UBtm8B65EH4tafKaOuj7Did0smkQlxBCxTh/Lc1RP2zihgRKG');
define('AUTH_SALT',        'VlJpnNY3fuEnSQ/ZMQva1tVE2Ba8pKEP/uBVqUQG/aZngdxyrUO4MOlDyrsO');
define('SECURE_AUTH_SALT', 'AOrJEdDEOANiQ6BBtj3mxJWSG8u8nEhSfpsVK9Tx9cmOt7juThzmy94tk2Ev');
define('LOGGED_IN_SALT',   'Y00B+5tJIJTgEX8oe1vW9Lmy6zopVakRnvKQPb4WL0gvOT/k38IhrnJYPi4I');
define('NONCE_SALT',       'rwJAkdzIrvJMEtKI2WdHSAZxnrpSeKJu/6zXeXiGag6skMyA/TMs+5h2uy0E');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod172_';
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
/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
