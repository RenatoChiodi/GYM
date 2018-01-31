<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Administrador: <?php echo $customer['name']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">

	<dt>Foto:</dt>
	<dd><?php echo $customer['photo']; ?></dd>

	<dt>Nome Completo:</dt>
	<dd><?php echo $customer['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $customer['cpf']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $customer['mail']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $customer['birthdate']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $customer['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $customer['hood']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $customer['city']; ?></dd>

	<dt>Estado:</dt>
	<dd><?php echo $customer['state']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $customer['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $customer['created']; ?></dd>
</dl>

<dl class="dl-horizontal">

	<dt>Telefone:</dt>
	<dd><?php echo $customer['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $customer['mobile']; ?></dd>

</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>