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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yangmaflorist' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-cn>)DG(k@:qN^Sm|HQX[?(U&q)TrkL`pMvj#c16%xP>_)y9P@en88?Nv>]oXU&F' );
define( 'SECURE_AUTH_KEY',   '-v7rkOE*~{v[_Uc5UU[@^>O.ixUO[aE|vjoP$Xf[[@=vO1HP&j/OXYA9Xo.ihZur' );
define( 'LOGGED_IN_KEY',     '06kkzJ+B:LTc9Zw=Tl1UkusFT>Iri6(nL]x5AZLL XH)|}M+M9z[h4oZ[kcuz<Pj' );
define( 'NONCE_KEY',         'cgJNX1}@=[,3Wy!m<l,.@!9h:34Vg6u^O8:@@ BDM:%OwOOI`KOolDrh_uk>pSeo' );
define( 'AUTH_SALT',         'T~B%vo@(C-WY|g)@1Fp:?uy>>Pf[Mqt@u;YldhfND[pi}h(t56Z5J;6Z^?H:4{uG' );
define( 'SECURE_AUTH_SALT',  'Yt3&gjXghvd(~ V4.RmqDJA_9qcVa$s<q3towH~VbrMCMOH%dO|j4q:w{iriro?G' );
define( 'LOGGED_IN_SALT',    'ER;mZGn#Kf2qS;8^hi<5YXF)2?V5SSC,1iL]oRC<K,V>pR!|!Nw!pPZ0v[Lk9oKJ' );
define( 'NONCE_SALT',        '%Y^VS,4E@sC]QyBe;#8<g:{d(Z/T&jrQ|_n8rV.RvUnWx@:7Cv^+A9YRDv&n+&{K' );
define( 'WP_CACHE_KEY_SALT', 'Hgq10R*S{ZY915im$CgqG$[]]_P4*W~e>[o..|:h8E*TX>iJ!Q]:j8!7<gJzLkOW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
