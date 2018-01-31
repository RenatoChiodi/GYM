<?php
require_once('../config.php');
require_once(DBAPI);
$customers = null;
$customer = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	$customers = find_all('customers');
}
?>

<?php
/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['customer'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $customer = $_POST['customer'];
    $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");

    hashpsw('customers', 'password', $customer);
    header('location: index.php');
  }
}
?>

<?php
/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['customer'])) {
      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");
      update('customers', $id, $customer);
      header('location: index.php');
    } else {
      global $customer;
      $customer = find('customers', $id);
    } 
  } else {
    header('location: index.php');
  }
}
?>

<?php
/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $customer;
  $customer = find('customers', $id);
}
?>

<?php
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $customer;
  $customer = remove('customers', $id);
  header('location: index.php');

}
?>

<?php
function counti(){
   global $number;
  $number=counter('customers');

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