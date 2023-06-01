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
define( 'DB_NAME', 'epiz_34213807_w919' );

/** Database username */
define( 'DB_USER', '34213807_1' );

/** Database password */
define( 'DB_PASSWORD', 'Yc2(Ap3[S8' );

/** Database hostname */
define( 'DB_HOST', 'sql104.byetcluster.com' );

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
define( 'AUTH_KEY',         'drtfqk6w6dxne0gwrnsvf3ugyogkdwqpnvu8bdybhu2wnmqkvssmp5tsppzzoan4' );
define( 'SECURE_AUTH_KEY',  'gw5rbsmieozksnftvuotn7watahnvwjpl3hqz9hgjk0ayl2nmj0mpbepwazcsyhg' );
define( 'LOGGED_IN_KEY',    'w52ujykn3vdmwdn2o96w7oaahlv7wynjbof6paebgi0pauxstzqcwjtco9cctymm' );
define( 'NONCE_KEY',        'nbkbgazwfa3hjpi8hxh1uryifez4l8wuwrhpgx9stxys8styobrnirrj37yjuxdz' );
define( 'AUTH_SALT',        'b1kgfrottwnhjabz2a61t4y1oiqoxot8ni2xzncrfmzewzfheac0gjlcf6ax8rwl' );
define( 'SECURE_AUTH_SALT', 'qut8hqb9gydmrnnnbpcjvemzjxpjp5ul0hffvj3yqstpnrt9tohjpvy0977oyn6f' );
define( 'LOGGED_IN_SALT',   'yfxaf4zo9hq9y88qdpifhu2mepjpzgeaedyqnhcssxcssxjdao9sclyvbkdl2lvf' );
define( 'NONCE_SALT',       'kemwlxalfw2ubezvjxa0ecmcedgvziq3hm4q3lvsjkoxdjo4wczcpy5bknwnkpoe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph0_';

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
