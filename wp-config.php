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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<cI<K]@i$dm]N<iZ{Wd>.KQ{P}{MqGiBX_Nci5v&MPs2.kV0G,Y>V&R3.[n{T6d:' );
define( 'SECURE_AUTH_KEY',  't9Y8WWQ`Le{dprO|=TKW$VV[@#?^> O$cc>D@I 5VKi,X5&)#G/&SJ$Hk+B$GzSJ' );
define( 'LOGGED_IN_KEY',    '=rox+7A*N@dfl|tfjvkP+hVY&+L|tXTpu<D^~j+]dx&a.r~0%!oP(juwHp=?-3z`' );
define( 'NONCE_KEY',        'uo  0sa?FC3q)SPkCSI&r.W*g/[2VS(yDOQ.t>g$Xw+:eUfSp_54g2C;rs<W+8Zs' );
define( 'AUTH_SALT',        'wp:C<`KHac v1Bsr!e` ~7vMasd`N|=7aWYf(}X(PVgUITUQ5XC^z7At8Q4`]J=k' );
define( 'SECURE_AUTH_SALT', 'U&[N]uYio! w*G^[n|XD#xhzOynO5riUQFc#cNt-}T/IT ZVGu5QxMv_bbZcAlPb' );
define( 'LOGGED_IN_SALT',   '98cq7<S&/~z.=qVL7;3WgUljccX-1Rx]5_{c!avYmZq,l4!zLrJ<=Rnxb6dj* o.' );
define( 'NONCE_SALT',       ';i/^loT,KnAoJ}{MZQdVHA2ciA8xH*+=[?j;nP^Ph*)UdE8MI=-QR 9OQYxEL[rd' );

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
