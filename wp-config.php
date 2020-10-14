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
define( 'DB_NAME', 'ferrypunya' );

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
define( 'AUTH_KEY',         'Q1/s3Ez[94EGeg7Pw_bW>)ON[vJf!J>o>}zc.V<r8{xGL1)b_n<a7%&c*orZqOwh' );
define( 'SECURE_AUTH_KEY',  'o`BiAlqqT(I[ ?$Cgai;RP~>!+u6$F52W<l$Cs6IIPty^|uhupi$>;}UUJ}6B !@' );
define( 'LOGGED_IN_KEY',    'ItU=!RdZy_,s1p>U6!pD3_:tb,Md3t*u92^F@ne{ens1&$n3W8n1e=rIfn*vqA{;' );
define( 'NONCE_KEY',        '8S$%5D IoW.8)pN31Phh!we@i4[N00-!/r8,bHmr<VFZ|K[cw<6H-9|WS @}hwmT' );
define( 'AUTH_SALT',        'F4t]n~o^j2$*q?;;bzC-*pIv_2> ;0RDAlVJr!HsDwcL#cR/:sEvg2wWz/+wcYZk' );
define( 'SECURE_AUTH_SALT', '~g,*PFG2t1(!|GG6]~_E(^s?L}}!-pC#!>d08I+,#=r;b_[_B)oKm`Nqx8H6wdT,' );
define( 'LOGGED_IN_SALT',   'uD,2PPh~]0h|u!W>y|-@%khyd:S8yDyLmJhtb.cdW42FOcf=/bs|_qmKbZX<XiZC' );
define( 'NONCE_SALT',       'TNB&efdDW]d[n)T2K^rvjY}!YA(d(7AG4i=1UMF4g!|YbRe^]nD.`z78L?5s!m*%' );

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
