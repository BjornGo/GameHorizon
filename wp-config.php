<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '277963966wordpress20250404095434' );

/** Database username */
define( 'DB_USER', 'myghorizon2e');

/** Database password */
define( 'DB_PASSWORD', 'I8U0VoDJ' );

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
define( 'AUTH_KEY', 'gqoQrS`e-=O+!v+Ly:{wye= -LR0o-=eB2Yd+1dHs|9$:U>B~^8mR[|<T:hf-]t&' );
define( 'SECURE_AUTH_KEY',  'vi}V`$lz62a]i5@{rmN3J#nP&yR/d-z{JS? A0,L`@J%:Wkx;4vOV?p#fq`iD<BG' );
define( 'LOGGED_IN_KEY', ')OZ@$[kDn?J(|-=jT=.iUUy_q<JiU|<|f gVZ|z@Kniuw|.,V&7ccVJc|K1qkjh@' );
define( 'NONCE_KEY', '.$ *6[TPfpY%t&7i-cid/X8g?1c./:hQsp63G;bGk< +=9|AcqIFMM$-}4{Bc!<f' );
define( 'AUTH_SALT', 'nO|lA;n9?7M}|4h>W_J$4FSRk/RutdnQ=j+}IT(!;[x1+-kN__YCMOn<U^DdU|~%' );
define( 'SECURE_AUTH_SALT', 'Z8BY?(bBjBh,bg6S5K>`r-+6QNDKXqb=uP]#0-+BpTcXGU[s6^$_fkSWc4P.)Z;`' );
define( 'LOGGED_IN_SALT', '8o171=<~9l>r!uu|7}56bcKU]i-Za-&W2#6kE7L!]zD|9W|WmjYHQyMt~$J<i=-' );
define( 'NONCE_SALT', '^<8}q&}UV8ak`Pj)RPh(qO8HT2AsKi@uin] PqHj~>7?}t{%D l)LI|q$9p;F/8U' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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


//Autoupdates enabled
define( 'WP_AUTO_UPDATE_CORE', true );

//Not populate themes/plugins by WordPress.
define( 'CORE_UPGRADE_SKIP_NEW_BUNDLED', true );

//Disable PHP Editor
define( 'DISALLOW_FILE_EDIT', true );
