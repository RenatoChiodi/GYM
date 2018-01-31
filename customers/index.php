<?php
    require_once('functions.php');
    index();
  
 
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Alunos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
			<a class ="btn btn-primary"  ></i> <?php echo counti(); ?></a>
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Aluno</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>ID</th>
		<th>Foto</th>
		<th>Nome</th>
		<th>CPF</th>
		<th>E-mail</th>
		<th>Telefone</th>
		<th>Celular</th>
		<th>Atualizado em</th>
		<th>Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($customers) : ?>
<?php foreach ($customers as $customer) : ?>
	<tr>
		<td><?php echo $customer['id']; ?></td>
		<td><?php echo '<img src="'.$customer['photo'].'">';?></td>
		<td><?php echo $customer['name']; ?></td>
		<td><?php echo $customer['cpf']; ?></td>
		<td><?php echo $customer['mail']; ?></td>
		<td><?php echo $customer['phone']; ?></td>
		<td><?php echo $customer['mobile']; ?></td>
		<td><?php echo $customer['modified']; ?></td>
		<td class="actions text-right">
			<a href="evaluate.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-scale"></i> Avaliar</a>
			<a href="view.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal-customer" data-customer="<?php echo $customer['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<!-- modal delete -->
<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>

<!--
Esse arquivo será a listagem dos registros, e também será a página principal do módulo de clientes.

As primeiras linhas fazem a ligação dessa página com o módulo de clientes (pelo arquivo functions.php) e chama função index, que é o backend desta página.

Depois, coloquei um include para trazer o template de header da página, com todos os CSS’s e Metatags necessários. Assim, não precisamos reescrever essa parte.

A partir da linha oito (8) começa a marcação da listagem, apenas com um topo simples e algumas opções.

Na linha 20, você pode ver a verificação de mensagens de seção. Isso serve para exibir alguma notificação que tenha sido definida no backend, como mensagens de erro ou de sucesso, por exemplo.

Depois, você pode ver a tabela de registros. Dentro dela tem um loop (usando o foreach) que vai pegar cada registro da variável $customers e criar uma linha nessa tabela e exibir os dados. Como usamos os dados de forma associativa (lá na camada de acesso a dados), é possível obter esses dados pelo nome das colunas.

Isso é um padrão em vários frameworks. Também é possível criar objetos dessa forma.

A linha 49, mostra como você pode criar links para operações nos registros da tabela. Basta passar o ID como parâmetro, e a função no backend (do arquivo functions.php) deve ler e usar esse parâmetro.

E, no final, coloquei o template de footer, para fechar a página.

-->