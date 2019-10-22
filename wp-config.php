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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_database' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         ')$gA2hUb~M|#(?`w6K6qGY@OzXPXx3:@Af62Z!3]JTDu*);w;~zT{~}~(|5eufFA' );
define( 'SECURE_AUTH_KEY',  '*{:q7S=tPv~cYwQJ8gyn8eBV?s%*;ZVA9q%@0&AjA!x7>d|,,r^M%JB>h^ LAp_?' );
define( 'LOGGED_IN_KEY',    'ax|h=)BElhgN{zeKnlO<RG|zOII|q[ZsVp!>^iH~!R5AtzGT~di.UY(%ZNFp_d~I' );
define( 'NONCE_KEY',        'vOs9%$*S$JU!{!|r[ZdXLh|u-wc#oU!i3|.w[02N|W`%D<GH9Mnz)gwJ}?9~GPjw' );
define( 'AUTH_SALT',        'G;-/Au]u)e;`52Eye`*K<<%q9<cWgPH5`wC0k#7Q==lc2L>;Vn{!p&P2c1zE@3h8' );
define( 'SECURE_AUTH_SALT', ' PxQ<9M%Efp=.DFFjG91H.>bA1*D:cy?Gy6jKsM]uaPYRF@ftt#d$Y_P$d5J8vuG' );
define( 'LOGGED_IN_SALT',   'Pc(rFX+H/6*tU(cdHk=Q9|UT&6P$g0 ^MX^@JwIuF^1 Al0<7*3ZAi<u7BG@JKE@' );
define( 'NONCE_SALT',       '1>>aB<2Fx0mfnad)ifTXUHd26Ol5@Blvdn+f@qcE.{.(be<kKr>Y7<!J#B!X*#S+' );

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
