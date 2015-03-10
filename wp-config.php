<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '$(wRqA.*9p8XAUrGn#J/SU%5|w9=H}6D-{hU~2-,U$vHO@{!@#UUI5;dGG/ 2=#Q');
define('SECURE_AUTH_KEY',  '!c<qw! Zb+-GJ+%Fvr7~e}rB_Z%OD#5I6atiXVXW82D:.]~:ad]h=]>0pI~G`-&B');
define('LOGGED_IN_KEY',    '&UQ-3s,BL.XWber6(W/|km/,;YEjQdK<54c=k>@1@+kSGJ,bA}Q*#O~m?%FLRf]r');
define('NONCE_KEY',        '[@6[QxW6+JZ!KKOh]oKl^CjDnFnZXlC:1?J=  etm-%?|lD],Z@nXARx1a_wC&ki');
define('AUTH_SALT',        's;&sKOu[f+m>pukW8j,~1Of>H;w|O/|Gq#tJ?;KjfyXZI:{LHFBM1vZ-2WI<DB[m');
define('SECURE_AUTH_SALT', '5c(4MaD;sJ*r *NPGe`9EE/3W*(&.7dWRF^ZmmC:6I>}OOn+AB5<^kRoPr~EY/ym');
define('LOGGED_IN_SALT',   '.B=*rwkVho<K*[`15+#s62fY]|O&W=2*Dv^|5z!O.4][,1V*EIp@o,8cBF !&TBZ');
define('NONCE_SALT',       'q@*c6m7dXW1z`ce8_KxWDez+__CQt1nxcI+j<%W-cKGdOQxs^5(>_~)atd#otB^$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
