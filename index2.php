<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Cliente</p>
				</div>
			</div>
		</a>
	</div>

	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="customers" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Clientes</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>

<!--
As primeiras linhas fazem a inclusão do arquivo de configuração e da camada de banco de dados.

O seguinte comando:

php include(HEADER_TEMPLATE);

É ele que faz a importação do nosso template de header para a página, e traz toda aquela marcação em HTML. Assim, você não precisa escrever o topo da página em cada script.

Depois disso, é que começa a página em si. Coloquei um título simples, e um grid que vai manter os botões do dashboard. Esses botões usam o componente do Bootstrap e o ícone vem do Font Awesome.

Por último, usei o comando para importar o template footer da página:

php include(FOOTER_TEMPLATE);

-->