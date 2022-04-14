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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '{s!k4~gE9H>%HRiYp^6WA`HfD%=m!^C|=<a,jbyk,sH%OtnD[]?cG{dwt0{F&:a)' );
define( 'SECURE_AUTH_KEY',  '4m</=JUc2|A@#lPnUE($7vx~^{w>SS,[DGd(SSjW.rQdk9R9660>OLnXSi#i{T@K' );
define( 'LOGGED_IN_KEY',    'EuNL+:-Z}9xb03xd>AJfTbZk`/IS88WzZUL46Ld:2TTwBb&ZZ=w)IX7L=d`exb-]' );
define( 'NONCE_KEY',        'SIhjx_Cz2q@d#<[3S bNT&:9361BX L!H-tR.S6CkBo^=|jS 66$jK-NhgOptK8(' );
define( 'AUTH_SALT',        'Yk;5$&9G|MATSi7~~2Cl`L&<~^H9)yVgw`esQ=/Lm:]9DPxQBBYuy|1`Vr!a1G<h' );
define( 'SECURE_AUTH_SALT', 'fd6vJ3l[@jmdRm5ueem187$PD*;MUgCgR?Q#h-<Fu]8Pjg[]#cK+lS,giE-uYuOg' );
define( 'LOGGED_IN_SALT',   'b0at:KB|.3afE&+kTA-<Jx!]Hl/Fu+[HD6 o<U`a)]_ RGhp42N6JanV^vR3PqLw' );
define( 'NONCE_SALT',       's+80aK]H9!+6i=>)^Q3v|$/hw7_)i*6Eg59z9-xc*`w|gfqpSwm(|0;+BK!)@_:H' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
