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
define( 'DB_NAME', 'web-concepten' );

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
define( 'AUTH_KEY',         'p^.%2m@1KToE*1_)SRIr/Zr_<+<-^R,l[-}S6#rBBB/_<`6Z`nq<C5CA~-e8m2pB' );
define( 'SECURE_AUTH_KEY',  'v$n>tqd ^ ssl@SHHNrduzeAP)S4aIL2Ere*j&$2 k*)ho7bp0z:6SCL(h?.Fmu&' );
define( 'LOGGED_IN_KEY',    'ckQ@$eO:ozZib6yCth(Qi;C=C(:qSn7(42wCd%WQXnvB=.7vRx|#;m.#n.}SMw)*' );
define( 'NONCE_KEY',        '>s`3#Vhw3kE.lA57R}Zwmko2{<g*b)Nd{2g-,AXXx-:fS|a~#GE1M5Ei0&GH}R}|' );
define( 'AUTH_SALT',        '(CZ[S7rDQpAF3{SsbaHc,/hl)(t 2P[$K!Uu2ln6@2]_8Asx4+&uJZSCl)Ohl/aN' );
define( 'SECURE_AUTH_SALT', 'MPe)u}(2v1vYILCB&P*- X!GT[mXo 51|#m=,tBNu8NRhy7_#Jd;Uixs+AQ1Z 5}' );
define( 'LOGGED_IN_SALT',   'X7U}#qt(%f.f!oRNXt19_kZcr@V%(aing3^H7#!}$iJ4i@6()huq3387=|E00[Xb' );
define( 'NONCE_SALT',       '>hgsX:NRuOz-51WTN!;=E{x$//XkY66~z~?*ezhztxTQkwByy^Ol&|QJ&~%g{Fp)' );

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
