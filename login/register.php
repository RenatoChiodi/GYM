<?php 
  require_once('functions.php'); 
  register();
?>
<!-- modal de cadastro -->
<form action="../login/register.php" method="post">
			<div id="register-modal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <p align="center">CADASTRAR</p>
                        </div>
                        <div class="modal-body">

                          <div class="row">
                            <div class="col-sm-6"><h4 align="center">DADOS DO RESPONSÁVEL</h4>

                            <label for="name">Nome Completo</label><input type="text" class="form-control" name="administrator['name']">

                            <label for="name">E-mail</label><input type="text" class="form-control" name="administrator['mail']">

                            <label for="name">Senha</label><input type="password" class="form-control" name="password">

                            <label for="name">CPF</label><input type="text" class="form-control" name="administrator['cpf']">

                            <label for="name">Data de Nascimento</label><input type="text" class="form-control" name="administrator['birthdate']">

                            <label for="name">Endereço</label><input type="text" class="form-control" name="administrator['address']">

                            <label for="name">Bairro</label><input type="text" class="form-control" name="administrator['hood']">

                            <label for="name">Cidade</label><input type="text" class="form-control" name="administrator['city']">

                            <label for="name">Estado</label>
                            <select for name="administrator['state']" class="form-control">
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

                            <label for="name">CEP</label><input type="text" class="form-control" name="administrator['zip_code']">

                            <label for="name">Telefone</label><input type="text" class="form-control" name="administrator['phone']">

                            <label for="name">Celular</label><input type="text" class="form-control" name="administrator['mobile']">

                            <label for="name">Foto</label><input type="file" name="administrator['photo']" accept="image/*">


                            </div>

                            <div class="col-sm-6"><h4 align="center">DADOS DA ACADEMIA</h4>

                            </div>
                          </div>       
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                        </div>
                    </div>
                </div>
            </div>
</form>