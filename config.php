<?php

/** criar banco de dados
$sql = "CREATE DATABASE wda_crud";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso";
} else {
    echo "Erro ao criar o banco de dados: " . $conn->error;
}
**/
/** O nome do banco de dados*/
define('DB_NAME', 'academia');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'mueller');
/** nome do host do MySQL */
define('DB_HOST', 'localhost');
/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
	define('BASEURL', '/gymsoft/');
	
/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
	define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>	
	
<!--
    o DB_NAME define o nome do seu banco de dados;
    o DB_USER é o usuário para acessar o banco de dados;
    o DB_PASSWORD é a senha deste usuário (no XAMPP, este usuário root não tem senha);
    e o DB_HOST é endereço do servidor do banco de dados;
    
    O  ABSPATH, define o caminho absoluto da pasta deste webapp no sistema de arquivos.
    Ela vai ser usada para chamar os outros arquivos  e templates via PHP (usando o include_once), já que ela guarda o caminho físico da pasta.

	O BASEURL, define o caminho deste webapp no servidor web.
	Esse valor deve ser igual ao nome da pasta que você criou no começo do projeto. Ela será usada para montar os links da aplicação, já que ela guarda a URL inicial.

	pode usar essas constantes HEADER_TEMPLATE e FOOTER_TEMPLATE para importar o topo e o final da página.

	Isso evita muito a repetição de código, e economizará seu tempo e esforço.

	Lembre-se que para usar esses templates, você precisará sempre requisitar o config.php, usando a função require_once.
-->
