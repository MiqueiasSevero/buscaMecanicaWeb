<?php 
      require_once('obj_conexao.php');






      class CRUDCadastroOficina{

           private $pdo = null;
    
           public function __construct($conexao){
           $this->pdo = $conexao;
            }



            public function inserirOficina($rs,$cnpj,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$fk_id_pessoa_resp){
                        $sql = "SELECT *  FROM `tbl_oficinas` WHERE `cnpj` = '". $cnpj  ."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);

                            
                        
                        if ($dados[0]->cnpj == $cnpj){
                         $mensagem = 'erro';

                         

                         return $mensagem;
                            
                           
                            
                         
                    
                          

                              
                            
                      }else{
                       
                          try{

                           $this->pdo->exec( "INSERT INTO `tbl_oficinas`(`razao_social`,`cnpj`,`fk_id_pessoa_resp`,`rua`,`bairro`,`cidade`,`cep`,`uf`,`numero`,`telefone`,`celular`) VALUES ('" . $rs ."','" .$cnpj."'," .$fk_id_pessoa_resp.",'" .$rua."','" .$bairro."','" .$cidade."','" .$cep."','" .$estado."','" .$numero."','" .$telefone."','" .$celular."');");
                              $mensagem =  'sucesso';
                              return $mensagem;
                            
                            }catch(PDOException $erro){
                              echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                            }
                      }

      
              }
              public function selecionarOficina($fk_id_pessoa_resp){
                    $sql = "SELECT * FROM tbl_oficinas where fk_id_pessoa_resp ='". $fk_id_pessoa_resp  ."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                          return $dados;



              }
              public function DeletarOficina($id_oficina){
                          $sql = "DELETE FROM `tbl_oficinas` WHERE id_oficina = ". $id_oficina . ";";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                        
                          



              }
               public function AlterarOficina($rs,$cnpj,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$fk_id_pessoa_resp){
                      $sql = "UPDATE `tbl_oficinas`
                              SET

                              `razao_social` = '" . $rs ."',
                              `cnpj` = '" .$cnpj."',
                              `rua` = '" .$rua."',
                              `bairro` ='" .$bairro."',
                              `cidade` ='" .$cidade."',
                              `cep` = '" .$cep."',
                              `uf` = '" .$estado."',
                              `numero` ='" .$numero."',
                              `telefone` = '" .$telefone."',
                              `celular` = '" .$celular."'
                              WHERE `fk_id_pessoa_resp` = '" .$fk_id_pessoa_resp."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                         
                          


               }


               

            }
?>

<?php
         $CRUDCadastroOficina = new CRUDCadastroOficina(Conexao::getInstance());


    
        
        if(isset($usuarioSistema[0]->id_pessoa) && isset($_POST['txtRs']) && $_POST['btn_editar'] != 'btn_editar'  ){

             

                 
                $rs = $_POST['txtRs'];
                $cnpj = $_POST['txtCNPJ'];
                $celular = $_POST['txtCel'];    
                $telefone = $_POST['txtTel']; 
                $rua = $_POST['txtRua'];  
                $bairro = $_POST['txtBairro'];    
                $numero = $_POST['txtNumero'];  
                $cidade = $_POST['txtCidade'];    
                $estado = $_POST['txtEstado'];
                $cep = $_POST['txtCep'];
                $fk_id_pessoa_resp = $usuarioSistema[0]->id_pessoa;  


                  



              $resultadoInserir = $CRUDCadastroOficina->inserirOficina($rs,$cnpj,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$fk_id_pessoa_resp);
              
                    

                      if($resultadoInserir == 'erro'){
                         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>CNPJ JÁ CADASTRADO  </strong> 
                              
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';
                      }
                      if ($resultadoInserir == 'sucesso') {
                       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>OFICINA CADASTRADA COM SUCESSO</strong> 
                              
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                          </div>';

                          
                      }
                      

               
       }            



       if(isset($usuarioSistema[0]->id_pessoa) ){
        $fk_id_pessoa_resp = $usuarioSistema[0]->id_pessoa;

        $SelecioneOficina = $CRUDCadastroOficina->selecionarOficina($fk_id_pessoa_resp);




                                if ($SelecioneOficina[0]->cnpj == ""){
                                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>NÃO A OFICINA CADASTRADA!</strong> 
                                    
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';

                                $btn_editar = 'name=""';

               
                                }
                                elseif ($_POST['btn_editar'] == 'btn_editar') {


                                      $rs = $_POST['txtRs'];
                                      $cnpj = $_POST['txtCNPJ'];
                                      $celular = $_POST['txtCel'];    
                                      $telefone = $_POST['txtTel']; 
                                      $rua = $_POST['txtRua'];  
                                      $bairro = $_POST['txtBairro'];    
                                      $numero = $_POST['txtNumero'];  
                                      $cidade = $_POST['txtCidade'];    
                                      $estado = $_POST['txtEstado'];
                                      $cep = $_POST['txtCep'];
                                      $fk_id_pessoa_resp = $usuarioSistema[0]->id_pessoa;  


                                      

                                      $CRUDCadastroOficina->AlterarOficina($rs,$cnpj,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$fk_id_pessoa_resp);

                                    
                                      $SelecioneMecanico = $CRUDCadastroOficina->selecionarOficina($fk_id_pessoa_resp);

                                       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>OFICINA ATUALIZADA!</strong> 
                                    
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                                

                                  }
                                else{

                                 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>OFICINA CADASTRADA!</strong> 
                                    
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';  


                                     $btn_editar = 'name="btn_editar"';
                                  
                                }
                                  

                              


        

      }




           



?>            