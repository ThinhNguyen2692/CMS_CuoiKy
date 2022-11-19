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
define( 'AUTH_KEY',         '4-*LNda?*rfQcam_Y|N3zw)4O=<eU/ZlrgpsHR-_Qx8MUba@m~<j*`9v.lkUwd^&' );
define( 'SECURE_AUTH_KEY',  'YJ^3HY:T8zD*at7&:XUdA0|g(!u7~K[YSyq^.lFn3bD>;$73N/)Al1d!{8mj*C;:' );
define( 'LOGGED_IN_KEY',    'su:9?-B?cf?3Q7dytTC!*WC/w;y >IphsL9z|QWrV`9@uyNoPB9dkFb95I934 u@' );
define( 'NONCE_KEY',        '(PHb!8uQbu%Q9UN)40nU^tsKI(o^E$#jm#dP^U;Z3@_#*=wCUQ|F^Qv]gK3l!d5z' );
define( 'AUTH_SALT',        'Tke7O?r=W8A?u}O}6ps.Ozs0wkV7C!z8{|rml2h2iIezvjZsD]wV?I4XeoiLuT(J' );
define( 'SECURE_AUTH_SALT', '5(2k~:n5+y{/=qntOAAbqX L@0bP37,ADS6.lnWsT.Cqsg!H=@FJU})Ah+MrJ=vb' );
define( 'LOGGED_IN_SALT',   'jf4?~C*(*WC`yj3Z~qeocrtv!bsnN@M{U7vlk^hu_)HVG:Ci(0p)r{Z}!3Y_vaVM' );
define( 'NONCE_SALT',       '7rt=>Nu{*8<^on98`MqbFj@gK,vX|*H}g)*^laF)TZR:NcV4KM/>]^FS4a_0rMa~' );

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
