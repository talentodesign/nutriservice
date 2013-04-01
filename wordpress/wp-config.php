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
define('AUTH_KEY',         's[Y_y1mb;o,tWi9gU-aDDhq+[>^Ma1|ZHkiEX)kGVz8Dyf*FnIsqU0U4*r!|oi8[');
define('SECURE_AUTH_KEY',  'Vo]-?yJ6E[rhYMI8/vA@P/n9,%VVv5lH{*6_ 3oU,7@ig>?FpOb=*W!648AdESF!');
define('LOGGED_IN_KEY',    'AGi6(vPtw;;[*9I)9S<y^1=?#bso`$:pvH@Vx|b-T6MGG]`xsmKGMs=+=%ivKkm8');
define('NONCE_KEY',        '$zYyxgJ|k,!40rZ-rOCSO%bM3tCr.DwEzf~&o5JIz>1<vtLc;&^~*E Lx%OY[S7m');
define('AUTH_SALT',        ':y1Zo-ei_d*]iw1!}=^n}}^6s~(|R^0(KtI>DDKm}K_|flF7x+##1h!b~eM+U77F');
define('SECURE_AUTH_SALT', 'Q|2rUfFDIALfMIAxCGi7Bi);uWvB3B/ul*Q#kxE:]J.IGHnCAA}%Y}lyt5~2z:c]');
define('LOGGED_IN_SALT',   '.$PK6b}uPH@b`ZIb4+=+inl>Ylm1>J82#`:v?#9&mx 0q#z3yUfHiMqP/Hq~||]M');
define('NONCE_SALT',       'g=4CF>IF!b|3ALp6e/GsPP*}Dn aFv-BhoDXKA]`6SYA.=5?u4}1OySJi*> u|#&');

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
