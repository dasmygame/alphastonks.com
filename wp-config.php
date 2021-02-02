<?php
define('WP_AUTO_UPDATE_CORE', 'minor');
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nyeruajb_alphastonks' );

/** MySQL database username */
define( 'DB_USER', 'nyeruajb_dasmygame' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MJthebeast23' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z:{njy]^5IUH6N>2^Pu!V(,W_xxZG!Mi_}$!CA)~]L5|OVDYur^oMk^O B8~S*)8' );
define( 'SECURE_AUTH_KEY',  '/;/Y{7{eOCrN92U&7|){Y;%Ut^[KgU<t ez}!}(U}myMN6IW+|=Lq&b5H1E<u#ya' );
define( 'LOGGED_IN_KEY',    'p;*f+}QAz$[$jo ><#_H`ry1oD^115xl,p!dJ![fAlOl>z$1|w.NN1<L?WE2@20M' );
define( 'NONCE_KEY',        'xW/cl~,v+G-29b}<Z88A/lp;r3DN{Y:D@JR*@w0SWYY#PlMmSc^A}(;=t9+b[ba0' );
define( 'AUTH_SALT',        '/6Z??wvu$JVFWEH2>py#-^BL=LI;,|{@l9/KF<4Z`frW4Xjm:63?JfH%56HwEo8p' );
define( 'SECURE_AUTH_SALT', 'f!^/8VTL< N/Z/x+ DOuhH=2r5p5*<ZXMVU*BX}.>f{Fki%w:]Gs;5<}?%Ry9=ya' );
define( 'LOGGED_IN_SALT',   'pUb6 /0SZk(kD.o}=vG#H^ibjQwctWn>O-kkL+O(?U;,:%pVvn54 .?$8o7xSm?f' );
define( 'NONCE_SALT',       ';$IF{_WncuuSXdE9B<kemZ<%i (|a+=d]HpA~9N7k&:4On!6RXPD5) P~*<?4Rqt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
