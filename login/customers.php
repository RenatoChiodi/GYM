<?php 
  require_once('functions.php'); 
  customerlogin();
?>
<!-- customers modal -->
          <form action="../login/customers.php" method="post">
            <div id="customers-login-modal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <p align="center">ALUNO</p>
                        </div>
                        <div class="modal-body">

                          <label for="name">E-mail</label><input type="text" class="form-control" name="mail">

                          <label for="name">Senha</label><input type="password" class="form-control" name="password">
                                  
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Conectar</button>
                          <input type="checkbox" checked="checked"> Manter conectado
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Sair</button>
                          <span class="psw">Esqueceu a senha?</span>
                          <!-- <span class="psw">Esqueceu a <a href="#">senha?</a></span> -->
                        </div>
                    </div>
                </div>
            </div>
          </form>

