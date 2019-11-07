<?php 
      require_once('../dependencias/dependencias.php');
     require_once('../dependencias/navBar.php');
     
  ?>  



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
  
    <title>Cadastro Cliente</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

   
  
     
</head>
<body>

 <div class="container-fluid" id="container-cad-mecanico"> 
    
              <form id="frmcad"  method="POST" >
                      <?php

                                require_once('../objetos/obj_processa_cadastro_mecanico.php');
                                                      



                                                    ?>


                                                 

                            <h1>Proprietário Oficina</h1>
                            <div class="form-row">
                                      <div class="col-md-6 mb-3">
                                        <label for="validationDefault01">Nome:</label>
                                        <input type="text" class="form-control" id="validationDefault01" placeholder="Insira seu nome" <?php echo 'value="'. $SelecioneMecanico[0]->nome . '"'    ?>name="txtNome" required>
                                      </div>
                                      <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">Sobrenome:</label>
                                        <input type="text" class="form-control" id="validationDefault02"<?php echo 'value="'. $SelecioneMecanico[0]->sobreNome . '"'   ?> placeholder="Sobrenome" name="txtSobrenome" required>
                                      </div>
                              
                            </div>
                            <div class="form-row">
                                    <div class="">
                                      <label for="validationDefaultUsername" id="lblemail" placeholder="Insira seu Email" required>Email:</label>
                                      <div class="input-group">
                                        
                                        <input type="mail" class="form-control" id="validarusuario" <?php echo 'value="'. $SelecioneMecanico[0]->email . '"'    ?>  placeholder="Usuário" aria-describedby="inputGroupPrepend2" name="txtEmail" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3" >
                                      <label for="validationDefault02" id="lblSenha">Senha:</label>
                                      <input type="" class="form-control" id="validationsenha"  <?php echo 'value="'. $SelecioneMecanico[0]->senha . '"'    ?> placeholder="Senha" name="txtSenha" required>
                                    </div>
                              
                              
                              
                            </div>
                              
                            <div class="form-row">
                                    <div class="">
                                      <label for="validationDefaultUsername" id="lblemail" placeholder="Insira seu Email" required>CPF:</label>
                                      <div class="input-group">
                                        
                                        <input type="text" class="form-control" id="validarusuario" placeholder="CPF"  <?php echo 'value="'. $SelecioneMecanico[0]->cpf . '"'    ?> aria-describedby="inputGroupPrepend2" name="txtCPF" required>
                                      </div>
                                    </div>
                                    
                              
                              
                              
                            </div>
                           
                            <div class="form-row">
                                    <div class="">
                                      <label for="validationDefaultUsername" id="lblemail" placeholder="Insira seu Email" required>Telefone:</label>
                                      <div class="input-group">
                                        
                                        <input type="mail" class="form-control" id="validarusuario"  <?php echo 'value="'. $SelecioneMecanico[0]->telefone . '"'    ?> placeholder="Telefone" aria-describedby="inputGroupPrepend2" name="txtTel" required>
                                      </div>
                                    </div>
                                    <div class="col-md-6 mb-3" >
                                      <label for="validationDefault02" id="lblSenha">Celular:</label>
                                      <input type="text" class="form-control" id="validationsenha" <?php echo 'value="'. $SelecioneMecanico[0]->celular . '"'    ?>  placeholder="Celular" name="txtCel" required>
                                    </div>
                              
                              
                              
                            </div>
                              <!--``,``,``,``,``,`tp_usuario`,``,``,``,``,``,``,``,``-->   
                          <br>
                          <h1>Endereço - Proprietário</h1>

                          <div class="form-row">
                              
                              
                              <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Rua:</label>
                                <input type="text" class="form-control" id="validationDefault02"  <?php echo 'value="'. $SelecioneMecanico[0]->rua . '"'    ?> placeholder="Digite o nome da Rua" name="txtRua" required>
                              </div>

                              <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Bairro:</label>
                                <input type="text" class="form-control" id="validationDefault02"  <?php echo 'value="'. $SelecioneMecanico[0]->bairro . '"'    ?> placeholder="Digite o nome do bairro" name="txtBairro" required>
                              </div>
                             <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Numero:</label>
                                <input type="text" class="form-control" id="validationDefault02" <?php echo 'value="'. $SelecioneMecanico[0]->numero . '"'    ?> placeholder="Digite o número" name="txtNumero" required>
                              </div>

                            
                              <div class="col-md-6 mb-3">
                                <label for="validationDefault03">Cidade:</label>
                                <input type="text" class="form-control" id="validationDefault03" <?php echo 'value="'. $SelecioneMecanico[0]->cidade . '"'    ?> placeholder="Cidade" name="txtCidade" required>
                              </div>
                              <div class="col-md-6 mb-2">
                                

                                           <div class="ol-md-6 mb-3"> 
                                                  <label for="uf">Estado:</label>
                                                  <select class="form-control" id="exampleFormControlSelect1"   name="txtEstado" id="uf" >
                                                  <option SELECTED><?php echo $SelecioneMecanico[0]->uf     ?></option>
                                                  <option value="AC" >Acre</option> 
                                                                 <option value="AL">Alagoas</option> 
                                                                 <option value="AP">Amapá  </option> 
                                                                 <option value="AM">Amazonas  </option> 
                                                                 <option value="BA">Bahia   </option> 
                                                                 <option value="CE">Ceará  </option> 
                                                                 <option value="DF">Distrito Federal    </option> 
                                                                 <option value="ES">Espírito Santo    </option> 
                                                                 <option value="GO">Goiás   </option> 
                                                                 <option value="MA">Maranhão    </option> 
                                                                 <option value="MT">Mato Grosso   </option> 
                                                                 <option value="MS">Mato Grosso do Sul    </option> 
                                                                 <option value="MG">Minas Gerais    </option> 
                                                                 <option value="PA">Pará    </option> 
                                                                 <option value="PB">Paraíba   </option> 
                                                                 <option value="PR">Paraná    </option> 
                                                                 <option value="PE">Pernambuco    </option> 
                                                                 <option value="PI">Piauí   </option> 
                                                                 <option value="RJ">Rio de Janeiro    </option> 
                                                                 <option value="RN">Rio Grande do Norte   </option> 
                                                                 <option value="RS">Rio Grande do Sul   </option> 
                                                                 <option value="RO">Rondônia    </option> 
                                                                 <option value="RR">Roraima   </option> 
                                                                 <option value="SC">Santa Catarina    </option> 
                                                                 <option value="SP">São Paulo   </option> 
                                                                 <option value="SE">Sergipe   </option> 
                                                                 <option value="TO">Tocantins </option>  
                                                </select>
                                                       
                                                  
                                               
                                                     
                                                











                                          </div>   
                              </div>
                              <div class="col-md-3 mb-3">
                                <label for="validationDefault05">CEP:</label>
                                <input type="text" class="form-control" id="validationDefault05" <?php echo 'value="'. $SelecioneMecanico[0]->cep . '"'    ?> placeholder="CEP" name="txtCep" required>
                              </div>
                              
                            </div>

                            <div class="form-group">
                              
                            </div>
                             <input type="hidden" class="" id="validationDefault05" placeholder="CEP" name="btn_editar" value="btn_editar" required>
                            <button class="btn btn-primary" type="submit" name="btnEnviar">Editar</button>
                           
              </form>

</div>
</body>
</html>