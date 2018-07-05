<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'bd_revicol');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6$b)9E}czYwX5#nPo$xhi]xc; CQ/czpx9~]e$8}KG|mFY:FUbM>v}PH*^s3XUH}');
define('SECURE_AUTH_KEY', 'YA- UI{$zVOVgre75sajCg7<9,%Fi9ljOJd8.YnBQy^[9>t @]O=JQ(jEfc/CK:L');
define('LOGGED_IN_KEY', 'Xqqpr2y|s[O_=30YGjXYbqaLvtSV^Uf[&uR3>yefQur(Cg,?87e:C}rL*PWP%(W_');
define('NONCE_KEY', '^8k8(^q$4t0bO=#43N,v(9sL!G.ym**fl3| .+7e`*5j<f$C`ePD/#y+KP7HV.)E');
define('AUTH_SALT', '#Z:5r`*oQ/a=ZNKCA!~6 1M {*Q_4M+>FMxgGUiak%];w`t.uW<BESz8,Vdk*d0^');
define('SECURE_AUTH_SALT', '=BbfmWhQQ$6j=Fb:aY?xpV{s+Iv|O}*5t:5i0PY%{UdV_hhEmS7kXOE/aT^x#Z;W');
define('LOGGED_IN_SALT', 'X]b_OD{I/NS`k5^rl8m&[a].5#2m9B@xb!krAXe+rjw$&uGw}b>Q2q!NKmJf;pb)');
define('NONCE_SALT', 'a1sA%Xyr*u]eVIs&m)F,4,</?R^wVeMt(EL`^j+-}gjX%Y`RkfgQ}A0B;}Yr$xFj');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

