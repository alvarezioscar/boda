<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'boda_roxana_hector' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z3coJq1nU#T|fQtS~Iq94*F2[z@k`4e.2lE>0}vDM#^`0QsI:(vPQiw GcZ^tbRd' );
define( 'SECURE_AUTH_KEY',  'wG !~|.KX(~3jmmdZ(.g4Jdo#?t#X),>aor% =Nq:bTYHbing aE.)h-K@3L$YbF' );
define( 'LOGGED_IN_KEY',    'ZL v5?M/j!,<cCD ^}<{Gd{G}$*z#}]y$Z.$jyZ|gy3@@kqQ?[O*7~[:*j*hrvLb' );
define( 'NONCE_KEY',        'OwTf!F1:crr*e>qq+iMahStDf06[U|!fstk>W$O4pQVb0Q:X2fr{[4qCRA<pnsn=' );
define( 'AUTH_SALT',        'x ng&:m,x5,LY=ol/mfb< mFKzyd=2 <_tQO`w>RvnAo2a$+C;&6HMx%)D#@.{v`' );
define( 'SECURE_AUTH_SALT', '-/!UwA]m*>PC*]lAN>=_D:kTqEhh>EwRKY[DRwr]tv:#Q|Q*7hQG=UEGT,^M^,uu' );
define( 'LOGGED_IN_SALT',   'l(`_>W-E66F9%~H&64a/TkN,LL>GQOg,roi#p|L(?XWNsoi/ETl.iYt%h=)#$H+q' );
define( 'NONCE_SALT',       'rcT!;X?|*pn#](e,IWC^@s|O!~yy@>zi;Q]5*QTQznp&WkBBc:j8a*#_yL14<Yfq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
