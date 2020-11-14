<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'dezmin' );

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
define( 'AUTH_KEY',         '%bV0}xVvBX7S4Cn|+RV=&cJu;+JW Y4BgU&`rn5<VB<$[JTTKV3--~IK)15|ma=+' );
define( 'SECURE_AUTH_KEY',  'yP1i;73:6;uonQ2`zww?T7!n]@q M7R85h#VQ^j6 (bK1G[/UKxDp:Z|D7EinK8p' );
define( 'LOGGED_IN_KEY',    '/I:#]b#c`x`SLvLVgD~?R{lq}ZQ3L+eV9)26|*ya:@Ddv_EN<_JLiG%K1G[8bMU{' );
define( 'NONCE_KEY',        'M)YjuT^T|x6Ng^ODG(-wbgcQE| D9gi{R8MhmanR@4vP?NpoT1D}5)6FR9P](3w:' );
define( 'AUTH_SALT',        '$VcF++3}o8hVh,jx(J3tQ|s)E]~.4!0&T u|-)Q-a,jNL)ftcK]}-3c`JQsL %OA' );
define( 'SECURE_AUTH_SALT', '~p]6*YO-tNehbzQ;jg?S60i%,XueOBg|xv?2HkYJK0Im eJ&|,Px}GDk^z4:!Lf!' );
define( 'LOGGED_IN_SALT',   'XE/~_!b^}mj&]:UgN&L|@Mm;vF7G[f>^7nN4^A}B%oe3kftax8_#MS`:KFGG$V]8' );
define( 'NONCE_SALT',       '4YKIA}~I#i&|QU&lv<_KT?usbB=NK/jW<>no[(ZvNiF}5_ZHCvM,l&-8Od!5zO7C' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
