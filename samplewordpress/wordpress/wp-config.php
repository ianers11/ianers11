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
define( 'DB_NAME', 'samplewordpress' );

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
define( 'AUTH_KEY',         '#zh_54q#5!,d)S)QXMbJJ=J)e|/fg9E*%;Bne=>IR-Ox#Uc4&o:X,=k9,%/M/#!(' );
define( 'SECURE_AUTH_KEY',  'cuO4K}=buo6)~fj$6G#4*:yy,{p0|osxQa2KmYCDg#-wP!uV9#yNgZ&m8>B.4TD:' );
define( 'LOGGED_IN_KEY',    '6Jg[ivDi%|^c+oEAn0.nyt3#t,sADbcG!k/.3%Ba2io)_5ocwU8yvy@S2?,9og=X' );
define( 'NONCE_KEY',        'rz}6@NdOVo~$z[^$({(L]kY./4! F$=Xl!0~%,O[y!J$sy|,^]VvAWdw_W=SdP_f' );
define( 'AUTH_SALT',        'P=T5v-<{ vc7($8pN>PZi.k{:PbV3aNzTzr$j|EcVTqH=!-YD{6.c%2e.zcs@^Vg' );
define( 'SECURE_AUTH_SALT', '+v8ID[kK[0fz3KxSm,si,MgB}W<-5WL560%_Lkm0XGqJ@dMeE,MvGeN6*eYqjT*E' );
define( 'LOGGED_IN_SALT',   'jkg/_+wB&T~=Qbn[s]>8R(E;C`VIJ;,>hS`TLYYPoI5]$QCp.<{1XE}[!cuCMxdv' );
define( 'NONCE_SALT',       'v$<$,s Oa`;w7o9VNPE7(|euhbzydu$g-*LXE%AV@k-*gF>1eHt=e T!y|^M&B<+' );

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
