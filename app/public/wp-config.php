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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yhR9mCQzr/BF5t2IBfJvyMFPjODSk7bsEl6m8isg7ahDo1rH6GTJ1OOnHjs4Aokuo124jskgDw2/T7+T6cLkbg==');
define('SECURE_AUTH_KEY',  'KYyVikGB9g1nAjHuw1YLrM6Zkb7EH596D6ibmYQu30GbTGfOZtr0Qs2BOSywtuH2Zw9yLxRvwVSB9YjX3qVMrg==');
define('LOGGED_IN_KEY',    'OIXwc5Lv0a0w8SiAllqqKvTD3yPGYNyeYyN831gUzt22tc2S05yDrmUf4VJ6ezCmn0gFEI/APzIsUTXmmPQJ1w==');
define('NONCE_KEY',        'ipfv8DbT5af822xTPafIKJSHM2SJXwc3rRFfuu8i1Wy3hqStccu0P/P/DwMUTeALvgrFg9Fo9rxe8dKUReoiLg==');
define('AUTH_SALT',        'ZWOtJEKEMsQaq8aqjPB/Ih8l80yY9WypFH2BIJddjLr1UTuXUD+1DPDcBzwEbRIWKcNRTueHnGML1tBYwy3Qrg==');
define('SECURE_AUTH_SALT', 'CPnUX7Lt2HszspR8djF/MLZisVtbXNQml0TQGVWMLJ+DupObv327GHvXUuprcFEbmCwocWTtDoQOvbb30k3Axw==');
define('LOGGED_IN_SALT',   'bela+AQFCZ2CkcmMOWyYY7P9mFxlRsI7bdwV7RcGPM+cnP2LQYxMREunaHP9R2fCGQmlcofVEyK0c3TNjxz8DA==');
define('NONCE_SALT',       'KygU4sr7nY1bUeBqjFTsoDvw/Sf+YjjvcGSXp9/K06oeZDJazHuxNn50byr19VfiWT/AI5LvZhqPVQxkHM9Jdg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
