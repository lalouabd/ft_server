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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bone' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Abdelait12.' );

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
define( 'AUTH_KEY',         '_Qtd/G1&~(CeW174h{7kY`i1E$>]h1,EO&es2oKB=0DndxCNv%yC hNTKY#~a8k)' );
define( 'SECURE_AUTH_KEY',  ':Rt;25P :]^kZOUjxFk!}xS#Z4R&-{/r:iC6{:6+PT_>u;ANzQRAyMy_@_%X8]<t' );
define( 'LOGGED_IN_KEY',    'YFoP3U7MMd/U=F-cWV(iy(6nt]m{):>4vA}8kZwxMt)VYu>[LGTZgAcF{Cg[W26k' );
define( 'NONCE_KEY',        ':fI;*6Z-G2lQ#oqj$By?+pi+=Jm,:MdmoCzu^;s=&(dE%2B,1Pm:*v*!7%$wJQOS' );
define( 'AUTH_SALT',        'rOwQ}6_LK}gcDO=zYuRc~FFe<o)_Q-J;4.`qRf#K5wl|uA^>eL)P2B13?@]Jh[Wa' );
define( 'SECURE_AUTH_SALT', 'bc|SAHk$Jtd_+ #&H:yl{LBX?8i1!&j*BysmlI%/+$lkQf{BzFv^$epHLrU(;]hS' );
define( 'LOGGED_IN_SALT',   '7Gg$L^yJ%eCL[$da.r5GE?)iT2CM1J5&G9*Fb~>Ma>+.aPhJp?&EY$TrEG6CQ >v' );
define( 'NONCE_SALT',       '*U2E~p1} {_J&uTl](?*8XkZ79kiuo{}8t}Ta(kk vf9,o-Pc*I)VF~Iu]a9yz:@' );

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
