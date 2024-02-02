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
define( 'DB_NAME', 'newdb' );

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
define( 'AUTH_KEY',         '8~O3va 4ytd3SzI93vH<fT|srj&hMJwisWe$Z9p^1Q,V9iEM8Fe+`C|}_q~C;]gO' );
define( 'SECURE_AUTH_KEY',  '-Lg%[bc5DH&mFyjPWzg0]&,s_2-d%q8Ko]n>wE&msQn(>sh+,xCu|WBoJD6tw7P|' );
define( 'LOGGED_IN_KEY',    '^qt{BrX}BcBMNEEjPl]f-u@pv5]rp6T.{&:akgXKv]VNp|`gn,rSOgqNe`y(B,4O' );
define( 'NONCE_KEY',        'sp hdWxa`3pf:nrb^_j#?D8Q V-==KI=NRuGi*3<O;LNiHH01lv{Li+;`%EZyyiL' );
define( 'AUTH_SALT',        '9fU*)Ja$_R`*G{AK2)w;&$~3++s;LXjI4AeyT$1`>!^sB%Y?(8T/^%b]mZgB&%-S' );
define( 'SECURE_AUTH_SALT', 'rncALcK{//)]jev0BLhC{b^;fQYIfXP4|& V<9x~6Qd$MJ6`Gz2/4?((b@f}4e*i' );
define( 'LOGGED_IN_SALT',   'dP!Y>|@yFlnNg&`U#A+ilQ5Q1E.GBj~Ks?qB]sh#2D^&A!W4?P~2wg~lwG*c*H})' );
define( 'NONCE_SALT',       ':5Zr=,J_Vyk_.M[(kP!(khXU19+>F>~U$z,[FHG;1zAoLiNiA+>$]XNZ%tj47Ks8' );

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
