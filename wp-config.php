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
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         'r539D1K=RMW7A4dLPxr} 3NQPk0p>.%y4p&#(^,wduE<);5d83z2Toi 2u+*Azy?' );
define( 'SECURE_AUTH_KEY',  '@on$d]uz~~UApDQ?9NdX1DOS`|7J(Hldjg{i$g2%L ^ipON(Cz;`-?#vg^eXYAn:' );
define( 'LOGGED_IN_KEY',    ']/}Hb6.V~~*47o[iuh50.cx%TEoGJ%]TnSQxi1Sq-1y8~o16P>kA0]z|uHNatq~9' );
define( 'NONCE_KEY',        'O$v|AW5%3t3B:JgEVCEAJ_!V1qdeu9^3n%u@BM24{,-f^2)q5dP]+Zcb=1)1ENwQ' );
define( 'AUTH_SALT',        '~64?RwF1s=>[|a/3Tq*=|/53hyqp%KlL!7,i_x{Iw.Ec5ut/)7s {=V&*fmb11Q^' );
define( 'SECURE_AUTH_SALT', 'v]}M61.?oT!)T:sc?qHLWC|2i27&Q|_[C@Cm$Y)Rv9cnauOjH,thFJetxBoH0LNs' );
define( 'LOGGED_IN_SALT',   '*r=<5s68BbZd{DNmc6O9,KL)u[_0(eiaNhOq1a}4{P*jNU: CwyoV/TMBfD0Ac/n' );
define( 'NONCE_SALT',       '4!fEM&b#6].&kXo.+PE8Jp|>O$QT9~+3;8zyAg1:2l|I.j_ 1a*Ht{c;M/i^+@33' );
// 获取当前请求的协议
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
// 获取当前请求的主机名
$host = $_SERVER['HTTP_HOST'];
// 设置 WP_HOME 和 WP_SITEURL
define('WP_HOME', $protocol . '://' . $host);
define('WP_SITEURL', $protocol . '://' . $host);

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define("FS_METHOD", "direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);