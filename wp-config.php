<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'camping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=4~Iyg}.<HKY 4?nd/8rF;Fc7y;R5(YhP3}GW?:.c|Ino$ya3,]?1+;2n8-V:Pes' );
define( 'SECURE_AUTH_KEY',  'ZaMeYt(|rl?P6@QX@__%}iy%LasSP9U_7>xTx/_Er2nZG]r;?dMC*PV_(8+K9wXl' );
define( 'LOGGED_IN_KEY',    '2>A|xl,3mq3LI1{htvvJ_9r4DsJepT% Lso6y4,{JU4&LS;_;HRlmH0#w(s]<e :' );
define( 'NONCE_KEY',        'ymN+/h%_x6cM$+Y9^d`iHUgB(J|hLaI6(wxA#[CjCLE,v,CRDc3qkfF:D{sNir#(' );
define( 'AUTH_SALT',        'p-S)@Tb_j;COJVLjP^#VY4l`;rpS5=QnWt/vR+VAoMIK;VxQxTr&HQ+=AEf/j7<.' );
define( 'SECURE_AUTH_SALT', 'p%NcG]9o!Ne^OUxgCs`l/`^HPy:xOPG`=>V[>qTY~[!hDhK4 y/m:$MWxxQ+wezZ' );
define( 'LOGGED_IN_SALT',   '>j(wB)gHCP/^<CTu^N^d@K)1=_#8inXQq`VahigS;L(xmrIZI/J/wJO$mv`Pnjh1' );
define( 'NONCE_SALT',       '*+3w=C 1j^20& #rr@L<HG8Sd`Q&y86yc&^wF;k_* _*u<:]Km_@o FK=1*HgK8?' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
