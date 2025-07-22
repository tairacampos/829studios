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
define( 'AUTH_KEY',          'BL.,CvYL)QPv03y=T7,;bLjB9$[kBo`jGWP|0IfD)W@v:X=Lz}SqMaAaS#{uX=)&' );
define( 'SECURE_AUTH_KEY',   'GX:Su68Au28[@El7%UhbM:AQ*h+gpx)6M2#NXaR97$),%S6!wSpe<dLjkg@hoEoJ' );
define( 'LOGGED_IN_KEY',     'chVaYRcD1ZcH&.;(0Z*M>wSy.g(d|$0k^]SI2AO(.@An^]coG0Z~~2?0f9W(QW_/' );
define( 'NONCE_KEY',         '9X+%eoTms72D}Dc@6RAnh_~-`P0&J)K[n+ sqw%x@<6khE0TsZr51g5H~vG/Xq&]' );
define( 'AUTH_SALT',         '=$23GE<Y}Vus`3G%_XwmO^0c]U|_Jqev~s:`[O2L@z6T0}}xP^*I_Uh =B|LPs<-' );
define( 'SECURE_AUTH_SALT',  'jZq*vC*R2DIX9[Pb8xJ3+B0ao:CLA&^hxf}Cl~#orOU@0)t-b~hKorXs5Lr]y`34' );
define( 'LOGGED_IN_SALT',    'bWDl%!|IY?(.;/3b3n#^,G=,p0J[v]7`SGE~HBG~*x<@HA&>YQ?T%!JC|[P&-ZYs' );
define( 'NONCE_SALT',        '-.L7UW|f#HC0J^}l_fw6~K54NywD._zZ^ty3&(5iu7HVPf6`c*mJd:?9aqcpG*/<' );
define( 'WP_CACHE_KEY_SALT', '(H/(4X9mm,rJL_R+9s2X=@&#3SgCr8ByYpON,^bb~>tG)VW7=+H.HxO]5Xy1dXue' );


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
