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
            <div class="row" style="margin-top: 5vw;  ">
                                          <div class="col-md-2"></div>

                                          <div class="col-md-8">
                                                  <?php
                                                        require_once('../objetos/obj_processa_cadastro_servicos.php');

                                                  ?>


                                                    <div class="card text-center" style="width: 60vw; border-radius: 10px;">
                                                          <div class="card-header">
                                                           <strong>Cadastrar Serviços</strong>
                                                          </div>
                                                                <div class="card-body">
                                                                            <form  method="POST">
                                                                                  
                                                                                 <table class="table">
                                                                                    <thead>
                                                                                      <tr>
                                                                                        <th scope="col"></th>
                                                                                        <th scope="col">Nome do Serviço</th>
                                                                                        <th scope="col">Valor</th>
                                                                                        <th scope="col">Detalhe</th>
                                                                                        <th scope="col">Opções</th>
                                                                                      </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                      <tr>
                                                                                        <th scope="row"><input hidden="" type="text" name=""  ></th>
                                                                                        <td><input type="text" name="txtNome"></td>
                                                                                        <td><input type="text" name="txtValor"></td>
                                                                                        <td><textarea type="text" name="txtDetalhes"></textarea></td>
                                                                                        <td>
                                                                                              <button class="btn btn-primary" type="submit"  name="btn_enviar" value="Enviar">Enviar</button>
                                                                                              <button class="btn btn-primary" type="reset"  name="btnLimpar">Limpar</button>


                                                                                        </td>
                                                                                      </tr>
                                                                                      
                                                                                    </tbody>
                                                                                  </table>

                                                                             </form>       
                                                                             






                                                                                          
                                                                                  
                                                           </div>          
                                                    </div>


                                          </div>





                                             <div class="col-md-2"></div> 



                                    </div>




              <div class="row" style="margin-top: 5vw;  ">
                                          <div class="col-md-2"></div>

                                          <div class="col-md-8">
                                                    <div class="card text-center" style="width: 60vw; border-radius: 10px;">
                                                          <div class="card-header">
                                                           <strong>Serviços Cadastrados</strong>
                                                          </div>
                                                                <div class="card-body">


                                                                                          
                                                                                    <table class="table table-hover">
                                                                                      <thead>
                                                                                        <tr>
                                                                                          <th scope="col">Código do Serviço</th>
                                                                                          <th scope="col">Nome do Serviço</th>
                                                                                          <th scope="col">Valor</th>
                                                                                          <th scope="col">Descrição do Serviço</th>
                                                                                          <th scope="col">Editar / Excluir</th>
                                                                                        </tr>
                                                                                      </thead>
                                                                                      <tbody>
                                                                                        <?php
                                                                                          foreach ($resultadoSelect as $linha) {
                                                                                            
                                                                                            
                                                                                              echo '<tr>';
                                                                                              echo ' <form  method="GET">';
                                                                                              echo  '<th scope="row" style="" ><input type="button" value="'.$linha->id_servico.'" name="" disabled=""></th>';
                                                                                              echo '<td><input type="text" value="' .$linha->nome_servico.'" name="nome_servico"></td>';
                                                                                              echo '<td><input type="text" value="'.$linha->valor.'" name="valor_servico"></td>';   
                                                                                              echo '<td><textarea value="" name="descricao_detalhada">'.$linha->descricao_detalhada.'</textarea> </td>';                                                                                                                                                                  echo '<td>
                                                                                                        <input type="text" hidden="" value="'.$linha->id_servico.'" name="id_servico" >
                                                                                                      
                                                                                                        <input class="btn btn-primary" type="submit"  value="Editar" name="btn_editar">
                                                                                                       
                                                                                                     

                                                                                                        ';
                                                                                              echo '
                                                                                                      
                                                                                                        <input class="btn btn-primary" type="submit"  value="Excluir" name="btn_excluir">
                                                                                                       

                                                                                                     

                                                                                                        </td>

                                                                                                         </form>';          
                                                                                            
                                                                                              echo "</tr>";
                                                                                               
                                                                                          }
                                                                                        ?>
                                                                                      </tbody>
                                                                                    </table>
                                                                              </div>          
                                                              </div>


                                          </div>





                                             <div class="col-md-2"></div> 



                                    </div>




                                    


              


</body>
</html>