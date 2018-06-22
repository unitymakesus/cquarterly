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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DATABASE_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DATABASE_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DATABASE_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST',  getenv(strtoupper(str_replace('-', '_', getenv('DATABASE_SERVICE_NAME'))).'_SERVICE_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){
    $_SERVER['HTTPS'] = 'on';
    $_SERVER['SERVER_PORT'] = 443;
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '`U3w/T5rKic5X4d`V/Jwu}6[DQOos=Zb[/EI*LxD+Z-:Q=D}E#[B(c1bNTv|}]C6');
 define('SECURE_AUTH_KEY',  'Ep(`|!SX@hz[Dm0uu&z)|.Q+?ehu=|E/|Ke-TF6>ma6-^K5iQuRRze-|l6FfNCty');
 define('LOGGED_IN_KEY',    'pAellB--/7:Y0agy#5};bV(EB^a-x]?0cm{);^X7G+!XhEPh=~E-uIi4.ou=S9tF');
 define('NONCE_KEY',        'pUp03>JA#g?u/$_;0T.*m0<h}hJ;)sX30l4A)uoUOH>A,}&RDRISM~z[dP>A?D)s');
 define('AUTH_SALT',        'Df8 +%;&0`PO|+h$G ev4!,z}&Qq0!_~@=;MwPgDBFc/w~!v~mr|us21KVjbIk=D');
 define('SECURE_AUTH_SALT', '_=NDbD^.;O7WkU7Vh>gG](t2q/3lRf_g&ObYB-0:ApThBZ)s,SVp<JjnWU-C}.,e');
 define('LOGGED_IN_SALT',   'kEpj<<-){WwA.3CCPi+ocQ~xPrX]7,OFQ(VORB[0,!-E>x?0ub8d>Q{Jr--6|8qQ');
 define('NONCE_SALT',       'mQK+?F>5(E(Oq$TUt?Tz-8|>kDgd1[bmluhtFhu V%kqyo,$g=!s8]+rm7WASF14');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
