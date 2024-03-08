<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rpni2_monagence' );

/** Database username */
define( 'DB_USER', 'rpni2_user' );

/** Database password */
define( 'DB_PASSWORD', 'rpni2_mdp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2e|6w1H`mWHOy5DEJ=x977uJ |-Bs5W6xx&_o`@5N4U9zU9YHc|p:_kSHh;:Qw``' );
define( 'SECURE_AUTH_KEY',  'e:^ikeWx>RYmwck6Ao$*j&o=xZ]4a8{Gherl9l`3Zpmgb#FxQTBaR[<0p84pb~8K' );
define( 'LOGGED_IN_KEY',    '(ebbXLQpRlrb^bOEEa<S5Qjg&/mXaH3+g91h7x&V(zL`Vnmh6gh3zV_Iwfv4XPH;' );
define( 'NONCE_KEY',        'o)_[tRz/pz,%# |LVC+bzZ?S^7Z B3CQ@#%X>`&q7SH.ZSYj55s=O*l|/4n:Xbc-' );
define( 'AUTH_SALT',        '^7=.+f! LHXAYD:Ya?~G#mbeNXzwIfbGxe%_SF*egiQ>3C:D|Vz@+[_uTuUNx0xu' );
define( 'SECURE_AUTH_SALT', 'r:CO^?*fMqC<Qp). ^n3ejF+Jo.&Uk?oG:7P^Eqao#4E_6]z7.8NUABFEk,fuw3D' );
define( 'LOGGED_IN_SALT',   'p[1B]#%@_^-=W9[Z.d:C3 `?e%9Wks(%o}uEr4vpbl=,T(Z$X 0Ve^HuT?|.o(T_' );
define( 'NONCE_SALT',       'NZ%JNO4b_]sRCYYKw(_uUx#f<Etto^~lD }4Dn22rrpaL[Qya|WR6CZJY4+Q7*%5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ag_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
