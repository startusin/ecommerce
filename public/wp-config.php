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

if (!isset($_SERVER['HTTP_HOST'])) {
    $_SERVER['HTTP_HOST'] = 'ecommerce.lh';
}

define('ALLOW_UNFILTERED_UPLOADS', true);
defined('WP_HOME') or define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
defined('WP_SITEURL') or define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');

define( 'DBI_AWS_ACCESS_KEY_ID', 'AKIAIHXY2FUJEEXK3ZJA' );
define( 'DBI_AWS_SECRET_ACCESS_KEY', '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' );

define('APP_PATH', dirname(__FILE__));
defined('CONTENT_DIR') or define('CONTENT_DIR', '/wp-content');
defined('WP_CONTENT_DIR') or define('WP_CONTENT_DIR', APP_PATH . CONTENT_DIR);
defined('WP_CONTENT_URL') or define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ecommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '#LF5E|(aBF5&DWW~rh[f||O~6G;AER4Yo sOh/Nfo$*`=l]F89BU<XGFn?6hTG9D');
define('SECURE_AUTH_KEY',  'IxC?dmd!=^V|j0R!/qxA F)+{{*:_t}2jLQP,ye0rYJUeNY_1ikd!IZLD6qXBS 0');
define('LOGGED_IN_KEY',    'dU[)5@cs*;pOpx`;:-2QT{ycA&[V U*__:1}efS~urq!T_,{:}0v=E]`>~yT 2S$');
define('NONCE_KEY',        'ylQxl!T%8E``3/-flh]3+lU^[Ckgngcr&gDp_>[Du~J4wNwTqG|@0_njIl,o^[Tn');
define('AUTH_SALT',        'rW1 k usHdwlKEYy+Rz|b=|F4=H_5dWex~+eT#Gl=48-t+6Mk$ KaYDt2UeLNoKo');
define('SECURE_AUTH_SALT', '$kqUy9{-P>%2C O*W:Q4Q~z86[+ohGWhwrz+cre}b!nA&uq?`pR6|oG=/O,eBbnE');
define('LOGGED_IN_SALT',   'X]vRn,^6yL4mt-;q-J*7@Z}FW#Ui,R+LWa(dTRe)b$wI99-m06#(rlG9/x+;Vdjt');
define('NONCE_SALT',       '?e9[w`2-wSz4`v7{vs@oFt[~pc,U`nw. H`qt6I_EPipGd 3a99kC~rzm;U0>ylQ');

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


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', APP_PATH . '/wp/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
