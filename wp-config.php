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
define( 'DB_NAME', 'waitaly.net' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '2diligence$' );

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
define( 'AUTH_KEY',         'Cmx;8(!X6`Wo?>-tX8irF.$YEXfi4A[)&6Yc5,iNMxnwUi:2wDx_J)I+R=@K(,:C' );
define( 'SECURE_AUTH_KEY',  'dp0yO4!cF7yMI>iuPTR(-CWGa.AcS)UEEoH`4,_TI9fn-cJ Ysj)f|oVGf) J M%' );
define( 'LOGGED_IN_KEY',    'eg!h$jc2F{}Jc>T/BW^R5_aCL`Lz}o]PAJMLKS=#7%;pCe)[5[~~`aNZ/w:1(h*6' );
define( 'NONCE_KEY',        'uH#fG|E?Z>.X+}UgWkenN|{ ;BRC}2B<^ QY$w/%b)W]UkVtSrVTK[^X)G J)`-e' );
define( 'AUTH_SALT',        'n3AYkZbtbM;/Tdcse#~iyn7|2+0W/@dmyQ_=C>=y{2WPaBBe(^liYwD@1~_YVzOo' );
define( 'SECURE_AUTH_SALT', '|G5]OkoK]oU.d[rwc%8#;la>a2Utrw;Fa6Qt>CmY8miWko]s)H>nLdbX)R<E|jkj' );
define( 'LOGGED_IN_SALT',   'g#v8K5Uk()[|ZB#$qgOfN%S*372VD =HEq.m(^mh.FGaaiJIpWS Nu`xc)lL9B C' );
define( 'NONCE_SALT',       'ELE%=>+~Spk9B$e|V%5B_Z5,L6skWsIle>>b~k}>75CYp?:ef^>Xp%[oW^-`dfN1' );

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
