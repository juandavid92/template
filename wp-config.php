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
define( 'DB_NAME', 'templates' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Root123!' );

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
define( 'AUTH_KEY',         '}wKtAN$G; <oap_SoQ<+6@i`_,-%GV)Zf-P1v+8~C.*M50w>@XkxXp9ue:1c6j`9' );
define( 'SECURE_AUTH_KEY',  'wSm[Y=M|{w33lP9!)=n6wBG2.>XMczs!mu>CtGPPD~Uz{<K-M3+pzQ=LI+yCqB^B' );
define( 'LOGGED_IN_KEY',    'nrrIdg*4fpCB>>L?<v*5W@7.yZNm_iCMND{,t{8@)&+V s`IZzDfqq;>y=Fqd:E;' );
define( 'NONCE_KEY',        'y6g5lW&Qu-I$s>eg(A(~,|!K8$:W>u.W=H]2<_aLP*KQ4?<8s/UZ=^VwK2%^Y)Qb' );
define( 'AUTH_SALT',        '9kv-X.t9D>dM@$Y($c{v0]q!U7L9%*+5DYY,rN6d2sGOo{]q>&ZPb3mp6LOIkbYh' );
define( 'SECURE_AUTH_SALT', 'n2k6z<i<G)@x44;dgvj6e;2xh4)m4u%R[`%{Ta^^|^]BA-bT5>_.PhcW&F4-.Sq0' );
define( 'LOGGED_IN_SALT',   'i:}NHDOeekYYli%UV|ku|JfZ8W]Q:RL[T|:kH&TF+LX)l%;9Wju %MtdAWjd #$O' );
define( 'NONCE_SALT',       'JU#PoOs}^kAfP1%MH|K?i6p;Lc$uWW)&S)}TW3aBk3~?HxZfHJiy^^KRw8V#<UG(' );

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
