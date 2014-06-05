<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'myproject-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'pXI(.~BD8W9}Z P~dEIj16;>$nLD=^O5E9(Cw3Zz[|ui]-LaK+D->dtJP+nxn-6&');
define('SECURE_AUTH_KEY',  '6v$2X%TF.*s8Y.?]{*DOw.rboUh<UD@!)lice7y$`_?c>U~YIxG0,9::Es/udNrz');
define('LOGGED_IN_KEY',    'y%2b.Lt/7L0tg0xOfAE|Vsxq-s!HN&Quf=gh|^pDx@++c]&5iHHO@>ffMZZ)XG&%');
define('NONCE_KEY',        '-$mxRb@2)+4F_UiYpbtLQZzLE6c:<_[J{?//lAaxP5^]u?gnU$~+=p!(#!`+i7p]');
define('AUTH_SALT',        'n6HPJ8SH+rHDh|]]fzP:R|(bZVCk4+0Bi/d}=vRsOI3 ,Zyz-9.{Z_?@G|74$ jk');
define('SECURE_AUTH_SALT', '}PfnR@[X0c^|MzC}Jt5;01Kmnpl+Ke_EN_/c&h@L8 m`V5~j/2<>0%uDpi]THn(/');
define('LOGGED_IN_SALT',   '-y%+>pJJ+]^c.)ggFt%A:}buSI}{#izb#0m8o1)6Gck<h*<7amFV_]{CBA,6r6LE');
define('NONCE_SALT',       '!tFN#. &4OEh)imM{IV1cgo$K,OMoR~T+jq8kmsc#-::aIZW>;VErs)<;X8=qIQl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
