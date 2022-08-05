<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'automatizabanco' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?GW}DSIqe[*iKHvNG{uoTrPRVMvW~Pf4p#tk#qL]!|QMk;XHb>G&`%;*>1Ecs-n&' );
define( 'SECURE_AUTH_KEY',  'Nil&08mn)~ytu-qO w12qQ{~eHt21E6VN-GB`!WFk=`^fscc6 ,0R%pIVSiO?.kg' );
define( 'LOGGED_IN_KEY',    '+SLZl`@!j4jk.|Wtb~B0r-+wm&hUhZDA}tH& 7u.6XZBZz;,OcNC0+SO3KU8g fx' );
define( 'NONCE_KEY',        '2w*Z#3m2yl!7!z1F-x!5OrrhT7-9jvhwZju*2bxrB lrcn!L&XUH5eSaQ43}?jpP' );
define( 'AUTH_SALT',        '7By-.CbMnTn|WgpXb}sfEN^kej2$e=kv|=7KL1S/mW>Bpl@V^u7idLG{9V,hU]zy' );
define( 'SECURE_AUTH_SALT', '@6OM!a>jL}}+4XsAl2!f|HLJieO$|w`O!xk17ywI_DR<]Z#J_L}.SujBE336oap.' );
define( 'LOGGED_IN_SALT',   'Oy`UvEB[s/9p:Z1lP8;Jo?qV=Fu=<}<>Q:}]UfuC1##f5#uY0s/.+8HeT75jhP1%' );
define( 'NONCE_SALT',       '4NDzypy&vO#KCi|x?QGw}Hg n/L)qW@RCNx2Vmg*:$9IbgqOXcAV1}b^jg%^,wij' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
