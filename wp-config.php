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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         'Y0aa-oa0UH0~XA>*:f&f?-c X8*5-]$3qXwAM9GX$<Ht:y~}ATqU13V{V;ECv@Xm' );
define( 'SECURE_AUTH_KEY',  'l%p9~6,8(ZB{N/&q[=EGl}0THdVo^(d2EI(Rm)gVZ]ZIl:~z,+9FqQmUxPW2dNY.' );
define( 'LOGGED_IN_KEY',    '7eolnnzpA(]b>T<<BATRZPD @$&4@h9/sC&8luZS6TEu<UT/_H+VSu&^A!N1[FqY' );
define( 'NONCE_KEY',        'I{@tmc)PS$w0D,4wJp~GFZn%8./*FC}*+jc@fQK6GU4XlK0f3^`eBk4eb~Ov]n2!' );
define( 'AUTH_SALT',        'cq9l!=4~$GEUBW )1k5*kLSdTg.U{tW&3(,q1 R1ohZ_rT6G::^(qp!qc>m9Hi++' );
define( 'SECURE_AUTH_SALT', '/kHmag5LR?ASR0gDY6A#K3cEm//%OB/qvC`Ayb@6sAF|Racp|7zlKPrt(csk}Q#~' );
define( 'LOGGED_IN_SALT',   'pmZ}&@v)&DJ_:&BgDAF%:1p*<DcQQ%TeL5THGT=aMhE2?N[vF/6{[1@(fm3-yS(L' );
define( 'NONCE_SALT',       'NH@qT,>@p*2B!e}Z6XYX&yeCQ1ll_N%]g:t)%g#.Ec.NBxcX8$R7xNm))Q4n(Rgy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
