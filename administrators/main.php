<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>

<!-- FIM HEADER -->

<!-- BODY -->

<?php $db = open_database(); ?>

<h1><?php echo "BEM VINDO ". $logado; ?></h1>
<hr />

<?php if ($db) : ?>

<!-- MENU ADMINISTRADOR ALUNO ORIENTADOR -->

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../administrators/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Administrador</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../administrators" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-id-card fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Administradores</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../customers/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Aluno</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../customers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-o fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Alunos</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../advisors/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Orientador</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="../advisors" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user-o fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Orientadores</p>
				</div>
			</div>
		</a>
	</div>

<!-- FIM MENU ALUNO ORIENTADOR -->

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<!-- FIM BODY -->

<!-- FOOTER -->

<?php include(FOOTER_TEMPLATE); ?>

<!-- FIM FOOTER -->

