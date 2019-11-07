<?php 
      require_once('../dependencias/dependencias.php');
     require_once('../dependencias/navBar.php');
     
  ?>  



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
  
    <title>Cadastro Oficina</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

   
  
     
</head>
<body>

 <div class="container-fluid" id="container-cad-mecanico"> 
    
              
            <div class="row" style="margin-top: 2vw;">
                            <div class="col-md-2"></div>

                            <div class="col-md-8">







                                            <form class="form-group"id=""  method="POST" style="height: auto;" >
                                                    <?php

                                                              require_once('../objetos/obj_processa_cadastro_oficina.php');
                                                              if (!isset($SelecioneOficina[0]->razao_social)){
                                                                  
                                                                  echo '<script>alert("vazio");</script>';
                                                                  
                                                              }                      
                                                      ?>




                                                          <h1>Informações Oficina</h1>

                                                          <div class="form-row">

                                                                   
                                                                    <div class="col-md-6 mb-3">
                                                                      <label for="validationDefault01">Razão Social:</label>
                                                                      <input type="text" class="form-control" id="validationDefault01" placeholder="Insira sua Razão Social" <?php echo 'value="'. $SelecioneOficina[0]->razao_social . '"'    ?> name="txtRs" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                      <label for="validationDefault02">CNPJ:</label>
                                                                      <input type="text" class="form-control" <?php echo 'value="'. $SelecioneOficina[0]->cnpj . '"'    ?> id="validationDefault02" placeholder="CNPJ" name="txtCNPJ" required>
                                                                    </div>
                                                            
                                                          </div>
                                                           <div class="form-row">
                                                                    <div class="col-md-6 mb-3">
                                                                      <label for="validationDefault01">Telefone:</label>
                                                                      <input type="text" class="form-control" <?php echo 'value="'. $SelecioneOficina[0]->telefone . '"'    ?> id="validationDefault01" placeholder="Telefone" name="txtTel" required>
                                                                    </div>
                                                                    <div class="col-md-6 mb-3">
                                                                      <label for="validationDefault02">Celular:</label>
                                                                      <input type="text" class="form-control" <?php echo 'value="'. $SelecioneOficina[0]->celular . '"'    ?> id="validationDefault02" placeholder="Celular" name="txtCel" required>
                                                                    </div>
                                                            
                                                          </div>
                                                          
                                                            
                                                      
                                                         
                                                            
                                                      
                                                            
                                                        <br>
                                                        <h1>Endereço</h1>

                                                        <div class="form-row">
                                                            
                                                            
                                                            <div class="col-md-6 mb-3">
                                                              <label for="validationDefault03">Rua:</label>
                                                              <input type="text" class="form-control" id="validationDefault02" <?php echo 'value="'. $SelecioneOficina[0]->rua . '"'    ?> placeholder="Digite o nome da Rua" name="txtRua" required>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                              <label for="validationDefault03">Bairro:</label>
                                                              <input type="text" class="form-control" id="validationDefault02" <?php echo 'value="'. $SelecioneOficina[0]->bairro . '"'    ?> placeholder="Digite o nome do bairro" name="txtBairro" required>
                                                            </div>
                                                           <div class="col-md-6 mb-3">
                                                              <label for="validationDefault03">Numero:</label>
                                                              <input type="text" class="form-control" id="validationDefault02" <?php echo 'value="'. $SelecioneOficina[0]->numero . '"'    ?> placeholder="Digite o número" name="txtNumero" required>
                                                            </div>

                                                          
                                                            <div class="col-md-6 mb-3">
                                                              <label for="validationDefault03">Cidade:</label>
                                                              <input type="text" class="form-control" id="validationDefault03" <?php echo 'value="'. $SelecioneOficina[0]->cidade . '"'    ?> placeholder="Cidade" name="txtCidade" required>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                              

                                                                         <div class="ol-md-6 mb-3"> 
                                                                                <label for="uf">Estado:</label>
                                                                                <select class="form-control" id="exampleFormControlSelect1"  name="txtEstado" id="uf" >
                                                                                <option   SELECTED > <?php echo  $SelecioneOficina[0]->uf   ?></option>
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
                                                              <input type="text" class="form-control" id="validationDefault05" <?php echo 'value="'. $SelecioneOficina[0]->cep . '"'    ?> placeholder="CEP" name="txtCep" required>
                                                            </div>
                                                            
                                                          </div>

                                                           
                                                          </div>
                                                          <div class="form-group" style="margin-bottom: 2vw;">
                                                             <input type="hidden" class="" id="validationDefault05" placeholder="CEP" <?php echo  $btn_editar;    ?> value="btn_editar" required>
                                                            <button class="btn btn-primary" type="submit" name="btnEnviar">Enviar</button>
                                                            <button class="btn btn-primary" type="reset" name="btnLimpar">Limpar</button>
                                                          </div>
                                            </form>

                      </div>
                               <div class="col-md-2"></div> 



                      </div>                           


                      
      
</div> 

</body>
</html>