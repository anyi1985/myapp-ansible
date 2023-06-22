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
define( 'DB_NAME', 'anyiworddb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'test1234' );

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
define( 'AUTH_KEY',         'P|lJIRNI!y^Px0NY@C7k9*LX9%D#heqd~[(L<h}i5K%c:En1 [W?1]a&Sd?bdMf:' );
define( 'SECURE_AUTH_KEY',  'l+#L&qU2MaZQoxfy?oj5Aai`r[XYSB7y{ViY 9^/@P:w7*Y^:c1]IzvfdYw1/Q:w' );
define( 'LOGGED_IN_KEY',    '1X~iQV5FR::y@)g;cR%_`=/>8_.4W>;A/gdQ^Hzxwo%&,QRqP3}D0 %;<r5|gblt' );
define( 'NONCE_KEY',        'T-,UdS^p#Yo_4|LTGiH?Srgv{|`+}HG4eT ](~%@W@ge=*| nb;E.{2a+2`O#IZM' );
define( 'AUTH_SALT',        '>M^<+jY^AK>Si526n{H(9@U(+B3RuwHErrzE3<:?|c(A[JA,}fR j9P$77#]dWp&' );
define( 'SECURE_AUTH_SALT', 'z$m&yHuP)}A5Vb6*kllNRY?UT+(~Q >Aux3eL%e>9W7QAAU{1L2z|uoTR(?[hez?' );
define( 'LOGGED_IN_SALT',   '7n?5EGV-zxP2vl#J3I<i6FK*oHJDN+;8;;fc@-yhpp3-1i--^vjjh5jW[ZNC0*d7' );
define( 'NONCE_SALT',       '>.Nj4Ff2Ey4j>$P;df#SJ`@z?a43{w+M>U w!nO4ML ufZE_2nv}$f54;7 uG|=F' );

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
