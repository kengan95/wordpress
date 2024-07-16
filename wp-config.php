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
define( 'DB_NAME', 'wordpress_edutin_clase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '`Wwe{FFmAFt)GLX]T&<=A^$oP<jJ8*Sc.4sg0E?Y!S(6xYn}UkX*{sId`U+t-FzC' );
define( 'SECURE_AUTH_KEY',  '!dp>HNca7)ogc{8Xpf0CukHw^);62C44`JFW)mI=Im.c!jAE_oT!nKjj|y|<,tX;' );
define( 'LOGGED_IN_KEY',    'a;f77v~1CP[]7]M3FUP@Natk3VWI8k,CzWuCyTvc?miYzlgO<Z~&zNYbU-2dm3(n' );
define( 'NONCE_KEY',        'k1_Q@acER+L%9>W6sSGAZzs`hX=z%bMm?r;C2)BtJ`wt$pC2aL#hdw7j%U#CO%bf' );
define( 'AUTH_SALT',        'e5:a1sUZ|br/9Ix@)Dh2;0@?z(at<0Nnt37Q{=ppA!YJ6[J:O?w`t$,0/TGm$P#s' );
define( 'SECURE_AUTH_SALT', 'w7#AjxzXdsz#ID[tg?$boiB*C<rcK+e[YP|>e5rjw64b4N2[S(% n9.D8dOoVqS`' );
define( 'LOGGED_IN_SALT',   'LY9QbB#}HL2G17{~i5$a+-Ps/gcHbDY7u`TL@Jx9wz[S5~w7R0T0+rPcNP^1;0G[' );
define( 'NONCE_SALT',       'RmnFUq<Ly.7RSP^dH($l8<7SkB2ZAx[1L%xb-0f&E])L~.4*<!znj}![Z1sEIwA(' );

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
