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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'filial_cerveza_gtmo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xmL:90%|]]Yla0J,4Urwl&tYg!;AQoo_.O<J/]zjrA0#Fgmo2?Z{o@} y0bjn<18' );
define( 'SECURE_AUTH_KEY',  ')oi5:^hEh?KE,O,q!2LTWthsV2 RNu)B8/->pT#~Kst0R*iw98q`qUu&^.v9;26$' );
define( 'LOGGED_IN_KEY',    'u_Gr~hvzO,Y0)t2WNhAxXfo=u@2I7o)GaM1o~w?Djdhz(JJ2 6S]kADZZcW::fq&' );
define( 'NONCE_KEY',        'X?z$,2>po#3,7sfw}H%s#}rFkW5D|5Z%f[8Y}`r6}`!tn]JueBeF|qH6|lR}%Xau' );
define( 'AUTH_SALT',        'm^Q~,{^]dPgmkj!lZ;dD+Q-Jds}GfFJqyQZ=w1OA>nN6lD#H4]zzxela0e6n6P]y' );
define( 'SECURE_AUTH_SALT', 'dF&Z$X3iRHKu#a<XBq3K{&m&WS 13O}s+v +-<M%Hi~?it8:0wS6;-~7D]c. {RP' );
define( 'LOGGED_IN_SALT',   'wpp%9IH UT _KD{#~;{pWN^EPlo=T&e)vQ|8P*S!PM~;Az268R `AHK_S%nL#,</' );
define( 'NONCE_SALT',       'B=}Te+k8,}v64ra6i`VJ<csQy_vh?-6 h#vw*5nu#^UtCxTAvH?wj~v< 1t;3Gz.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
