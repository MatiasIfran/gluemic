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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gluemic' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'g$&z+-+9d)D`_;J*Psq9 Z|O;4$56p,(5 HaX|XoybD]vLH.vV]M56N9_EaSr*V%' );
define( 'SECURE_AUTH_KEY',  'X:zDvdK(/Da>R]Q@M,_N7h7HZ2 {pf0l/5KQO=L,whY!Cl;v<Ffa(3G4D`JYQbOm' );
define( 'LOGGED_IN_KEY',    'k81|$K<jliZQLd.g_`7?U``I8uR?EF#eEm`#v-[Q)PRIXN6u`xEjv=cc}&0D}wFG' );
define( 'NONCE_KEY',        '?{NL (= Llt#OD]UR;%[43lOxF2@6_Epco!#$59G31A,3,yq]Wbx*@Jw))yDJ=7^' );
define( 'AUTH_SALT',        '+fYcB!$E>cH^rVywdQ.:)}a@1W}f4r9+i+Y<CfNbur1KXY^,>#8wAi}o2<x{FLZi' );
define( 'SECURE_AUTH_SALT', 'V35W]6@glfJfW8<zA-v(^*(gIW$p^4&#npeVz;^p3elOkHlw;;/_XPj~zJy(;WLc' );
define( 'LOGGED_IN_SALT',   '1x0B4?ZRf@ a_BY~;WhT=9[u4MAwe%p|NLd{#j#s8y>}(m`A<TJsjJ=kz6ryY*Nz' );
define( 'NONCE_SALT',       'E7nuiHFjq4*xtf:.DJWH;A7b-P6GTGG]5<Q|4bV`31[Oo/K iN&! rg92i,bQUif' );

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
