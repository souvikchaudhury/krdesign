<?php
ob_start();
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
define('DB_NAME', 'krdesign');

/** MySQL database username */
define('DB_USER', 'krdesign');

/** MySQL database password */
define('DB_PASSWORD', 'Krdesign@123');

/** MySQL hostname */
define('DB_HOST', 'krdesign.db.10922089.hostedresource.com');

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
define('AUTH_KEY',         'wkSm+:WN_zp$,lcI+mAp!Jq FM_W]k7$E-18}a!cL+Fa2.]_IYNQVP0VDwj@:N4u');
define('SECURE_AUTH_KEY',  '^]DVP|:))F~05H!}V43_s*pDR-KVBhx,M/r]>zFJoS|@K<rEJS Ywh@paylwOAps');
define('LOGGED_IN_KEY',    '{dpihA2O46O[hiADn:j s%-ES=>Rrs;e-D-k/1;`Q7lo|<qhWiC.F^}+`kVvB-!)');
define('NONCE_KEY',        '*lg/t^Zt:He1hP|_!TQQa*zU<=vL-gO2lINEpU9-k&v@>6`@2B;kRVmiZ6 T!;jP');
define('AUTH_SALT',        ')c#iXh--rkozo?$6f_.=5+G%}EQpzol@aV<#e*~BU2oT~vh/XP4j~1`*M!O_+Hn^');
define('SECURE_AUTH_SALT', 'ky*?-KVsC%*5;f+-)j1d4AIH>zd+t/=G-Debg6B%Y$$13pD{ t~g+O.|o,Nb@mh;');
define('LOGGED_IN_SALT',   'cq(k~UxwvbSxH.4S@Y~AG[cv@QQM;FVC 5vw0=>?)L6ijvs}6bPB7%TF)SfAwsMo');
define('NONCE_SALT',       '*V;8$y~RiDyc/U^(8QROhk2k?j<7kASyCZ!vi9]|G>9<ax])zQJ.fB%=ayAD~W:q');

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
