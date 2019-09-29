<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_sparrow' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v[P]u_oFu[Zw+jC1Y1r)+4OjM9fe#|&k*$n;sk=`#N)s5l<(|A>Y:Yqz.@&Dedo$' );
define( 'SECURE_AUTH_KEY',  '>PXG.W{H?Vjy7Qlzm>d9C&9:ir,_fV0nVK/L{GX8L*h[BJSHvlc@9!2b# GoUrIi' );
define( 'LOGGED_IN_KEY',    ' Sqanau`RG=U76[7tFTG|J&;#e.]}{E9^23kM0OlIQvZi<%;+YhSDZ|X#n.OYsi5' );
define( 'NONCE_KEY',        'YC!&8sTaKieXz1fYJY?Y+lh>^&T)m#w]veuO/ivo}n=5 hp{?.z:0p6$6En!Q%$Z' );
define( 'AUTH_SALT',        'sZ*bG?=K^lV,@t0JaK l7O0;@}< p:u7W&(QM*Z7,+5$&jrw&d]rs<aH5R@!L4tV' );
define( 'SECURE_AUTH_SALT', 'KbLW$AHbPh<3lE>Q6={/yfW_ZbO+=:|a3*nh0e(/jCEO|Zo AQ5(hnzP*z)eT.jW' );
define( 'LOGGED_IN_SALT',   ';|)Q 0`hu*$uctnI&<9~?xZ{uTg,tk8g#fn.nl we=X_|$B]yCL2~aKi$Kd`j/?d' );
define( 'NONCE_SALT',       '4k,[8:q0;kgQIy#OG%vAGcP$_H+-[V]DuPaVQ?Jw/)hj Z5okC)snX6~_Tydx%ir' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
