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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'berg' );

/** Database password */
define( 'DB_PASSWORD', 'test1.PW' );

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
define( 'AUTH_KEY',         '@w9T% (jA93S@@`xVPhX5<Y5HPH<o?<wxlAk1.$dS+bvh;H?U1hzLXhGv>0!]g_N' );
define( 'SECURE_AUTH_KEY',  '1X+gM?d{hJ;}nmeGowXdpBb!d9ASsO&J1?:}p^23fsg2qyQ4SM4tGFe[t%BA7OMs' );
define( 'LOGGED_IN_KEY',    '-(+,Q^{];Z. +.-f(J&1M[-$XpJ^s5&F:LP#=FKlJxKzjnl+- T%J2j*@dX>X{w`' );
define( 'NONCE_KEY',        'M(iB3]<5k;vzD4K-wGg2?gu# [dHj5uz{*oT,:c[:LJ7lD0h#<=@OY)#|DaEoo:{' );
define( 'AUTH_SALT',        ' ;<(uDbYBFkI)l2=-E_);g`>ykX5@hWRIXH`WffYWBuHY-+GNF#Mci8,|nh3Qc03' );
define( 'SECURE_AUTH_SALT', ':gJ:w4~EkkH#XVO6Chq?v-W1Grtl*>s4GUXgG_lW)9X.8)!QYs=WC1 BeNcH5f,d' );
define( 'LOGGED_IN_SALT',   'SiI29~~t,QEB>.?jaw?D<.10(r6EW-goek8KID%o033IY^]2OQ99b1~mD@?m#*cs' );
define( 'NONCE_SALT',       '^h0?GoyWLy8ao2^-%y VQR36T>1nwg(05-z=:G~,,jg0q.6t_[}yy8a#U61}-KS*' );

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
