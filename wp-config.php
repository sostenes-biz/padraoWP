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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fabrica_site');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'fabrica_site');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '8E$f?+2[xXG3');

/** Nome do host do MySQL */
define('DB_HOST', 'fabricadeideiasdf.com.br');

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
define('AUTH_KEY',         'EI$nl#9!}C$eLwKa-9N,BsshM@FL1|x1A#&+4N]81<Et[_j{p<A89J:;Soo*690}');
define('SECURE_AUTH_KEY',  'J(O#hH2xHJxR2o=>P:tB7PR)dAHrga]9wx!j6S-}bI6.c&p0B@WREU]{G4>B,7mI');
define('LOGGED_IN_KEY',    'VfS~l^S9FK5glBN%)-/X@!8M|P4d9GyVF8m#OnS}2iH/#5OOwEf6jD|d{!C]wbP9');
define('NONCE_KEY',        '6Hq=X2sHuHi47Hn&CpG 2reJ3H0Wb0#/k*qi?>^bv~scV z{9cPd:Ul*WM [~nkH');
define('AUTH_SALT',        '0#Fr$he^oR%Cm{rrnkJV<Gd(QJJ;cEq&wdeE[V{-+PGVtCIl|/ %Ey0`W|h.]n5S');
define('SECURE_AUTH_SALT', 'SiK2%6=zyzIm+T)$WH)W;Tt5O}JwGym3gNn76B]HOb8L|&Y?~`g+ccQ!`=iP2^]4');
define('LOGGED_IN_SALT',   ' WBXnWIQhg*A*%pZ&F1Wm3TRO|T0{WWDb`P48Uj$1P^}*l%9`Vib{;HJyNgl=9H1');
define('NONCE_SALT',       'o~#_AKjb^$tG`$a]TOmy$0SF=?Tgk=an`)Cp3?Fyu^(Gb,=s^Low}x?WPS?@!sx,');

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
