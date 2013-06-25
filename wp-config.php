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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'N`h*.Z_M?2GIb|C3Zm8>=20k8r;:cgj20KP=v7.z .FF.)Jm[sa_/}-te9S5p^U%');
define('SECURE_AUTH_KEY',  'zv>T&+$rI,*`Wxx!*1ID|woK*e%q_!HXYPTLuF ksd]iLt-Se0SM^<=YG$X!R|G!');
define('LOGGED_IN_KEY',    '%Y )4:~)^U462;?`:(S,.&&X6W3C Sn%KF8<BEjp+g8wG~7^D+-/ ;Rue:.ZR<xg');
define('NONCE_KEY',        '%.I((t+wRwN-=kWqXI%oz}eEUg(d9-?SkFyHsU++r7W(Mbr$0D&-N48c<+={u=N?');
define('AUTH_SALT',        'kdT?j7Z]-! :n%NRxl~$7{b&t68:%%-}L9ns#*~.{3n&31_ at,nX7|;9?a~rGep');
define('SECURE_AUTH_SALT', 'i0RpY9R$b?5+EDc#^%+A}e =D%_vor+6,|WNt:3_o+^-v~V*WYUDoeU,VuXp&>*.');
define('LOGGED_IN_SALT',   'yVPRdoyB+?1*so|S!pk w$6Y|jcWzrwNiWa/D+IE@r-4#Q|[+oS<}]JYC.-3*5iX');
define('NONCE_SALT',       'o.b]5Z9t%<K(fMdR]ZA]GI|u{a4dJ4[9OGcE6YX:?Jm&)Flkd+KoKGoveeoIQgVS');

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
