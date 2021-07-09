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
define( 'DB_NAME', 'w_db' );

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
define( 'AUTH_KEY',         'oGtw:/}<Gn1Gcx~_%jYnaxyYkhOS{cHdFJG6|>t+34H_^c{d^@YFrd_*`?C0K!G!' );
define( 'SECURE_AUTH_KEY',  'yvnBc+au&t^<p*~iaAD=DcBy=;BsEs ?AXc4Nf_VZ{y-#QT8ct-OQ.Tn=2+D({Ww' );
define( 'LOGGED_IN_KEY',    'ageYDWj20U95I],88iO^f_js vniuyhBPI$M^f>S|zK~m1UF6UVnZjL@M]|mtcDI' );
define( 'NONCE_KEY',        'C5>?57]*d]]45+PX)4z_PkqHkQ=d2smr.nXFi*^9y5*EN6bmFSQI.Z3._PUCzn?n' );
define( 'AUTH_SALT',        'QwFcqF1rN_W6xuQvWsru?&E,^qG1pb[S$Rf)R7T0`8Gu]dHE(hn8)yG&7:$8-&aQ' );
define( 'SECURE_AUTH_SALT', '*!_sXQs|c@g>GS?Q5B`v!5ImbEjN.:Zdlf}* C$v^Z<j,/J Yq*NQE|wo=z{Pl!~' );
define( 'LOGGED_IN_SALT',   'Bv06j]pAF5LfO.p~-/$(jeM6QGSX<2xy7KZ-YSZjuRkaw_*Nbx$)?u@j4#Q?6NhW' );
define( 'NONCE_SALT',       '5H^#X#fE;pIm;Enu3/kA-nCY2wC/](C0LAJKMRlw!TI=As`V~S6daW2VO)rqhL*e' );

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
