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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '}_o}/Clp6f7HJ:>XKc$ w=Rgmn]K=,J0IF_nE2iOmDbbD^v%X9azv%6zCR0HJF81' );
define( 'SECURE_AUTH_KEY',  '!TrG0/zP(W&#ZQw=6zYx|_;i-&%<-Qp7|=`Q x]-S)r?~^nCcEY[S[+pqq 68$+I' );
define( 'LOGGED_IN_KEY',    'kvu8oozOcle&PkPli+rm52.lq?:+j|:i0B56J =<O,-@ K +NC>0*T,89LDQoEhW' );
define( 'NONCE_KEY',        'lmXbMP9[N]U&>R|f4VgZZz3Xkj?G^7(oa 1g:Jusw%Mq[1*<av[-L8uOK#A/R7O1' );
define( 'AUTH_SALT',        'l[Jf;@Q,JyZsi}wLL}A#>(qkD3=39k~}d7LU|RxO4@lpDS}5,OGJ{13Y o:F]d@H' );
define( 'SECURE_AUTH_SALT', 'sw[!!T_{vsEjXvflae%v%HL1/NnSqE]n(2D6NJX@17v}rv/GX7l4ej5Gy%NW:*pI' );
define( 'LOGGED_IN_SALT',   ' +6h%r3$ukk7:ZHgHBXPXAw:]Y+uFGZr=_jNP>.K:&ePMg|%zxh]JKGDsOP+2aQb' );
define( 'NONCE_SALT',       'kih@T~1eF@qj92GPw~il3r:`m6TkJcSzYP$dYr,d$P*8VGEwjipZ|MA>M>oM~)!5' );

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
