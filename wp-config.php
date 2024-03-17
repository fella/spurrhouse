<?php
if($_SERVER['SERVER_NAME']=="spurrhouse.dls") //change if local server name is different
{
    $db_name='spurrhousedb';
    $db_username='spurrhousedb';
    $db_password='Sup3rf0xy!';
    $db_host= 'mysql';
}
else // production server database credentials
{
    $db_name='spuruomz_wp681';
    $db_username='spuruomz_wp681';
    $db_password='Sup3rf0xy!';
    $db_host='spurrhouse.com';
}

/*
$db_name='spurrhousedb';
$db_username='spurrhousedb';
$db_password='Sup3rf0xy!';
$db_host= 'mysql';
*/
print_r($_SERVER['SERVER_NAME']);

define( 'WP_CACHE', true );
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
define( 'DB_NAME', $db_name );

/** Database username */
define( 'DB_USER', $db_username );

/** Database password */
define( 'DB_PASSWORD', $db_password );

/** Database hostname */
define( 'DB_HOST', $db_host );

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
define( 'AUTH_KEY',         'O=9iz!Yx%Pf$-z6#!7tJ&xj7Tv:nXE<,8/qF?%T<oE/2ZQ|FCXTD7`$wRBXU[{ju' );
define( 'SECURE_AUTH_KEY',  '`grI!p$6#FgB(;xD#dIlHlra:ok]lc}o A_vp;n/}<`30/W$I$^.n>)iuUubyd@q' );
define( 'LOGGED_IN_KEY',    '5=4=5!O}`w*3/B1$j7|~vYqoS()Th^0-9R8M 2;@pZjIgN!s nyX{7`=HBU,`+|?' );
define( 'NONCE_KEY',        '}279Uy9tf}M9DZGBk1GsqPI94mNN4A`a$lI3(l,fNu@ZZ{f2&rsrJGW,+xnVnL:X' );
define( 'AUTH_SALT',        'GX53[{W!v+}KWEahnv@aC<32)8$^hyn[c;G*}{[9W5M5&dob xO]A;l8(obQfG2g' );
define( 'SECURE_AUTH_SALT', 'UZyQz_YUK/d7P/4~InQcn0)vh{sG:EbnMGvJqMuQ^AUDN,ZKt#9JX5vYaZ{Kk#3|' );
define( 'LOGGED_IN_SALT',   '0dyAof(_AW=},3Wo.Gbk)2b|p=&;iZ[?BaUTDQ`7Cy`+c{7rq?KJZm>_MdwBa^Rq' );
define( 'NONCE_SALT',       'ybZ=5=j,5p,J;OnQA4Dms{wxMJ7b:{T`IR.LTcHQ26Vm7]E3y<77hU/-HNmC`Vq4' );

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
