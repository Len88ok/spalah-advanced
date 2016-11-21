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
define('DB_NAME', 'star');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'zSS^M,N}fvt}DN|PX;;B-f+.%(jwau]*x]Lg1bEz5>2eEf|j<WG+KC-2p~(pf1 $');
define('SECURE_AUTH_KEY',  '0&WHWG@D4R:`p$D+pmT*0:FgPd(z--Xrn5Y(y]S-8WRdYoVuCOp@?wq<H1EEw&J>');
define('LOGGED_IN_KEY',    '?V#5Rea-;8p9nI0 Bdm3io=&V!OQc$|kA+(2+>*4-#O}, [UN%RHDzb);E96Y qG');
define('NONCE_KEY',        '=7=9V<@-(_]G50-F/S .H-uqIR+~=zK1.LV;|*ot2Ux<kg)QAaLBmCg||t1+vq~Z');
define('AUTH_SALT',        '5hlEDO G60<h-nul]-hkCfy-`r-Tn(z(XTO;6vkjvn[b6j+0_W5]l?n$<^c`{h5I');
define('SECURE_AUTH_SALT', ']lcm8jREf+VQ2:|pu[A]?s-y;L+>rm2(!3;%G_ls.904iE-a  7&lU|]k19@J,v+');
define('LOGGED_IN_SALT',   '`||#8rQ}k+xdJv<AmiUZZ?$A|w++UI8./@s7{0-t6OBsT=z{+:+P)netKSRr 8%.');
define('NONCE_SALT',       'VNAEc^M}-!t7|x@z^nV/wyOtR^Ph{o?O(QI1,)|JwyFmLff&{6k{I`e-nY+4;]Gu');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
