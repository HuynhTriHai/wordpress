<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'manguonmo' );

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
define( 'AUTH_KEY',         '|}GSD66D2+/;zI-H*;nEQefv^FI<(f9Eb%X,s<D}N)Z]V<Ns4OR>.wsxB2g[/P73' );
define( 'SECURE_AUTH_KEY',  'd.<nJ`kL*D0+7G,]C1OLsdT}.{joX!SSkrpSl5SN8%GoIe`;0jd9(F<REd`zFj?,' );
define( 'LOGGED_IN_KEY',    ',eWJlCuHh~d]mh8x]Oc lAQv!CXmTn0mM`6+Mu+|[v,C#$6FT.37oSQkw 6o(%)@' );
define( 'NONCE_KEY',        '-mpP4%)A!/j,nra2Q)]WpSADt1BQaY67l#{o15f mE*]+0F-1:L7x[-_yiRN@=Xs' );
define( 'AUTH_SALT',        '4*o%s?Nqpix5R1S@cFzB;{6_(RB^A8S6BtP17nX?.9D<SZ[fcx/>1a*@YSm:$ILo' );
define( 'SECURE_AUTH_SALT', '+.t=BhkVg+q*_+2k*Dg&qx>mmTa>onR(#{BB?M>acB+-qPD%UzD*Xc[(@s3&*zjA' );
define( 'LOGGED_IN_SALT',   'zeB,,;N}i[]Dg@q-?Fzv97ndwG/W8<=9c{*rNny$XnItfc=)_:Ww{*S%_y?(A<~[' );
define( 'NONCE_SALT',       '+&-Lg0QmR;v@,g1[zit<hGxKu<>5qt/}hJ*j)9Qg4!=_gbf?W<eBansQ*,Kr+l};' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
