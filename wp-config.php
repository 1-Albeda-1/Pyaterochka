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
define( 'DB_NAME', 'kristinabd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'x^%n13[Eii:FRUS_fJOuL)Jcqh.A~%*%@VS^{2`9^&y~3t`./3{+xOP0% rd-y8b' );
define( 'SECURE_AUTH_KEY',  'oyrDHI<Og;s.)4E)3 qoAbpL?MWh*z5[r,@Qb}US 5WOy)S<3]sdZ8{;9^d||E#/' );
define( 'LOGGED_IN_KEY',    'Y0*Z@,)cD{q292]DE3+ksvAL3H$);_+z:@]VB$<_g+%8lG&6k]yLCZu[)pc5)k}~' );
define( 'NONCE_KEY',        'rff{zg}yV<[pzyrQ1qU+4fK+dwyqRxR;7XnjvbIj;Tu{(_AHto6`+z?3KJ7SF^eo' );
define( 'AUTH_SALT',        'B{AVb~H8My.MB=([j|(n[ WzDtk)2Cv=5c~L;1>,u6Qc9EQXI+^?ba:ZQ.&9}bh[' );
define( 'SECURE_AUTH_SALT', ',*}!OV-0.FYG&7xUt?wEjH0;y1_1zm9}<9s`.uCEUW-cWWYnI1:bMp=,#dD[-D~.' );
define( 'LOGGED_IN_SALT',   'kj{PWM/s<E8Q(,yRRQrP5dRxcf^]V(9gtG2L!3R!G1I^1,`Nwaga;D,a}[Wt`3Z}' );
define( 'NONCE_SALT',       'JXP}m$SYqi1BrL07)i.NyiKn)HNU4-%f<:YTW]WeS_SSftVT{XCeGXz7F?:V{d7(' );

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
