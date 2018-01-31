<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Administrador: <?php echo $administrator['name']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">

	<dt>Foto:</dt>
	<dd><?php echo $administrator['photo']; ?></dd>

	<dt>Nome Completo:</dt>
	<dd><?php echo $administrator['name']; ?></dd>

	<dt>CPF:</dt>
	<dd><?php echo $administrator['cpf']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $administrator['mail']; ?></dd>

	<dt>Data de Nascimento:</dt>
	<dd><?php echo $administrator['birthdate']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Endereço:</dt>
	<dd><?php echo $administrator['address']; ?></dd>

	<dt>Bairro:</dt>
	<dd><?php echo $administrator['hood']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $administrator['city']; ?></dd>

	<dt>Estado:</dt>
	<dd><?php echo $administrator['state']; ?></dd>

	<dt>CEP:</dt>
	<dd><?php echo $administrator['zip_code']; ?></dd>

	<dt>Data de Cadastro:</dt>
	<dd><?php echo $administrator['created']; ?></dd>
</dl>

<dl class="dl-horizontal">

	<dt>Telefone:</dt>
	<dd><?php echo $administrator['phone']; ?></dd>

	<dt>Celular:</dt>
	<dd><?php echo $administrator['mobile']; ?></dd>

</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $administrator['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>