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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'b$;N|_uttvc715LEJ*LmioR@#8)./>/,Lt8RXj$]WKs@RL5MQXjnDc{R-OpZ5p>l' );
define( 'SECURE_AUTH_KEY',  '3gxr$[w~d*%$]/~%-UTS,~R-X=FR{xv=}6bJM`sA[vDAm61@ c02yn`GXyGPh-0g' );
define( 'LOGGED_IN_KEY',    '#M-*bhB=LO:[Lrj&w-SrF5;Kc0mGu?}p8sEI07[hv/;85=sUS`efEg!;XbIO?DGA' );
define( 'NONCE_KEY',        'EbJpLZ)iSEg:#<#-6w}fUVkG9:KV#;wUn./oTo%8>,y!Tb3L4x:v=I=r3@B1L=zS' );
define( 'AUTH_SALT',        '43.G&Zh(D,*e4@P8rtjk@1^T^A}tiv.1;e]( rXd4LF}ND*Q`,4,II)V!4xr sdp' );
define( 'SECURE_AUTH_SALT', '>=|xg5Pv;bv~^UD6f,KJ>-e2i/Ca%{AS|RsEB8QLQykso|HX^p[hGd%%&2p(]3G@' );
define( 'LOGGED_IN_SALT',   'LGxtaFeF5lRBJi~H~JGO)]$i#dv1a0GU0^_JvVE5KXrEKD8-<2< r-y1T=7dg}+E' );
define( 'NONCE_SALT',       '3bt-Spf[^y!5C41!A@`~n/(pZJQ`,n{33 `,+2~Xg~nsb{#jCsrQBqO#U(|(C9>8' );

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
