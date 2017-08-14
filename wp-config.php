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
define('DB_NAME', 'chaseportfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ');fRf)6SI/66Yj#^d9Ke$4noTJMcxO$bdzAtr$]{T*!`<@`wA0OUw7 O!Up-=*gz');
define('SECURE_AUTH_KEY',  'q2whAO`2fwsK#i>FkW @p>Tll>(<}T>1Tlw6 8z+1&,wNe%+|XrQqvg=UN0h%Q1J');
define('LOGGED_IN_KEY',    '(#:#WNs[ut~p(<<3z^Q03LbPP{t0fQ`_P&[7.*5/r~C1FsXH.sc1F-=`K-z2nM-~');
define('NONCE_KEY',        '87YaEA!h6K|=t_bWW.OGi<!co{l46HILq-mcy(F9s+&OOAdVl)P__*Hw4F*R7Q@}');
define('AUTH_SALT',        'nl.h|~?P2[&b;~((+7lk n]dM-? W!Q}mc6afTR{k9*T@|JRMN!&-F[gZqe-9E:i');
define('SECURE_AUTH_SALT', 'G$MhIf=efJ~7OJ9C,AGs_Q5hvw[]JTbMz+P(fy4j@w}Lq-cOtx9/p+pvgrX:Eemg');
define('LOGGED_IN_SALT',   'eK!V`QZ%n6`+yINY.S$3|GpjTF`(rcmk]Sc,DMSkQCSPH+|tn.g{0B~}<Imv^(z9');
define('NONCE_SALT',       'Hjv<j~`GlLH*>.Z1od?~,9,XC;F,SXq_I.1h]`Yb})bXR5>$L3L93)O+Y+Ut#pm?');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yte33_';

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
