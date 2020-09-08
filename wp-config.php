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
define( 'DB_NAME', 'fckp' );

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
define( 'AUTH_KEY',         '}y7UD*w%9nB}5n,.>5-phGi2Q|vEX:SqwZ6B*w5]GY^B}([=#JU^Bqo!yDR6KO(p' );
define( 'SECURE_AUTH_KEY',  '/{eNo%m (hR!P]rjW4UN[Pg}fPFJHRx.kTSvms&j-Z&?3B{_RL8v[u|x4bp=`.k!' );
define( 'LOGGED_IN_KEY',    'tHo~)9k53{AM]i7qD(5M~n^:Z=dZ,H7Jl2^l99&wI! kOdTNc7(~RK^Kz1PyK2Gn' );
define( 'NONCE_KEY',        '] XC5-no.ad=AZ84+wZ;26:Ori0=kx{{(5tH#K{]v3=B,yny}yoTA4RTX>#X^_/n' );
define( 'AUTH_SALT',        '%iazyQ[[Z0-,H]~9% Wwz;;$pp{R9Q_=w<KsRsLpKn/y}n5$,]WXOXKdwz5 g{^u' );
define( 'SECURE_AUTH_SALT', 'O[vqs%A(%b[aW[1hObBMkfgphI-%)s-2&-O`RzS)[)%HWga&~|]G(uwmd@-x~^&}' );
define( 'LOGGED_IN_SALT',   '+4(U*].M-A142}kDC<Rnmmk-{}+k4bXt-i8@4.R=B_.MZbvD,[ $3nZ8J[) -G v' );
define( 'NONCE_SALT',       'hj-=lf,!MzF9Y$l%D-XNl2tLUmQ3lM=ub[&{B-fWM&f0)gijDCov@~YFtZtq+[QQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fckp_';

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
