<?php
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
define( 'DB_NAME', 'firefliestravel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k81=R|cpp,rgsRb?6|(1$BSF17B39@&72`j`RVArt8:ZGMlY+r^1Je<%o,n;.Z_>' );
define( 'SECURE_AUTH_KEY',  '[=#C^MvX;yEI9-J#X.-ST_qpaKcCp@?2<~AY/o1M{tsuUs:-w7T~cx_M<s9b+L;6' );
define( 'LOGGED_IN_KEY',    'kTT=`bghj-$V2.t:&mACo&5CvDRb6:2%wIs>DJU`F`Q]3w7Wm{`C}3cBXuiPkKgy' );
define( 'NONCE_KEY',        'Z*/B~nnE C*ZC8%?J1bemKA91Kv^xvQr%^{yA2y#>>yrjf:XMN0)`:8?E6ERBUvV' );
define( 'AUTH_SALT',        'M}DF/BB/CiqRFa_WzPJo*k5pBCnzq)D42ZX?dmG2&a9id;*P!GXDf|!@<>N,u|VX' );
define( 'SECURE_AUTH_SALT', 'kk!@(GW(|cLiS!ENoi=Y!|}LI~ =0Y_0L/*ku*t<na8pYS _d2Z7EK`fAIyOoD$y' );
define( 'LOGGED_IN_SALT',   '-|euzl^v]0:E;pL ]YGDY]KcRxZBM[kag/]{Ctixw<n.3Zq@eg8@>#uJ]DRp$?{l' );
define( 'NONCE_SALT',       '(3KgRGqcjjKE*kukW4L$31JzaNOD/Mu(L%#&ZT@v^#|~P[5Qt:N@bb,FlBl<BT8v' );

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
