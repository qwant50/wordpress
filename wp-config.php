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
define('DB_NAME', 'wp_datarec');

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
define('AUTH_KEY',         'M(>}=>Z)aK8w`gd|-NM|k)+y[U`#> p+#J-Q;sx4#)U+K8Vs/&9/x[L>s4Ne,Z%e');
define('SECURE_AUTH_KEY',  'U&^<%|Z<(#|<(0yth3su$vT}htfX%RfnTD#8w_8m%kH=~DJ,uN%}-b0MqoE9d]dY');
define('LOGGED_IN_KEY',    'H/*a[[9hjNY-h3:L7oA:|B Cf;<Ey@u!?i7!&XzCUj+KU}`&j$zAWbMvBPnqmw2d');
define('NONCE_KEY',        'FjGnq+;w5<9h*q`b[;mj (X0!@e?u-Zm-G]%L~EQ+G^#miLV}3^|>$|2#v^lae!9');
define('AUTH_SALT',        'jFQ]AK+,|NJ|hjLi<s=-~B2=vasUA<q,TfH%ot6Bj;cd&LNh&H(}eh o *|0em;2');
define('SECURE_AUTH_SALT', '0I-kaStdo+hY@CG.Zqv`(@fW}cOD<RB~~j=uG0ESZ&$/#Ki4awB8M](OvXux)jnC');
define('LOGGED_IN_SALT',   '&E{8apM 8<:X-@`#P!8.$?Ic1V`}3t*?^QTg^Le>w;u0N6D#re=C2y|x./&mu2%/');
define('NONCE_SALT',       'yHEyX|khX$a-k#W=;u(>x(gr|K+0+(CVHOrm(b b:bhObL6a7P9yK~w=+5`+=ItX');

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
