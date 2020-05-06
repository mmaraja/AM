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
define( 'DB_NAME', 'AM' );

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
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J?[L$J`-E2.7D9{OjE8Ap12M_cq!ctis/Z%YOOTd_Q:w/F,O52c_`Q9=S*h^~/7U' );
define( 'SECURE_AUTH_KEY',  '_yo%?[C+63~eq]}@mpQBUpf#cp)roKz,-P`sW?Xp&3)MbY8g}~o8[ AXBnfC6jJ[' );
define( 'LOGGED_IN_KEY',    '_Sod[6[.&%Y.df2fC8(UKsVU0.57NH|&#r!P&~kXx(zpq`@ix_i5PofiAOml4!o:' );
define( 'NONCE_KEY',        '$Hj|j,>b$7m=)B2AK.z%Kx=3p^GatGE(YV)&ofM-Ppakb=L4KBTeF08H+60X2ZO%' );
define( 'AUTH_SALT',        '0I[?ndPcjp$VfJN%MyxlP&|*A=fQH%$s6t13|ur ik9CGH2EBV.o6V!` Iz4zKPJ' );
define( 'SECURE_AUTH_SALT', '8]]wM%^?rst]`ncH1*qVJp.I&idj]Xl:$`*%jc*dk[W<pvjrY{,o6Jyw%*51HQ%]' );
define( 'LOGGED_IN_SALT',   '+mkk jwpgX+aIu$6l)7 HU_Nz@hpXN@z$7.f=&){eCif4 7Fo55Zuva^fBB2TI9~' );
define( 'NONCE_SALT',       'U7zQnRx(UX6B_~yNkdN__-{hXP@7BJ4H&5^h7(ToOTh<lR}qB_l|)/V074Bf1dKJ' );

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
