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
define( 'DB_NAME', 'kaseraldhamandb' );

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
define( 'AUTH_KEY',         '*a@-iO[79>Hy=BcoSoR}2Y`bo_FRcj@*e1R%%Jg_MAm]::2U9pEv!OL4o{/dG<$$' );
define( 'SECURE_AUTH_KEY',  '?]*mQt|0U8JtXVE|c3|v,)20-A;jb:O67{{W3rF.qz`R(YYN<4FRufA/4|.aGD<$' );
define( 'LOGGED_IN_KEY',    '2D1z5@^1HBo-ykUT=cZ/fcPt(Jk%0VBI{%BLk}hC-z:kNIGU-yaZz*G;P;rknA4b' );
define( 'NONCE_KEY',        'H{}5*O2Z(SHH(|J3Xz{0*?c`]a7Dsjg>TQ,xReJV@ln5`[^AG1ysch;}cAOFAJsw' );
define( 'AUTH_SALT',        ';S-xfo4<iG./c)4aHu0a:thBzTMHA||vXjHvcu#A*i4PqGR5^[wYJ)F!R(?vjY(H' );
define( 'SECURE_AUTH_SALT', '?=rq_X~or9n0jo}8_vSPH6`*tap:FI:htiwnK`BlP}OeC |.t-!#3)Qs3.9jGCrn' );
define( 'LOGGED_IN_SALT',   'ByxNm{7~%*wl?r,FsDATysW;ojE_a^lQbQ<g-L%QdA-D#;7yv+: oCNOi8m<S9BW' );
define( 'NONCE_SALT',       'V&}{_k$A@6a2G6r)(gxG!U:P0rku9#eO5_f}%%u/hsGfu*-rD.SS@QU9(.zZ!a2r' );

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
