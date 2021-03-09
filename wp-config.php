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
define( 'DB_NAME', 'baperunnes' );

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
define( 'AUTH_KEY',         '|ZHIPE}T.)Y^.D@U,GC:{smlYqgy3.A6NH#Txi<:cHITZsGb:WRJ_keq[%}Qc{;y' );
define( 'SECURE_AUTH_KEY',  'Q~7Wmnc)[D*84x{9){M9;DMxMk].<lQi)+|Fj}@&_8Sm#IRrHp+D$Es@lrNq|Pzp' );
define( 'LOGGED_IN_KEY',    '5U$)` 1jKb/JGsHU%X$Jg?8I+l{vg<qmOUfl+fGl@D5lNX]_P^fo):*U3CoQaby-' );
define( 'NONCE_KEY',        'u+,^xBR5vv0c7WOTOCvw3&M@&5(`ktifk`YF^C~V&MpguHxV;vD>AZ]o4D$gypia' );
define( 'AUTH_SALT',        '5Ceu{eQjRbmgGMcfouo:.YEt`]%~m;!lvL1SDXAIq_g$&vq/+2#zMbdAJ1)7FIr&' );
define( 'SECURE_AUTH_SALT', ']2FYDe0xS4Niq)UT>$nECYN(9d|!X]v}t|I?bFowqg>K`IN5smL&z+hN4#FszB^-' );
define( 'LOGGED_IN_SALT',   'N*o:|#7j$d5&Rh9ey-;1Vv0ozy<Lx3cJ%%1:|~)Xicbb$V`|.8LTFt~`SPY=+I7:' );
define( 'NONCE_SALT',       'Ye-Nhg:4? ^rKA8{-!ViDJ7O`O h_4 %u,{s<~(k.]2WAp0ps+MMze|EWC:-=`]C' );

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
