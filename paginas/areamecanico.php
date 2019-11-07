<?php
      require_once('../dependencias/dependencias.php');
      require_once('../dependencias/navBar.php'); 

    ?>



<!DOCTYPE html>
<html>
<head>
	<title>Area do Mecânico</title>
  <body>
      
        


        <div class="row" style="margin-top: 10vw;">
            <div class="col-2-md" style="width: 20vw"></div>
            <div class="col-8-md">
              <div class="card text-center" style="width: 60vw; border-radius: 10px;">
                      <div class="card-header">
                       ÁREA DO MECÂNICO!
                      </div>
                      <div class="card-body">
                        <?php

                              $caminhoPastaImg = '../dependencias/img/';
                              $imgIcones = array('manutenção.png','gerador.png','compressor.png','oleo.png','carro.png', 'motor.png');
                              //caminho das imagens rever esse código depois. 

                              ?>

                            <div class="row">
                              <style type="text/css">
                                 img{
                                    width: 50px;
                                    height: 50px;
                                 }
                                 #img01{
                                    width: 70px;
                                    height: 70px;
                                    padding: 5px;
                                    font-size: 14px;

                                 }
                              </style> 
              
                                         <div class="col-3" id="img01" >
                                            <img src= "<?php echo $caminhoPastaImg . $imgIcones[0] ?>" ><br>
                                            <label><a href="cadastrar_servicos.php">Cadastrar Servicos</a></label>
                                          </div>
                                          <div class="col-3"id="img01">
                                            <img src= "<?php echo $caminhoPastaImg . $imgIcones[1] ?>"><br>
                                           <label><a href="informacaopessoa.php">Informações Pessoaes</a></label>
                                        </div>

                                        <div  class="col-3"id="img01">
                                            <img src="<?php echo $caminhoPastaImg . $imgIcones[2] ?>"><br>
                                          <a href="cadastrar_oficina.php">Informações Oficina</a>
                                        </div>

                                        <div class="col-3" id="img01">
                                            <img src="<?php echo $caminhoPastaImg . $imgIcones[3] ?>" ><br>
                                          <label>Serviços em Curso</label>
                                        </div>

                                        
                                    </div>

                        </div>
                        
                  </div>


            </div>
            <div class="col-2-md" style="width: 20vw"></div>
        </div>

      
        <div class="row" style="margin-top: 10px;">
            <div class="col-2-md" style="width: 20vw"></div>
            <div class="col-8-md">
              <div class="card text-center" style="width: 60vw; border-radius: 10px;">
                      <div class="card-header">
                      Solicitação de Serviços!
                      </div>
                      <div class="card-body">
                         <?php require_once('solicitacao_servicos.php');?>
                            

                        </div>
                        
                  </div>


            </div>
            <div class="col-2-md" style="width: 20vw"></div>
        </div>




           
       



  </body>

</html>