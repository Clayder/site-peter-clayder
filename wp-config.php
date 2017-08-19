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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */


define('FS_METHOD','direct');

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'site-peter-wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '$^}3foG{Y>]GV*Rpf%cs}LtmC+&#*Lwv=z,y.bb vSzMyz;5=Q}c&Xr[|jgm}bv<');
define('SECURE_AUTH_KEY',  'yUV6N(;Rw7?p)cx#06p^4<juqnJXcq6&O#F7nqA=:_|_H%Dhi/Ee>lihj)`(]/l)');
define('LOGGED_IN_KEY',    '8Dwz$4U}##<6+d4.1M_9aZ1~u5uC5sg3$4LJ@LS&M]u#z0VaHXa>U`Zu*,f&QD7b');
define('NONCE_KEY',        '!yUiT9tyl>&kG$]/&yuiR=]rh!?7rdP:)ct{;,0xC<O]FSSt~4T X3cmn;cEX^%)');
define('AUTH_SALT',        'YKEjCJ{t7l_qH?& DCOFI|m,XU<BBQ6, 9p%bktxW]Y0OFb~`.n/|nqcb13rV-m]');
define('SECURE_AUTH_SALT', 'XW+jB*iKeP8{Us;l[BSNpdsR;xbshm|yv_#%zgLJ`GL=k!c0&8[*{v&^~rr=8_to');
define('LOGGED_IN_SALT',   ';R}vB&$`{g09F*}&THY[Mpqd;hv*<^.T|Z6i1Nwa|w6/>X)Jg^Rtb?ELS26vwEUY');
define('NONCE_SALT',       'VST$=:}<99KRUIeF&iw6}!L;p8TXNN <5S|B`h&VSK{`*:8~gfVTgkP<wyhDxtcE');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
