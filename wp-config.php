<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%#pKYeEaUi:!El`+tD4:4+& [Spz9FM@a<sAB3O*~L@?z&w1gQ9$aKt@>)^,~!Es' );
define( 'SECURE_AUTH_KEY',  'TQ)}>HHQ&-L-/+P:C3H[@LkD3 pS4}W9=ULPDps{: PJ#49dC#-;Q2_Jv,uE}@77' );
define( 'LOGGED_IN_KEY',    'Q=mzK({J=A*1LgP{1M|Hg:=5wz|ZW|MRQ}r*K%%c+@K^{|~:Co49*]$HKjo<!jz+' );
define( 'NONCE_KEY',        'Kb$%dRqw+8=TQb,K#&):Z7A,8l]`/Ag3=iqK)B${20]mDmSl;&1@lmJt%yuIJ!*U' );
define( 'AUTH_SALT',        '>@U]w#>&2$hZiWI[_[z`M |Jlj6%!fjdK2|su73A]Wo(+.`?ALs0H`+qnK7DK>2|' );
define( 'SECURE_AUTH_SALT', '7wTH=-<%R6LN/Y!d?;Ag4m:NLC+*{ fQ Ou</`*{|{ `tz2og2;sKH=LAlZ+R^Ff' );
define( 'LOGGED_IN_SALT',   'Hxcx4hB+Xi}+|u_Kr(IBA(Vlu49%jZ)9W_{ds&7DGFR:st6#<vyEB/`YU.;FG1y,' );
define( 'NONCE_SALT',       'vj54H9tLaUJ!lx{@,4$Vb20[ nA><:3;m|>i&UV+5hM)Jy_H6+&iLF[iKpF{sfTh' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
