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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'j8kHWbpm[PFha[aF>g=y]3|F2/[kYFL3ObuSF6in.-xnD)56=81`*H_SD@#!tt<&');
define('SECURE_AUTH_KEY',  'u?j|:qJg6G!7[00v1R 12:_LQae5RiNOLtl E3T19FU*k=q.v 49g|JqHIRbHRHg');
define('LOGGED_IN_KEY',    'Z%~aRMKN1[bc}OlExFoAAD$*:yO|Q$&}hxkVwphvm`PqpyDR)gL[DSbm]PUlBw8A');
define('NONCE_KEY',        'ndp$`XBnk>0a]@2{bP(t5<) 5}66)Uv+$:!G@j(M)]Xn2,WYd|MDdgRS ;*%#h~9');
define('AUTH_SALT',        'wFR A206HHGu?zLp=TCOA/_+YljW[[p.KH~`+h~3[5?P3Qpar=qfl sT:P7C#X/L');
define('SECURE_AUTH_SALT', 'nY]FWB$gd$2|8X]xX<#TF]*gsi-9CPXNN}MSSqV6[T9I=S(O=_sTDX~dHH#^J4sv');
define('LOGGED_IN_SALT',   '$C0vIiFGQ/Cj6YG^Nk$uz]bh$&wi:CvszQUU**(zOl*)KO:w:fy:_u>.BS~7;is}');
define('NONCE_SALT',       'NICW{rx#_SQAS5C%J.oX2%<hG%FlF!~?DwZKI,gwVAlTD:y+d^4IYSS5%xT(@PM=');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
