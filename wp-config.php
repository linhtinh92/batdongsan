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
define('DB_NAME', 'batdongsan');

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
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?.U/mP^va%Ko:mNX2mz^EkN[ _f7XReY9|2sz? OIjvvpywPQ(_&QJv*#KFcEwV}');
define('SECURE_AUTH_KEY',  'nUCJKmEV;?,0E(s:htZA(uy:1nWD)L6GuYW8Q/5ljgZy1,1NQzVg}RLXxy9DGwsf');
define('LOGGED_IN_KEY',    't.r2/FYT^ cm9_UuPIR$Z7TPfkF@>]]yQV9r<v+oQgoLo0RA/Ys2yxigu&@>l}{@');
define('NONCE_KEY',        'SU*H@1V+].y+,66c63l6WX(rnpc}Y:)263O=Ds!6~pkf[FGYqu0;H06u1wg-I82n');
define('AUTH_SALT',        'oNsa7S!]!d(gRLi,{dNA0MIYi2Yo2[x@4OX4(+.idFrjItnG7SS4Go6o&@l{s]2@');
define('SECURE_AUTH_SALT', '276[2# Jp(pkpjS:d8>Ot@.+;6=$(h[0AfP}oow%p@wJ|2~R?23><^THOO3d>|<V');
define('LOGGED_IN_SALT',   'F+}yL,|PAm@>|Rr5WX4fTGT=h@nK{&&sePUX.+49g(L2^,RdG-vKt`~C72$el;d!');
define('NONCE_SALT',       '<B[LPsFp+d/6l<|SD^<RR!L@FVBcSukfo.I5`2,seKrYFTkZwW1}fM~=MYN<& XA');

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
