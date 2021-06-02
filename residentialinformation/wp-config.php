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
define( 'DB_NAME', 'residentialinformation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'qJqZGX3KP 5RL]90OEhF.Zqx/slsW6=*ZA|}X#f1vB0T7,Y)?SJ5nU=QLGDjk^@)' );
define( 'SECURE_AUTH_KEY',  'WCBUOc#GN(Ea8hCNr]mzmfu*]M]DJb+hPp3[(1hsATlLdh-5~r#CMU{>z<#k=-,]' );
define( 'LOGGED_IN_KEY',    'Yu!nT^66CBX0^7H#x,x2ADC#f%OT_uZYRyS,zegN)SVc*]hj,%nzbB:lM9Up&n2I' );
define( 'NONCE_KEY',        'A1(5lumCz3l6=^;NXmiRV[/p/i CLO{f BK{,+-9<.K[nMz`K6*Dzlq$aaNp>wn$' );
define( 'AUTH_SALT',        'Y%+1jc,gK~[6vU[3ux+@S(O=(m68DI.SwxH]&3UEmi% #l+[}r5Kfy)V#.c@yfcY' );
define( 'SECURE_AUTH_SALT', 'H..dK|8SpMs(B~4@v:q{W%!yfAbg5.=TTQkR@&w@eWVr26OkpuWqp0U2zD.@^* 9' );
define( 'LOGGED_IN_SALT',   'QMS]8ns|nVb693A}6NQa1H^jj{)&05=-ZU/}Z}:9HsvE<C,MI4j/Ix,BPV9q(>;{' );
define( 'NONCE_SALT',       'S:ZJp2v!%~~y5J5|`1q<YHsDDWXlls 7w:SFv>o%.aFn6;ilf]Nb###}[/6ils:^' );

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
