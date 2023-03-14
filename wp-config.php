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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'H}g5t3Wcs9gyxifP@PAbfru4{C0HlPE4aNU])t&mu44)/CN*P!UyrBl^x1LK1,Ty' );
define( 'SECURE_AUTH_KEY',  'baXJ.TM|UF q~xv>{`@%02Zb(QJ=G$[N*:8O~7p:OnQ|ola<m>nFM|YYWUOCS$R^' );
define( 'LOGGED_IN_KEY',    '_*W3w}!MCR@U`U+=p R|V0$6Qj(yt%OWOJHoX/@aKdu[rn;4wHn!U+0~I(Pk<D#O' );
define( 'NONCE_KEY',        '^;#[C=/ji!LCNaSx.2ZdA`1e(G55E<sjCo[~v6I>*(f;j`He%|A-N5R]YCo[);2T' );
define( 'AUTH_SALT',        '_9ZY8fI1z2sH&n(:!DR~QzaX<Qq( Z`iSa$PzH8Q<WR&;;mP2`JXBsiU?y(1b/{^' );
define( 'SECURE_AUTH_SALT', '.-7h({m}P|WBIZnH67)Gk}l?/VHDE9hmgOla6=`9qPZS(gcbFG!72 Sg^{-:8<j9' );
define( 'LOGGED_IN_SALT',   '3=fgJXCyKh:sdGmK06n-L}g6}6J?%z7%eOnOr;;Mr([IxS6`r6gVP9|iC}Nf[ RR' );
define( 'NONCE_SALT',       'bPKTF<qo%r<*9.Dr88ZLo7WV3SvKPjyuBy</,3A+;3f:=@YF:A1X)_s3[:]~2[d5' );

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
