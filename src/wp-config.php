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
define('DB_NAME', 'wp_test');

/** MySQL database username */
define('DB_USER', 'remote-user');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '172.29.0.103');

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
define('AUTH_KEY',         '}E?fXAg@@x(csC.$wql+>9s_:x# zF_w^<[Af<~^C}5+Mmu}V2_G|8pw >,gV@Sy');
define('SECURE_AUTH_KEY',  'T&]m1k gQAQ5C,e|UV-M[N3P@_Nx[*A!on{:.SoqZ0lVnk94TBFz80pQw1m,+Dta');
define('LOGGED_IN_KEY',    'suY]!-ZHwJ0c0j:+|68%JS6)7$L8b_-h|SayIxs)C0F,CA,Z/,478b90Bm%PG<&!');
define('NONCE_KEY',        '{Rb!Cx-yvVU!0N%az^+YwPA2pWR+6(#NrydO `]17L7AHn*WF)Fcv KKFI(AWg,J');
define('AUTH_SALT',        'iC[+xfFVRIiY68=z 2t|V[ptj3_Sp|AZqh{DSln--_PNT:p;Rg,ieXf-qtz+g%q~');
define('SECURE_AUTH_SALT', ']*P$g:bz*L94/ (@8SrP.WVhxD?Zopg-5rJi!O*CS=UFg9 V=^mw!]Mu%jaOszyd');
define('LOGGED_IN_SALT',   'zPSa{xUB`Q.q_Qnxi4;dLj7^{VYOm% Q][OG%+h.l*tK%._<S_4DQA4k/8U:`J9$');
define('NONCE_SALT',       '^1]?M_@(j:Qa^:<kz,|dtWuAo6{6WFLy|u}B%0VW^1`n!Z*GW+P<rC5{UjTpDf%J');

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
