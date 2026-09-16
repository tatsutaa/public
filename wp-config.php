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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'OJ;B$%[Lfypbn|$&/ekKT8$w_&]rx%RzHYV)mOfPUbC>XU?34$XdY_aeGL,{*wEU' );
define( 'SECURE_AUTH_KEY',   'WsbPMo?Rh^7rwAqtcG-h=mA&M7;l9EQ[>Ho!]lpyKd6q!mQ:$1]?Lwh/#.jbvkuP' );
define( 'LOGGED_IN_KEY',     '5GU]=tU2qV!f~$KB;}G325d#3ldw:pG{_xUEI^M4fJdEYjfr#v_lHR=@nNgO9M+`' );
define( 'NONCE_KEY',         ';>4ylp/L86<R1VNW?A.kQF+<l(UP:~q-T0<H}J;4G{5kvi`k(cyQA7lm5o2?M{v8' );
define( 'AUTH_SALT',         '8O} XCLpR$B{3DQ<1-})<bDn{&ua?r2u&a55VPPU,DfKJc[-ulBoQUEzNJP3F80Z' );
define( 'SECURE_AUTH_SALT',  'V7i-%_S~/s7#DzkMlQVnrG7{zEeMSeDYa1=;N3)AkqUxJ7^i Ky18USru3qZ>J&A' );
define( 'LOGGED_IN_SALT',    '_sMJ.j)imFqN3=ACU3U/l1EN$7tXcH/SwiCq(+N6aD822S5Z=~v*)m>d |#?c=lP' );
define( 'NONCE_SALT',        'T<$lz!Ppr3Q{&> 4ylM7bFV )@(pg/ew~FN#fAyhJGu46%UGyp;%njh]al>**w%K' );
define( 'WP_CACHE_KEY_SALT', '>JgR?<RX%DK,m]8iC2txUEhEihlfil(MX%V3gh%7sTdQ*FiG}QJEfd*.^m?FBM-l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
