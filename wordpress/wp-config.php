<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'talento');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'designer2802');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`zJ(^70tAqU^D}9I;B9vP9`xJ,>]^KU|`tI}%`vP.V{0MBT$.DIG9^]F7kKk3u@_');
define('SECURE_AUTH_KEY',  'J Hz c8We^R/|5XuS&yD!n4A^`QTNFg4rm1_!s8ijCnZIw 4vT/ma&UCg)A.jp.c');
define('LOGGED_IN_KEY',    '( DONCv#fP&J9cKu!Pt1Uuld0Q2-(d8aV+.>[uAWkN(2Vj(?lr|d<|H`5A~[*y4T');
define('NONCE_KEY',        'tYU g~X;Cy]lQLL$;J<s|6_Wh_:n!s#<{<u*,~<ucaV-ofR?-l~+{Avt`.IQLl}m');
define('AUTH_SALT',        'Pk1<. <tg(%I]p6pf) neYBACIBdPOESn<[3zxj.Sc$dA&IRnyrYR{G%!mo3G C;');
define('SECURE_AUTH_SALT', '[uE&aS{2ZXX!1N(**@H|j/Reug,]++T2SA%2U`eJ-/x[}!J[6*rAfkr/$y:@gs5O');
define('LOGGED_IN_SALT',   'l1 CVQBFwL(50aMu}~l{n}S&sWfU`8D)GU0s!0h5UO>U>an 5ct%Z=giIa43svj#');
define('NONCE_SALT',       'n>*JA[?yZMMf7bQ+Nb`nI8z]TgJgM6X!yE hhG2;-69)[Ml-:9O+Rl?[&xqyT;bX');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
