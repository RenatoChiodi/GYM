<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Administrador: <?php echo $administrator['name']; ?></h2>

<form action="edit.php?id=<?php echo $administrator['id']; ?>" method="post">
  <hr />
  <div class="row">

  <div class="form-group col-md-6">
  <label for="name">Nome Completo</label><input type="text" class="form-control" name="administrator['name']" value="<?php echo $administrator['name']; ?>">
  </div>

  <div class="form-group col-md-6">
  <label for="name">E-mail</label><input type="text" class="form-control" name="administrator['mail']" value="<?php echo $administrator['mail']; ?>">
  </div>

  <div class="form-group col-md-6">
  <label for="name">CPF</label><input type="text" class="form-control" name="administrator['cpf']" value="<?php echo $administrator['cpf']; ?>">
  </div>

    <div class="form-group col-md-6">
    <label for="name">Data de Nascimento</label><input type="text" class="form-control" name="administrator['birthdate']" value="<?php echo $administrator['birthdate']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Endereço</label><input type="text" class="form-control" name="administrator['address']" value="<?php echo $administrator['address']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Bairro</label><input type="text" class="form-control" name="administrator['hood']" value="<?php echo $administrator['hood']; ?>">
    </div>

    <div class="form-group col-md-6">
    <label for="name">Cidade</label><input type="text" class="form-control" name="administrator['city']" value="<?php echo $administrator['city']; ?>">
    </div>

    <div class="form-group col-md-3">
    <label for="name">Estado</label>
    <select for name="administrator['state']" value="<?php echo $administrator['state']; ?>" class="form-control">
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
      <label for="name">CEP</label><input type="text" class="form-control" name="administrator['zip_code']" value="<?php echo $administrator['zip_code']; ?>">
      </div>

      <div class="form-group col-md-3">
      <label for="name">Telefone</label><input type="text" class="form-control" name="administrator['phone']" value="<?php echo $administrator['phone']; ?>">
      </div>

      <div class="form-group col-md-3">
       <label for="name">Celular</label><input type="text" class="form-control" name="administrator['mobile']" value="<?php echo $administrator['mobile']; ?>">
       </div>

      <div class="form-group col-md-3">
      <label for="name">Foto</label><input type="file" name="administrator['photo']" accept="image/*">
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