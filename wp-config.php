<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'construction');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'd9]jWgQr$,%4UmZ=^4#Da]_)w!^XkL IO]jnYrL&03&}^z>V:moi0A+zA+*Q%`2}');
define('SECURE_AUTH_KEY',  'CJf!M9Oxi2B.]?GGT--3`{9bQlDKa!u^SMc9)[j+T KV-8-|Wuzk=y<Gl|j=!gad');
define('LOGGED_IN_KEY',    'q}=-tx]]m-yx~O2P<$hx:Gce!;|sU)6t.68eF(t$P-9pk(1|-$>e`9cJ6>PhlR-x');
define('NONCE_KEY',        'C_t-NcxkczGPgBD*p~mg3jgGbDR7C?aYRBh)M_x:N-.,Xik[T^l)(pk>8mqr7s?G');
define('AUTH_SALT',        'T^Q?I9nFkyrlRH+{@V54)x3cM=.Dg=<y3`U|!H@`Pc+!zU=^$>bq5$&ZY6Rx`T,M');
define('SECURE_AUTH_SALT', '[Pm{]*<+:~Gw27$HFAb`Iie3zA4N+9`3Pue{q U{bNDy7X0uO._^]o^%$F+u@D<~');
define('LOGGED_IN_SALT',   'gH0-+k@[FU1G/W-u`<PI]5VQlN>}L(JMiWW|vP9u)M 3y@~=VTRFRbq1h(#w|Ia9');
define('NONCE_SALT',       '4j/<.TXuwC|QW$5Ee7L3{DOQH89$,m%!Me|Zj~ys]J2g~~;2N8:-f+QzJj~R3)+,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
