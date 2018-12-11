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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'zombie91');

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
define('AUTH_KEY',         'F?u?sBnpz@`Ma5Jt[_OHmA~5n,/VlY4g8LyhP7Ok}}O-Fup)16njZ}[<muH{|1),');
define('SECURE_AUTH_KEY',  'X=]K5fIFve|&o}qrK ^m,&1WpLmB]+U?LW7(0#<!<KC+2|5&EmP7,j,-VX!]>[$`');
define('LOGGED_IN_KEY',    'OD-w7Jz#[[x~?Z<-O4.19lFoPuq_QVZ*VFm.Vum,jR.ixj`k*8M)Z6.6?gr/^uBu');
define('NONCE_KEY',        'ObTdx3yuh=fvB_9yqTkfw>R#k-7_edpX<fFm_N/C@+*rD%2es{8}u9*5a}]{t_=K');
define('AUTH_SALT',        '2RMyjTOm.p^}J)c5a%va klQG57rd1EQ)WXv)sk$J8T7cgJIs;[!7K%_j{4tPun3');
define('SECURE_AUTH_SALT', 'PRPT*Fe@F6QdVj#ub_VKG++TC<=0Q5myt(e%UhvE8{1obIwU07#TTp>-GUWA<OY1');
define('LOGGED_IN_SALT',   '&|iB*=mM#i&Q?AJ#L =$h8RD%ZT=iON3wLez*FZ@tJ9>ib!HlZ@!b+_Z&0Dv,b>h');
define('NONCE_SALT',       'j2x9rVQ80rAs3bXk8qU+@S_.<{ Li+}Ii1B|:+5$7LI5&fk_>B#8`j~xzJ0iVYL ');

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
