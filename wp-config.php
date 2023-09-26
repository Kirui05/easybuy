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
define( 'DB_NAME', 'easybuy' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '263jP04Q3|Q~i;,QW8n X;M#{n563O1VRQ2B>Fk.AcVbB1(2mx@v#(VU_y4sH1fq' );
define( 'SECURE_AUTH_KEY',  'u4gm=^9yXq]puzW~O#ZEFq/~WUZ,[UbtMHsSS`al[|)P@~[=kFB:<so-N%p9$yzQ' );
define( 'LOGGED_IN_KEY',    'KSe:At.>jJk{lGv0VfC8i^DVHL[0gTs :[l{tP(1jI|laGi1Qd z|:$t]H*tFozH' );
define( 'NONCE_KEY',        'F9(ArO^ES4ta|0wM]>JmXYcye%P#$9@%Z9Kh@ *RvpThc(eBJ;HZ$Wq3m`hX2B @' );
define( 'AUTH_SALT',        'sMH48z;3!})5 ROzREK|;@#bqZR,1Q-TC[ftLk3C~:!iX(FVBSMOubFJ,+%@R$+w' );
define( 'SECURE_AUTH_SALT', '-bW`AId/dxWSi.PFKSHx8M9j<!s(+`~9GrG4,Ak}Da-Emk&r:ss%-A?6ZPA^ .pe' );
define( 'LOGGED_IN_SALT',   '5O}BB{[3N$N*@=jSDyn^%QmDFME0TXPL)+tGw}V5%3Ti]25}=z7^AX`IsRbG.pt3' );
define( 'NONCE_SALT',       '2BB]n0 854753-Td]1#B9b0N-e~j!?8p)Ik5i2Jq,7?yy{K4Dzl6I+uVV9%f |`O' );

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
