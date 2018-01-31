<?php
require_once('../config.php');
require_once(DBAPI);
$administrators = null;
$administrator = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $administrators;
	$administrators = find_all('administrators');
}
?>

<?php
/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['administrator'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $administrator = $_POST['administrator'];
    $administrator['modified'] = $administrator['created'] = $today->format("Y-m-d H:i:s");

    hashpsw('administrators', 'password', $administrator);
    header('location: index.php');
  }
}
?>

<?php
/**
 *  Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['administrator'])) {
      $administrator = $_POST['administrator'];
      $administrator['modified'] = $now->format("Y-m-d H:i:s");
      update('administrators', $id, $administrator);
      header('location: index.php');
    } else {
      global $administrator;
      $administrator = find('administrators', $id);
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
  global $administrator;
  $administrator = find('administrators', $id);
}
?>

<?php
/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $administrator;
  $administrator = remove('administrators', $id);
  header('location: index.php');
}
?>




<!--

As primeiras linhas fazem a importação do arquivo de configurações e da camada de acesso a dados (DBAPI).

Depois, eu criei duas variáveis globais, para serem usadas entre as funções, e que vão guardar os registros que estiverem sendo usados:

    A variável $administrators, irá guardar um conjunto de registros de clientes.
    E a variável $administrator guardará um único cliente, para os casos de inserção e atualização (CREATE e UPDATE).

Observe a diferença entre plural e singular nos nomes de variáveis. Em web, você vai usar muito isso: plural para vários, e singular para um único item.

A função index() é a função que será chamada na tela principal de clientes, e ela fará a consulta pelos registros no banco de dados, e depois colocará tudo na variável $administrators, para que possamos exibir.

Observe que tem uma função find_all() sendo usada, é ela que traz os dados. Mas, essa função não existe ainda.

-->