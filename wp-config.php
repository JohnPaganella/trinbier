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
define('DB_NAME', 'trinkbier');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '/`[DWj@#$iG%YTSDy-2-%UWvTjS0wH~T^=I`111+siH TYo`{:&B|vL+V;x;C` F');
define('SECURE_AUTH_KEY',  '*kf_Ggjl{U-DV0sh9$^Cbuus})a~z~Os9X-q|,w#65|=Pm _A$2:r.+`O,|NmT-2');
define('LOGGED_IN_KEY',    '5g#>,yFn.cM;^lnaB+.+V^XM|]{/9HxGR6^&$yYY>c,&R>1aQ5%Cdb[[)([W2EyL');
define('NONCE_KEY',        '02:~w!$SM`hfl_&r]^^^(+|KFkDb@`r%yr&n${D;L.$+Dn/*--a-Kw7|,7/y?[9_');
define('AUTH_SALT',        '#4T@r 2UqVyUVs,N+NnR cCa(C0Bgv{Dvdei^p9J?wp@Ie! O3Aa5#gZ9IV7fJ|B');
define('SECURE_AUTH_SALT', '7k`^lM7L&!b~]yp)=QMAXe5iw1hQsrm<;!I Z|F1PuI9_A!;^G!s|bl_qQ;s%XMR');
define('LOGGED_IN_SALT',   ')X{b~ n~C!7dRN+^gSd{{PwP~`2|b*!49>=%cm5YaJ?<hHKICX2]rELzW&zt26;n');
define('NONCE_SALT',       'sIp|0,aAy1+BJs:vct3x#{Dpdpm5#4smY*4H!#6yGhlf.`i-DUPd7uItW--f-D6&');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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
