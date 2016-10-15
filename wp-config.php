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
define('DB_NAME', 'laha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<Ud.4k).~}L*3{>7hNPUA2} ,$D?fWTP<Z{s~V]A+(xOH(k86tSH%0KG/r4f>6]Y');
define('SECURE_AUTH_KEY',  'L;sH4w%J(2=eimje*9muEx(el,Bw47#cW1YnF?3@w]R%7C4b2/q`hhMr1J2:Ok30');
define('LOGGED_IN_KEY',    '?zi^WVqFfF;JK8SorRj~S32fLz^x3BH#Lr)FcvJGsX`Y&Y/G!^u0|b#tt~(*M|bh');
define('NONCE_KEY',        'w=A dPNJp<]%po9V8m}m%^2g5^0n8o]hKS}[w4yETzI-xW9q^K}j?_k22oS94/Ua');
define('AUTH_SALT',        '*@kn;8h(LU{|*{u[nr.S4>Fa;c4bo,,vMV8Pm0#yDi6;NU6b-p@k/Jq!K9O=y02X');
define('SECURE_AUTH_SALT', '{#+!gexRag#M O#@ >[w_2(S}xIejPmx,*P8El[r3H<{zb1z*<FU2} !T_>A@ch+');
define('LOGGED_IN_SALT',   '&&[Q[ro.6&lpN5p!~]Nv>I7V@Iw51M+j`dsDb{_3SjFNJaLeQ:9A F)g?Z IX)Z>');
define('NONCE_SALT',       'gnF@=]o+yTgKKCG,6<zZx4N`*up_joX8q0|WkmLK3[JVc99JY>0-Lm}Kk;icA:,:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
