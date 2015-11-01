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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '192.168.0.58');

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
define('AUTH_KEY',         'zkUN4g .RF8e WLeT|BY~5fmifaD93-XX?Nzlc8>NuT3TVRj3HX{-?gjtQNr xo+');
define('SECURE_AUTH_KEY',  ',*cy(dEcfx@`30s)E/%CCP|TzwRv&cc+H|)9r32RfbG^Yxb{/e{iUaog+|Pyg+$g');
define('LOGGED_IN_KEY',    'Os=l$1~r-|`>C0|#E-WWWWA08_3p9-H_YEno&=&*rhR-LeCAQ9x;svO3i94R%y~;');
define('NONCE_KEY',        'SMZ4t.=>6PsG<o8`^$o&QU.2isBm5Z8g)78.jVcTpJ#TX`dL?lmuN{#]C_9c%O{U');
define('AUTH_SALT',        'fF0ej0-->+UQKi+GuXR`7(Rph.-tp6mE wRe?+8@zx^{.4os/Nt_.@#oFXL(~dzn');
define('SECURE_AUTH_SALT', ' (n,Q74bQ-zO;>&zxSuDTUkiGQ<^2Z|X^IzC(NED9T8N1I@Y];c7++9Y2qAaz$`B');
define('LOGGED_IN_SALT',   'VSW7Uf+HC.D|PJ{hg_[XzGn{eFv!Di>%em_VlDY~I{K?WW|~~Z+}U/+6-h-Nw1D~');
define('NONCE_SALT',       'P6-|u5Ay]T;>I4m-tGL;b#n~rL61Vr,||0.EBOJg D%Q0%_b8BW+(ck%Dwpql(mi');

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
