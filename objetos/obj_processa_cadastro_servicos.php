<?php
		require_once('obj_conexao.php');




?>

<?php

			class CRUDCadastroServicos{

           private $pdo = null;
    
           public function __construct($conexao){
           $this->pdo = $conexao;
            }

           public function inserirServicos($fk_id_pessoa_resp, $nome, $valor, $descricao_detalhada){


           				  $sql = " SELECT *  FROM `tbl_oficinas` WHERE `fk_id_pessoa_resp` = '". $fk_id_pessoa_resp  ."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                          		

                          		if(isset($dados)){

			                          try{

			                           $this->pdo->exec( "INSERT INTO `tbl_servicos`(`nome`,`valor`,`fk_id_oficina`,`descricao_detalhada`) VALUES ('" . $nome ."'," .$valor ."," . $dados[0]->id_oficina .",'" .$descricao_detalhada ."');");
			                             
			                            
			                            }catch(PDOException $erro){
			                              echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
			                            }
			                      }
			                      else{
				                      echo "erro"; 		

			                      }

			                        
                     

      
              }

               public function selecionaServicos($fk_id_pessoa_resp){

                     	 $sql = "SELECT *  FROM `V_LISTA_SERVICOS` WHERE `fk_id_pessoa_resp_oficina` = ". $fk_id_pessoa_resp .";";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                          return $dados;




               }


                public function DeletarServicos($id_servico){
                          $sql = "DELETE FROM `tbl_servicos` WHERE id_servico = ". $id_servico . ";";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                        
                          



              }

               public function AlterarServicos($id_servico, $nome, $valor, $descricao_detalhada){
                      $sql = "UPDATE `tbl_servicos`
                              SET

                              `nome` = '" . $nome ."',
                              `valor` = " .$valor.",
                              `descricao_detalhada` ='" .$descricao_detalhada."'
                              
                              WHERE `id_servico` = " .$id_servico.";";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                         
                          


               }






               
      }


?>




<?php

			$CRUDCadastroServicos = new CRUDCadastroServicos(Conexao::getInstance());		


				

					$nome = $_POST['txtNome'];
					$valor = $_POST['txtValor'];
					$descricao_detalhada = $_POST['txtDetalhes'];
					$fk_id_pessoa_resp = $usuarioSistema[0]->id_pessoa; 


						if ($_POST['id_servico'] == '' && $_POST['btn_enviar'] == 'Enviar') {

							if ($nome != '' && $valor != '' && $descricao_detalhada != '') {
									$CRUDCadastroServicos->inserirServicos($fk_id_pessoa_resp, $nome, $valor, $descricao_detalhada);

											echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
			                              <strong>SERVIÇO CADASTRADO</strong> 
			                              
			                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                              <span aria-hidden="true">&times;</span>
			                              </button>
			                          </div>';
								# code...
							}else{
									echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			                              <strong>Todos os campos devem ser preenchido!</strong> 
			                              
			                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                              <span aria-hidden="true">&times;</span>
			                              </button>
			                          </div>';
							}
								

							
						}elseif ($_GET['btn_editar'] == 'Editar') {

							$nome = $_GET['nome_servico'];
							$valor =  $_GET['valor_servico'];
							$descricao_detalhada =  $_GET['descricao_detalhada'];
							$id_servico = $_GET['id_servico'];

							$CRUDCadastroServicos->AlterarServicos($id_servico, $nome, $valor, $descricao_detalhada);

							
							echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>SERVIÇO ATUALIZADO!</strong> 
                              
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';

						
							
						}elseif ($_GET['btn_excluir'] == 'Excluir') {
							$id_servico = $_GET['id_servico'];
							$CRUDCadastroServicos->DeletarServicos($id_servico);
							
							echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
                              <strong>SERVIÇO DELETADO!</strong> 
                              
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';

						
							
						}
						else{



							echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>TUDO PRONTO ! PODE INSERIR NOVOS SERVIÇOS!</strong> 
                              
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
						}

						$resultadoSelect = $CRUDCadastroServicos->selecionaServicos($fk_id_pessoa_resp);

						
						
							
						





?>