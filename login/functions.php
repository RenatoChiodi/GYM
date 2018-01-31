<?php
require_once('../config.php');
require_once(DBAPI);
$administrators = null;
$administrator = null;
?>

<?php
/**
 *  Cadastro de Administrador
 */
function register() {
  if (!empty($_POST['administrator'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $administrator = $_POST['administrator'];
    $administrator['modified'] = $administrator['created'] = $today->format("Y-m-d H:i:s");

    hashpsw('administrators', 'password', $administrator);  
  }
}
?>

<?php
function administratorlogin(){
    authenticate('administrators', 'password', 'mail');
}
?>

<?php
function customerlogin(){
    authenticate('customers', 'password', 'mail');
}
?>

<?php
function advisorlogin(){
    authenticate('advisors', 'password', 'mail');
}
?>

<!--

As primeiras linhas fazem a importação do arquivo de configurações e da camada de acesso a dados (DBAPI).

Depois, eu criei duas variáveis globais, para serem usadas entre as funções, e que vão guardar os registros que estiverem sendo usados:

    A variável $customers, irá guardar um conjunto de registros de clientes.
    E a variável $customer guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE).

Observe a diferença entre plural e singular nos nomes de variáveis. Em web, você vai usar muito isso: plural para vários, e singular para um único item.

A função index() é a função que será chamada na tela principal de clientes, e ela fará a consulta pelos registros no banco de dados, e depois colocará tudo na variável $customers, para que possamos exibir.

Observe que tem uma função find_all() sendo usada, é ela que traz os dados. Mas, essa função não existe ainda.

-->