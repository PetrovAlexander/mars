<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mars' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';#(zk4)yQ9dyrXE}[E2=8k(WR:AgleJ]]8JAR{8LWR=iz]Yya=K,V1lea<YPQVYq' );
define( 'SECURE_AUTH_KEY',  '!t|~T&V26C3egs;<P`[cy04Ld1bcCM`elYCcKTQVo1A?cO9EA`:(f+aWYR8t8DW8' );
define( 'LOGGED_IN_KEY',    ')Nj8YIs.wPk!t5w#keoqW-AQv2J2r=JK!`y1#^A1|/I2p]Q-508M?M1ao@Vr9@be' );
define( 'NONCE_KEY',        'U^ZrkDryJ!VcFN=I~,7Rk:)b9`Ny~JPRi]lwzN;h(~lYzwf61>sD+?FBfK-#T*z7' );
define( 'AUTH_SALT',        '(a:l?r^BxFJjoplYkECp^xobRbT*EpB|WV?}1C%4-mvvuad8TgqP+mJ@O&G.*fkO' );
define( 'SECURE_AUTH_SALT', 'A.h<s;_C_cNW@o-}B<Y{}q/Ni^mwX]q#V92k&v;i.8K5l^j `/uU[DevPi~?b6oh' );
define( 'LOGGED_IN_SALT',   'lq7:WF~.x/Zkd+_F8^0J}EOd+anx(=6gRy<94;^_:ZQYx~4<T3Z,H&~=8-s@<A_.' );
define( 'NONCE_SALT',       'lyN&luYtYD1]~;K}GLxx8<lJB^myt^ =6lu!=[NQ0y!6F%uin1icC,e>_uVvt}P*' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
