<?php
mysqli_report(MYSQLI_REPORT_STRICT);
function open_database() {
	try {
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		return $conn;
	} catch (Exception $e) {
		echo $e->getMessage();
		return null;
	}
}
function close_database($conn) {
	try {
		mysqli_close($conn);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
?>
<!--
configuramos o MySQL para avisar sobre erros graves, usando a função mysqli_report(). Depois, temos duas funções.

A primeira função – open_database() – abre a conexão com a base de dados, e retorna a conexão realizada, se der tudo certo. Se houver algum erro, a função dispara uma exceção, que pode ser exibida ao usuário.

Já a segunda função – close_database($conn) – fecha a conexão que for passada. Se houver qualquer erro, a função dispara uma exceção, também.

Observe as constantes sendo usadas (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME). Dessa forma, caso você mude de servidor ou de BD, basta alterar o arquivo de configurações; sem precisar mexer no código principal.
-->

<?php
/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null ) {
  
	$database = open_database();
	$found = null;
	try {
	  if ($id) {
	    $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_assoc();
	    }
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table;
	    $result = $database->query($sql);
	    
	    if ($result->num_rows > 0) {
	      $found = $result->fetch_all(MYSQLI_ASSOC);
        
        /* Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */
	    }
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}
?>
<!--

Essa função find faz uma busca em uma determinada tabela.

Se for passado algum id, nos parâmetros, a pesquisa será feita por esse id, que é a chave primária da tabela (como definimos no começo).

Se não for passado o id, a consulta retornará todos os registros da tabela.

Nos dois casos, a consulta retornará dados associativos (usando o fetch_assoc e MYSQLI_ASSOC), ou seja, são arrays com o nome da coluna e o valor dela. Assim, fica mais fácil na hora de implementar a tela.

Caso aconteça algum problema na consulta e for disparada uma Exceção, nós devemos exibir o que aconteceu em forma de mensagem. Para isso, eu criei duas variáveis de sessão, do PHP, que vão guardar a mensagem da exception, e assim poderemos exibir na tela.

-->

<?php
/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

/*
Essa função é só um alias (leia-se “aláias”) para a função find, ou seja, uma outra forma mais prática de chamar a função sem precisar do parâmetro.

A função find_all retorna todos os registros de uma tabela
*/
?>

<?php
/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  //print_r($data);
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}
?>

<?php
/**
 *  Atualiza um registro em uma tabela, por ID
 */
function update($table = null, $id = 0, $data = null) {
  $database = open_database();
  $items = null;
  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }
  // remove a ultima virgula
  $items = rtrim($items, ',');
  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';
  } catch (Exception $e) { 
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}
?>

<?php
/**
 *  Remove uma linha de uma tabela pelo ID do registro
 */
function remove( $table = null, $id = null ) {
  $database = open_database();
	
  try {
    if ($id) {
      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);
      if ($result = $database->query($sql)) {   	
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  close_database($database);
}
?>

<?php
/**
 *  autenticação senha e email
 */
function authenticate($table = null, $password = null, $mail = null) {
  $database = open_database();

//username in where clause is coming from the user, don't execute it
//also fetch a clean copy of the username from the database we can trust to do things with like display -- assuming we filtered it on the way into the database.
$sql = "SELECT $password FROM " . $table . " WHERE $mail = ?";    
$stmt = $database->prepare($sql) or die('...');
echo "$sql <br> </br>";
//username must be a string, and to keep it clear it came from a user, and we don't trust it, leave it in POST.
$stmt->bind_param('s',$_POST['mail']) or die('...');
//Do the query.
$stmt->execute() or die('...');
//Where to put the results.
$stmt->bind_result($password);
//Fetch the results
if($stmt->fetch()) //get the result of the query.
{
  if(password_verify($_POST['password'], $password))
  { 
    session_start();
    $_SESSION['mail'] = $mail;
    $_SESSION['password'] = $password;
    header('location: ../administrators/main.php');
  }
  else
  {
    echo"password doesn't match.";
  }
}
else
{
  echo"username is wrong.";
}

  close_database($database);
}
?>


<?php
/**
 *  criptografar senha e salvar colunas / senha
 */
function hashpsw($table=null, $column=null, $data=null){
    $database = open_database();
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $columns = null;
    $values = null;
    //print_r($data);
    foreach ($data as $key => $value) {
      $columns .= trim($key, "'") . ",";
      $values .= "'$value',";
    }
    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');
    
    $sql = "INSERT INTO " . $table . "($columns,$column)" . " VALUES " . "($values,?);";
      $stmt = $database->prepare($sql);
      $stmt->bind_param("s", $password);
      $stmt->execute();
      echo "$sql";
    try {
      $database->query($sql);
      $_SESSION['message'] = 'Registro cadastrado com sucesso.';
      $_SESSION['type'] = 'success';
    
    } catch (Exception $e) { 
    
      $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
      $_SESSION['type'] = 'danger';
    } 
 
    close_database($database);
    }






    function counter($table){

      $database = open_database();
      $found = null;
  
    
      $sql = "SELECT COUNT(*) FROM " . $table;
      $result = $database->query($sql);
      
      
      
      
       
  
  close_database($database);
  return $result;
}

    
?>
