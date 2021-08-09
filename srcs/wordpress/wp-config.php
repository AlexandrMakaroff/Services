<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'qI6k.!~OM=JLzIej]W+&u^}g+y{:+1]H|Q;LJl*-K-dTbU_f1~i0;q$0|zTlbycD');
define('SECURE_AUTH_KEY',  '2M}Bg<LXmJL%w{AFMf6BxP9%>a.HYMBJ~vi:B*FOffZ6kKn)y=3+*%/. dO-N*?i');
define('LOGGED_IN_KEY',    '=E~44g8&sk~%bD3u)W)(>.XY3+=B%+Zp1O0>bYO.7}D+k!5uL;m %`>TOVGH)tCD');
define('NONCE_KEY',        ' D<fLfD@mR*UM|-0%<<o76m8i,Ao`(NtNdn6RBtz6}+fh(k.7rAL4lT2.dmrkZ(&');
define('AUTH_SALT',        'qR|gKash!vX> SjQ+$HIMsv]HeQd1o*x 4wiHsi`P/E@Z%4+.Ulm:w:YXMjq@%9;');
define('SECURE_AUTH_SALT', '=^Fb3#Y)p.p$YS0,qO?UnN|pJ%U|({u-4d--qSfvK_so?y_LJD,Y-x+c~-B`P&vb');
define('LOGGED_IN_SALT',   'd9-zjVj[Qr1wboz,Aw2<|il|~r#8stYRMp|aF]A%/DSR>YN,Iyx.WLp^H~Jeo[.X');
define('NONCE_SALT',       'V=y)mT`{$N ~>zzb%ErsMaE q1B9/Z%GFldB7l;_T+a}e-M{Uw&=Fps4USf#*bi{');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

?>
