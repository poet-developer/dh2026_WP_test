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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Mv*/Q1k9{O5`mLB@@Y$+3N9oow[+<}61D}k)L(<6&S)Jp,&,[Joi?kPkVVl5L [{' );
define( 'SECURE_AUTH_KEY',   'A9zyr>Dl$Ia+he8ZASMJJ&&b7$KUtP+$RMV*7#>%.>Q&QPY0&lXWn3:B`}},B$]P' );
define( 'LOGGED_IN_KEY',     'p()<Bvlp=[M{P~G17nLg@M$^(Qb!8zS aE#0DJ&BblE dMQ?y/l(M3-d(cp7ogfh' );
define( 'NONCE_KEY',         'TE@)y&^Udf2[9h-2e,?c5,fr3Yo!{fel6i)/J@,>5$@&OyF(ryW%g`^=xP%CL($(' );
define( 'AUTH_SALT',         'n|9N!PK|{v{)u]YX5~_Sm^tv$jr+_$HVbCW 0CoJfeedLz7:]Q4  1RY?2{kJ&n7' );
define( 'SECURE_AUTH_SALT',  '%cj9ToQNGbA#Bv)<e%isOb<Xu<zE[TFE63<0&&LkE*L(nE&q1)qA8w/-mAtT2)]8' );
define( 'LOGGED_IN_SALT',    'gJ/eER6/_[oO,[6YdqtLi79D|e5n61x;g6.g-GLGi+ln~p-B?Foka *?3=<gFV;Q' );
define( 'NONCE_SALT',        '36Gv^k{Y>_^DB LXiO/NWX%DGG(GgZveaT7qKl*3W7>eOBwoh}l.t[,$3IA80I^E' );
define( 'WP_CACHE_KEY_SALT', 'XH^enDSVMskPGb!mMBV_ZbNqUm44f=mL~f(.-d{cTO~&ZNo!!= 8lh76> 6)nV-2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
