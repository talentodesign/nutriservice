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
define('AUTH_KEY',         'H;mR_OV{(3<LQY%+ph.A5gN9zirByVh&DdKu|+{*2GN:LB8er#G82?][~`f0C>B2');
define('SECURE_AUTH_KEY',  '&<eH`C7Yx2xs4kMUoyNnVRn`<;kNRw)~.Xg_VKz}A~YDtXv9e+&qbUG8T>A9z:C{');
define('LOGGED_IN_KEY',    '5&w!yz(:($`2*NltY,f_[BX+LM;EEJGaq.Rxt4PqN-s]jQw|gA1W>3tIfNQN?i<]');
define('NONCE_KEY',        '{(lQLD`D{lOj2hKx|3MRY~@Q^Xqlm74~L#YMfg)k}Y>xT/)T/wke>EGcavlPL0n$');
define('AUTH_SALT',        'uzY /G/x)/CyCSSMrFF9txqz}>+@HU1u%znD!%W;WQ)<2NnPlq4L)=)r$GPo[VXc');
define('SECURE_AUTH_SALT', 'FYf@knzonki.!kh^asC-fHr1%eA/1crjI~be)oUvyZt1f&jBA_sDN(9PkTpSexng');
define('LOGGED_IN_SALT',   'V;4?pE^<XtiI$nU-^Fw[69d,0.^SnUI:(TYpu1+]e0W<Scov#sLhC{LpBNd*/ORu');
define('NONCE_SALT',       '{N$`%~56lKOf{iUfN-E{>G8LfHuZ?2>M3]gvGyY;@HDdTSe8B*n@k{ A2O-g5O3+');

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
