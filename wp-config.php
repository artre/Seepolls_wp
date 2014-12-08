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
define('DB_NAME', 'seepolls_artemseepolls');

/** MySQL database username */
define('DB_USER', 'seepolls_adev');

/** MySQL database password */
define('DB_PASSWORD', 'Access123qwe!');

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
define('AUTH_KEY',         '*.vr6+Njxp+#yQ<hRw_X9||ea*-&gWua^}L{(`Bz}RDHdn:p.lKj?HQ&}ztWp(W]');
define('SECURE_AUTH_KEY',  'ycK;bdpB<xw^#M~FgQ]h4{aph5MafO:.NT-q`:2<J3! skQd6Wh9Kf%s8#;&Nmt%');
define('LOGGED_IN_KEY',    '^UT|q4|UN}A$F2,2/xw^+p56fU@Rk`Xh[KkF0UWO~f+G9A{S_|RE4_THy O^)h{4');
define('NONCE_KEY',        '&3+_r>-ix.b{`NE92i7WY<LVcq?|S^h3 kq@^5Qio[|i_fh+x94.@cH2N|LLF;+:');
define('AUTH_SALT',        'a{$y*:2e+%Faq.jsK.u fef~fF7Wt@`|`73hZJ={WhjID>l|fgJCA[h<CkXa+I6y');
define('SECURE_AUTH_SALT', '2H|0rrQ?E39A=lc+d^USm8;qP}5WlK@@{3rc38*O(!As8c&fp!W,i=[tCH[`.8vF');
define('LOGGED_IN_SALT',   'l@@~J2~Z!?_K}y%61]W:|/n-GO~|)A[GTQ7eJj3 hhy9d<&j5{;8U;N~m~;y2/}T');
define('NONCE_SALT',       'ul!|-GA3xPQdI[18JO*)()b[Sbr>fZ{i&Y7Op)KCD?F@6G<::+:ex1Q;?|G=qu@0');

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
