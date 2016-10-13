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
define('DB_NAME', 'tehnostroiresurs');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'NO^$184ZrTd:vK8eqBq2a2MG2tOIgpsw<r--@guv^0l%~MegcjeFl?UsmBZ/.8|L');
define('SECURE_AUTH_KEY',  '_;!8)Z%V+|U10V$`Oj.dUjn7]^|<H9$nX/mh_=?i=CS}?T6gQHnDe(I56FwC_O~;');
define('LOGGED_IN_KEY',    'yzDv]._e/)OX>iR[0](O+x,1f_1(Of3MpIM`FGa,L#m<jd}b}Q*<#?)/ ixy{/Au');
define('NONCE_KEY',        'q1vZ|I6TW!l+>vvQZAS[3#<Aw~MJE+`)P]0If(&Ngq9-r]!C|[+1(hXnt;O_TaJS');
define('AUTH_SALT',        'VppiL0X^*jDLj@:}kw(GRNp_gu1[DUm-Oj!ZI!{(GC(HAg3l&uKA2<aD>3j]qr z');
define('SECURE_AUTH_SALT', '`OO[qK5SrjtQ^@R;3F-[`*jW~1|-nCE(Pv>de&sJK;$h5/HF?jnE6~n[@il8:if(');
define('LOGGED_IN_SALT',   'nQFpir=`8Cyq^9Ee1,NY&1tMdu?Q.Ef4XbZX~];yQ-0JgYE$$6mB-CduSq:lKjaS');
define('NONCE_SALT',       'Z#Nd3f:TDq&1?@(H.t`F33[Q=-lm=7uX:h]@fj5]t&E)zR9N[z]n?UvZkN.e]v=2');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'jhY6VkBN92Ps_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
