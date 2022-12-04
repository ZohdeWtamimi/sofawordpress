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
define( 'DB_NAME', 'Furniture' );

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
define( 'AUTH_KEY',         ';))KL4_mS^+$?=u KZC85$8oFu63OrYtP^v-N|Okj;hl.J/,VR<Ei9^iC|%v@?A@' );
define( 'SECURE_AUTH_KEY',  'V]9N~Egx.|}~.4:/fVSE4x`Y$q60d=<n;WJ=}|||^]{B=6<#)bSb.RyQt+*}G(N*' );
define( 'LOGGED_IN_KEY',    ']Z~o?r;66/(-.{[bs= wLHU2h+e6<AoQK#)9EAFvFMwuny8k}N6tp!Hln1aYp&>t' );
define( 'NONCE_KEY',        'v/AxCCXiwAF5#:Xd7*Q0Hhv74PAZ/EP,lnV8`<K8-i~ufH5l4NU)Jo4PhN(D}}=0' );
define( 'AUTH_SALT',        'hW7S;bI]::$4YJJBj`02nW!lCXSp`lhE8S{,uMU1JZ<#a6#gT4bm3sARpDnE5,Tt' );
define( 'SECURE_AUTH_SALT', 'ay cUtQ)z)s(2?A)xq~h|mJB*R;m5tO7_lk-}l5x4cdDQ:~`{]U/WP?O~[PN}G0]' );
define( 'LOGGED_IN_SALT',   'A!BXcnE6=mz=_HrHKfzoQDdlZY9uroP<e8hSQP5V7gSfO~DD7>o8imB8LGQ/Ep}E' );
define( 'NONCE_SALT',       '_8C8:v4!ol=Gu]Aa TARn}W@p(sl.<bq[6 lW~8pK7EzhJV~KnQVM2>XPzcR<kTB' );

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
