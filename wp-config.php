<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'oshine' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'coQ;X*?`>z;o_.*]aF.}eJ<Z-pCpnaWFM7g1dp=y!FFWqtkwmk/gy>Wm:0_Hn}:$' );
define( 'SECURE_AUTH_KEY',  '`Y>x4z@6|w_M>x+3S5j70Ag?OL>+iToefq!g{F!Vl:Lnj^-(@B9wyGAzEI0]L#YA' );
define( 'LOGGED_IN_KEY',    '6:)2bE8#}+`iwko<g6y[fJ5hGE^:m u#vxGd1LnRT8S%L[b&pY2SP?Y|~ML#A220' );
define( 'NONCE_KEY',        '?KzM90%Y,#OurYj|+n<a*5N]O9kiBPg!aVK}Zkk,S^G]GA9f`C@C67clpQcWs8>.' );
define( 'AUTH_SALT',        'XDPUtDCchS)[ZRg_ni%e$O%3i5;KJbn2nNL3|JUIa%(Tz>(i{!8BNMUc Oi4Kz Y' );
define( 'SECURE_AUTH_SALT', 'yq,E:i[Xh+82*(B>%KrX=A{;ydR&7:Z+dV*VYWdxGJBnFYW[O0*Q^~h`Z_%%kl?6' );
define( 'LOGGED_IN_SALT',   '#SAr|%O)z>s>t!>CbDj&PV~r>G):N-?]|%$UC] Y]<}c7{BZgrvzDc R7fvR*K]V' );
define( 'NONCE_SALT',       'DWDfc0!9)mt2(w[sQ=xg|yiRRqu%zTF|E@CCxsXc0-?QmEM*U=,K`7fP-vb-UWri' );

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
