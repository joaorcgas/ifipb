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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ifipb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_FOB<g~6Pl`3I2;VhP?p1+*m.>S}>HF5#}M-2}App:hr~D7{FhB{$b}G,yi2xz|#' );
define( 'SECURE_AUTH_KEY',  '+e$5EnMCnbeAe>*]#)})ZCyq]ng5i=Yx ,09v]?o**oKlqiXaRu[Ilhw%/QIq>H$' );
define( 'LOGGED_IN_KEY',    'Ei[1UHfp%EVw_c1IsdR,p}>>_G# hx]cTe{ElI?C/9P{C`T-YJ^yeEI~m(tfOsOX' );
define( 'NONCE_KEY',        'S-xGsGaV8%:,vNH{Qq=oD-vMF@0Ek:{`NrF{6P>F#RCAm~eJT{1h^|xQ0PEcUuz7' );
define( 'AUTH_SALT',        'Qv fsG@Ava?nh&)nS$#4A) VZ:5lR0Li~N@C4cyNu!R+ec]Q0>fW:fQn}Av>&hN1' );
define( 'SECURE_AUTH_SALT', 's<|L3r^M#Ck]Yj-AZPWJ@V{9kI$nyu{o$ H2Q-#88/fWZ4Zqx=(3j9&QS@JGtFLc' );
define( 'LOGGED_IN_SALT',   '`8!4`3=KeD/&.g VTgMZ>Fn%q_HiN5n[M*l2C=Q6J909??yFqgdH+|;.v=~QK5L,' );
define( 'NONCE_SALT',       'sBON.<:NnMbD@ M7f7ei!ATX0(9d3QT5}ga+Q^k8~3t$ tWz[).r/z2$[TI(b$gY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
