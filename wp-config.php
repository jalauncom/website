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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9dJKhlk%}v;G? V4dSga),wJ>>[SLfq_v^ff:_<CE}|:GEq%}CuEb%I*s}V-BKib' );
define( 'SECURE_AUTH_KEY',  '&u<RqnJRXMSkURE1U*Zu,>tyg$0llOd2&)O0K+[[MBCXDu3tE<!_O&q/~E1P0+#(' );
define( 'LOGGED_IN_KEY',    '>v.G{YgW^FYxI=!^B^_NJ&KuZ.|hX/o-/7IN~;Qv+vQYosW0eLRWdLBbRRizk`)!' );
define( 'NONCE_KEY',        'i@+<}.d]Z|>I`ApDRm,fIM2xU9B1@(.c+/|?HWqN/VC%SDL}T*v:8[NZ]1$g!bJq' );
define( 'AUTH_SALT',        'qjp/@@2a{F(b+$>G}VOEsG&h4[dnR1~Kwm@^45UR46;S(?+*_j$2;sTU=Kb*QLzY' );
define( 'SECURE_AUTH_SALT', 'jL+LcQ~@ fCqzvHz>*VmjB_&BYyShwRJ#F||IqywbkRYrn.Hj7V_IQX^=@ ey;!L' );
define( 'LOGGED_IN_SALT',   ']7w>r{xMM_>[gMEOeCPZgXc@[,-E/DggX~0Rnkw4.^dzI2-bOgxU3t4zd+l~f@+9' );
define( 'NONCE_SALT',       'P+#TT_M6BqK%gvkUL.ohfxKN90WN,Kk9g~&g%N$?ac;`#>-tB_nX A5b*+g)WC:3' );

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
