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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\Downloads\OSPanel\domains\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(vPUb@f~J(L(-XLI^;i<Eanjc>)qRD=NfB?ao7+x=mlWZ)]da.S@|l& !c|771lh');
define('SECURE_AUTH_KEY',  '&6tL}N]MYmVAoFNpg^v~4L!%)6X |o,){wB)U]kY.JzTF3BN%y&Xp5x7%5,`mrFn');
define('LOGGED_IN_KEY',    'qft}BoYxwNXKyCyUwlOCk7AS[!3U>T=Kx`/6-h7FxBIDuNRad}!bA2jkFIsn#+Fc');
define('NONCE_KEY',        'L/`U:oYJyMr%+f6 |XotUr=DVNA?m/gL5f_i.X[QH!0V8*fqrsAAyyP<WX-{eG.:');
define('AUTH_SALT',        '0d{T>[Ju5E(&Us898o{Y?JrebFQN(xrgtL2 [a}tnr||2=hh=d%krw+RZ!Ik=Gk]');
define('SECURE_AUTH_SALT', 'uS2] uEYh27r=[u5R5*liW6kfiW`_ZXg-Bc75:iik`bJu]YYL7N_1QN`<9YkNSMF');
define('LOGGED_IN_SALT',   'RxP0~o&l^luudqvphKx&oJDn^GJbuYb DlMuR_R2{lLH5$TjQ-BJ]Y-[D@Etz}y4');
define('NONCE_SALT',       'Ff a P>n:N[ W!Mu_srdD32[T 4nW(PhUC&:Sa`-E}rLk8&>@X+9S+RCo n25@cF');

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
