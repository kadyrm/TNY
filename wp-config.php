<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'user28615_tny' );

/** MySQL database username */
define( 'DB_USER', 'user28615_aybek' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thenomad80' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'jSRn 0_,Ur8X;,C$!,Uh*IPK7UTR[5o6tC[WplHB&MK~V_aIAwStRCx]?2Bh,l(1' );
define( 'SECURE_AUTH_KEY',  ', V2$y/E%yf7!nTNSi-E2|z|zVM4*8:GKH~}r[)QuII:-{W5*m}rVCE{]quCA`fN' );
define( 'LOGGED_IN_KEY',    '`)C61@my_[1`yT(},6fP9WOc{j@etkJ}o7=13wl*3t}4{h$*]L#?|u.#B$om}htA' );
define( 'NONCE_KEY',        'Yw]UTXFyF8Vg5Yof4Lz^EPiAn),m6p&yDZ~72EnHr7}W+^L6`ezw; wDCR7Z)-q0' );
define( 'AUTH_SALT',        'h:V}rVL3&LlE7?O~?gjOm>RHNe}Zp.&,(orJ>ivj&u&%pA|iwNA]=nXY6RVZySO4' );
define( 'SECURE_AUTH_SALT', '&/=,+;KAkR;3Mn]691QBZ/6S?eD2e!&juH%J,yz0 u^vL.*!YWG)aWJVESP3{)4o' );
define( 'LOGGED_IN_SALT',   'g+K #,zxy:f{2Y:<hr]|vfu;|)N9pD3DgY?<)@3{_v!k~BG)F6b{|^^MAT)r8pz6' );
define( 'NONCE_SALT',       'pr1:.FP<!l3c@;0tY+#3E0LPxmk&ZZ]Fpsrn<3n>>5R^4 Gck?sl5C0}N! @*]Jn' );

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

define('VP_GIT_BINARY', '/usr/local/bin/git');
define('VP_ENVIRONMENT', 'aybek');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
