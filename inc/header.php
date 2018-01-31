<?php
session_start();


if((!isset ($_SESSION['mail']) == true) and (!isset ($_SESSION['password']) == true))
{
    unset($_SESSION['mail']);
    unset($_SESSION['password']);
    header('location:naoestalogado.php');
    }

$logado = $_SESSION['mail'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Gymsoft</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- fa fa Font Awesome -->
  <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">


<!-- HEADER -->
 
<!-- esse bloco de código em php verifica se existe a sessão, pois o usuário pode simplesmente não fazer o login e digitar na barra de endereço do seu navegador o caminho para a página principal do site (sistema), burlando assim a obrigação de fazer um login, com isso se ele não estiver feito o login não será criado a session, então ao verificar que a session não existe a página redireciona o mesmo para a index.php.-->
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>administrators/main.php" class="navbar-brand">INÍCIO</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Administrador <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Administradores</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Administrador</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Aluno <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Alunos</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Aluno</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Orientador <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Orientadores</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Orientador</a></li>
                </ul>
            </li>


            <!--Botao Sair -->
            <!--Falta alinhar para a direita -->
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <?php echo $logado ?> <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <!--Destroi a sessao e volta para o index -->
                    <li><a href="<?php session_destroy(); ?>../index.php">Sair</a></li>
                    
                </ul>
            </li>
          </ul>
          
        </div><!--/.navbar-collapse -->

      </div>
    </nav>

<main class="container">

<!--
O que essa marcação faz é o definir inicio de um página HTML básica, já usando o Bootstrap. E, também, vamos usar o Font Awesome, que é uma biblioteca de ícones, para os nossos botões.

Observe que em várias linhas tem o seguinte comando:

<?php echo BASEURL; ?>

Você deve se lembrar que a constante BASEURL foi definida no config.php, certo?!

Sempre que você for montar um link, você deve usar essa constante, já que ela guarda o endereço correto dessa nossa aplicação web no servidor.

Esse header também cria um menu (a partir da linha 22), que ficará no topo da página. Eu até adicionei dois links para os futuros “módulos” do CRUD:

<li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
<li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>

Essas páginas ainda não existem. Vamos criar nos próximos tutoriais. Mas já deixe os links aí, esperando pelo código do “módulo de clientes”.

-->