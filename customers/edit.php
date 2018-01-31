<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Administrador: <?php echo $customer['name']; ?></h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">

  <div class="form-group col-md-6">
  <label for="name">Nome Completo</label><input type="text" class="form-control" name="customer['name']" value="<?php echo $customer['name']; ?>">
  </div>

  <div class="form-group col-md-6">
  <label for="name">E-mail</label><input type="text" class="form-control" name="customer['mail']" value="<?php echo $customer['mail']; ?>">
  </div>

  <div class="form-group col-md-6">
  <label for="name">CPF</label><input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
  </div>

    <div class="form-group col-md-6">
    <label for="name">Data de Nascimento</label><input type="text" class="form-control" name="customer['birthdate']" value="<?php echo $customer['birthdate']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Endereço</label><input type="text" class="form-control" name="customer['address']" value="<?php echo $customer['address']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Bairro</label><input type="text" class="form-control" name="customer['hood']" value="<?php echo $customer['hood']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Cidade</label><input type="text" class="form-control" name="customer['city']" value="<?php echo $customer['city']; ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="name">Estado</label>
    <select for name="customer['state']" value="<?php echo $customer['state']; ?>" class="form-control">
                            <option value="">Acre (AC)</option>
                            <option value="">Alagoas (AL)</option>
                            <option value="">Amapá (AP)</option>
                            <option value="">Amazonas (AM)</option>
                            <option value="">Bahia (BA)</option>
                            <option value="">Ceará (CE)</option>
                            <option value="">Distrito Federal (DF)</option>
                            <option value="">Espírito Santo (ES)</option>
                            <option value="">Goiás (GO)</option>
                            <option value="">Maranhão (MA)</option>
                            <option value="">Mato Grosso (MT)</option>
                            <option value="">Mato Grosso do Sul (MS)</option>
                            <option value="">Minas Gerais (MG)</option>
                            <option value="">Pará (PA)</option>
                            <option value="">Paraíba (PB)</option>
                            <option value="">Paraná (PR)</option>
                            <option value="">Pernambuco (PE)</option>
                            <option value="">Piauí (PI)</option>
                            <option value="">Rio de Janeiro (RJ)</option>
                            <option value="">Rio Grande do Norte (RN)</option>
                            <option value="">Rio Grande do Sul (RS)</option>
                            <option value="">Rondônia (RO)</option>
                            <option value="">Roraima (RR)</option>
                            <option value="">Santa Catarina (SC)</option>
                            <option value="">São Paulo (SP)</option>
                            <option value="">Sergipe (SE)</option>
                            <option value="">Tocantins (TO)</option>
                            </select>
      </div>

      <div class="form-group col-md-3">
      <label for="name">CEP</label><input type="text" class="form-control" name="customer['zip_code']" value="<?php echo $customer['zip_code']; ?>">
      </div>

      <div class="form-group col-md-3">
      <label for="name">Telefone</label><input type="text" class="form-control" name="customer['phone']" value="<?php echo $customer['phone']; ?>">
      </div>

      <div class="form-group col-md-3">
       <label for="name">Celular</label><input type="text" class="form-control" name="customer['mobile']" value="<?php echo $customer['mobile']; ?>">
       </div>

      <div class="form-group col-md-3">
      <label for="name">Foto</label><input type="file" name="customer['photo']" accept="image/*">
      </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>

    
</form>

<?php include(FOOTER_TEMPLATE); ?>