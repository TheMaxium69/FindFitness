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
define( 'DB_NAME', 'FindFitness' );

/** MySQL database username */
define( 'DB_USER', 'FindFitness' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FindFitness' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '~3aS_8Ki@c.}+?JMyrlY:NTc%/Mr89V..%w>_S&onX9HvPLC*A[YwCe6MCp$.OG`' );
define( 'SECURE_AUTH_KEY',  'jxF|o1]rRO!9!4WZ&T&;ohN@1y,G((2Bus3nCHDb6|(2E(O@rqbmhu?TPZtmS#~0' );
define( 'LOGGED_IN_KEY',    'cb:L|#E435(yw^j;ka>`R-_SfaYs|AHP{N8yW[+{5smI-2*>fgfQZ7 ]9ZAt>`$?' );
define( 'NONCE_KEY',        'rpCttDF5)kcHe/Iox#5$E/2mIZu!tGuL,r]x{ZpdV{J6ZTq[*B#,`CbMt?NT`=@_' );
define( 'AUTH_SALT',        'LlPG% |mbA/E^v,!oNBW8nkUj@B_6J{J)Eh=pVnn`W9m=A]v2}XUupxs?Cbaz>,M' );
define( 'SECURE_AUTH_SALT', '5dP9G<jk+*D&f(H22k#<2GU%#tXMH[Mqxt;T%=JjP`B;,]XbR+3 `yvc=K{uPzNj' );
define( 'LOGGED_IN_SALT',   '=N8WVWyBT`c*yoHNR^4S p57eV6s_2mvWtqUg_:SA6aj wBUwB{a 57`/c`{*p)s' );
define( 'NONCE_SALT',       'mC%?ahwPze}BAZD:*&gj0vAq!Sy0?Bb!e0ZJXS;Qe>qiW|sPC,e!/Tb=?+zz|&zO' );

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
