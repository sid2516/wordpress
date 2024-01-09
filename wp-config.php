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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '+WVZYwoTkD}%^IhJ!0SSfaX}/FEFY:KAfF?a#h{J>/(1h_Vh]FL]}Q0f^)+{(Kc_' );
define( 'SECURE_AUTH_KEY',  '9eglPx9a46l_[)`nfyW%!^wbVoa6[?:L&4x1L)}%i&d-sl=%jd~;vI>S1>J^8!KV' );
define( 'LOGGED_IN_KEY',    'q_53CU%ZFGI1gs9asn^ g/bN?I)E7POM]@Njra!^rzwQMO-&X-n<aL-%RRZ,O3`*' );
define( 'NONCE_KEY',        '-_P>ZLRSZ$!L%u3w<.7n^S{[DE%}SEZdYzH)Js0_Se(!@#}m!>^=ky)~!XoO?qcj' );
define( 'AUTH_SALT',        'vWp9+bf&vf-mWE6c:N]6G/`p.nZJ(U2uu>2.jXnO7h&;veqZuw$+J^yE%/!T04{C' );
define( 'SECURE_AUTH_SALT', 'tQODQ#Q,zo0x)FiF{JlXExObpFr3pJM69gXd+Na-Nk`KSH=N2j<blI2W;Ch7!1gF' );
define( 'LOGGED_IN_SALT',   ';ra0bwVKmI/tQ<VIY<7FqjJ|w0@#lW&thZWF,c;e~2-v&;yK-ROYCgRh<7 [bxXG' );
define( 'NONCE_SALT',       'M@ 2$ZOQF3HB-kM/_3,/#Q8N*1@b-~?,(H>^1OpX#?Z}rMs]+9{CZ,%mR`p+~gim' );

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
