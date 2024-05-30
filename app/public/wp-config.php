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
define( 'AUTH_KEY',          'X<aWC;mq1n6?f/isb%wD%<7%ccaXo,g[D/<OwAR/mI_]dm1)pkV7he1.0[l3g**g' );
define( 'SECURE_AUTH_KEY',   'lKI*%V1?b5Ld<R_`*n@Jb#zq]d(1yt;}2f.)C:&.QfBW2R1XsgoS!/+rId(@8!gd' );
define( 'LOGGED_IN_KEY',     'V<NaLWZe1]~Z*/XCvDp;aV#G&EAUxPuZP-c)(SZnPS+_.1c:`Ta,^TRB!nB|wr>|' );
define( 'NONCE_KEY',         'qwMO5R*U{`6BbOa-%w73@zOz?5^(aG*Zf)DEW,@ONE7H8:72XF;Z]:W_XCfz9d~L' );
define( 'AUTH_SALT',         'w7sulqbg%f]}]JX%hTzc5bPC4~t+(hMZzKHUe]z&OXVsT{EvO?1sAboS)@*VmGRy' );
define( 'SECURE_AUTH_SALT',  'Wkg;JsILCN_5|& B$LvYTzy.DI8kEdwx+ew`Aa,+rM>MnX-V$3#]`]k|6v$r=?y*' );
define( 'LOGGED_IN_SALT',    'f7=Eg<h#jLTAQ>`r_Jf3<(NTDd*IEqFQXU/X_oyHD3W*zY-%RCuSe(I>HL{=DQK?' );
define( 'NONCE_SALT',        'ciI6vEB&}.O1(q!0@uYk%X|N[5Ih/pPLhl~nK:hT!Iq>.?ac* AwfyjIW^idIMAo' );
define( 'WP_CACHE_KEY_SALT', '$0}a#lqo1ABEGZi.<`vw%zgCZTFjhB8|IRs8Za !<KPkK9;;8=Bg/+G8k$zxD(kz' );


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
