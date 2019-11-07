<?php 
      require_once('obj_conexao.php');


      function RetornaMensagemErro($mensagem, $alert, $link_s) {
        echo '<div class="alert '. $alert .' alert-dismissible fade show" role="alert">
                '.$mensagem.'<strong><a href="'. $link_s.'"></a></strong> 
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    }



      class CRUDCadastroMecanico{

           private $pdo = null;
    
           public function __construct($conexao){
           $this->pdo = $conexao;
            }

           public function inserirMecanico($nome,$sobreNome,$cpf , $email, $senha,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$tp_usuario){
                        $sql = "SELECT *  FROM `tbl_pessoa` WHERE `cpf` = '". $cpf  ."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);


                        
                        if ($dados[0]->cpf === $cpf && $dados[0]->cpf != ''){
                         $mensagem = 'erro';
                         return $mensagem;
                            
                       }elseif ($cpf != '') {
                       
                          try{

                           $this->pdo->exec( "INSERT INTO `tbl_pessoa` (`nome`,`sobreNome`,`cpf`,`email`,`senha`,`tp_usuario`,`rua`,`bairro`,`cidade`,`cep`,`uf`,`numero`,`telefone`,`celular`) VALUES ('" . $nome ."','" .$sobreNome."','" .$cpf."','" .$email."','" .$senha."','" .$tp_usuario."','" .$rua."','" .$bairro."','" .$cidade."','" .$cep."','" .$estado."','" .$numero."','" .$telefone."','" .$celular."');");
                              $mensagem =  'sucesso';
                              return $mensagem;
                            
                            }catch(PDOException $erro){
                              echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
                            }
                      }

      
              }

               public function SelecionaMecanico($id_pessoa){

                       $sql = "SELECT *  FROM `tbl_pessoa` WHERE `id_pessoa` = '". $id_pessoa ."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                          $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                          return $dados;




               }

               public function AlterarMecanico($id_pessoa,$nome,$sobreNome,$cpf , $email, $senha,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep){
                      $sql = "UPDATE `tbl_pessoa`
                              SET

                              `nome` = '" . $nome ."',
                              `sobreNome` = '" .$sobreNome."',
                              `cpf` ='" .$cpf."',
                              `email` ='" .$email."',
                              `senha` = '" .$senha."',
                              `rua` = '" .$rua."',
                              `bairro` ='" .$bairro."',
                              `cidade` ='" .$cidade."',
                              `cep` = '" .$cep."',
                              `uf` = '" .$estado."',
                              `numero` ='" .$numero."',
                              `telefone` = '" .$telefone."',
                              `celular` = '" .$celular."'
                              WHERE `id_pessoa` = '" .$id_pessoa."';";
                          $stm = $this->pdo->prepare($sql);

                          $stm->execute();

                         
                          


               }






               
      }
      



?>




<?php
    

    $CRUDCadastroMecanico = new CRUDCadastroMecanico(Conexao::getInstance());

     if(isset($_POST['txtNome']) && $_POST['btn_editar'] != 'btn_editar'){

        

        	 
          $nome = $_POST['txtNome'];
          $sobrenome = $_POST['txtSobrenome'];
          $email = $_POST['txtEmail'];
          $senha = $_POST['txtSenha'];
          $celular = $_POST['txtCel'];		
          $telefone =	$_POST['txtTel'];	
          $rua = $_POST['txtRua'];	
          $bairro = $_POST['txtBairro'];		
          $numero = $_POST['txtNumero'];	
          $cidade = $_POST['txtCidade'];		
          $estado = $_POST['txtEstado'];
          $cep = $_POST['txtCep'];
          $cpf = $_POST['txtCPF'];
          $tp_usuario = 'O';		



        $resultado = $CRUDCadastroMecanico->inserirMecanico($nome,$sobrenome,$cpf,$email,$senha,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep,$tp_usuario);

        if($resultado == 'erro'){
          RetornaMensagemErro('CPF JÁ CADASTRADO ','alert-danger','#');
        }
        if ($resultado == 'sucesso') {
         RetornaMensagemErro('CADASTRO REALIZADO COM SUCESSO ','alert-success','../paginas/login_oficina.php');
        }
        

         
}
             

  if(isset($usuarioSistema[0]->id_pessoa) && $_POST['btn_editar'] != 'btn_editar'){
        $id_pessoa = $usuarioSistema[0]->id_pessoa;

        $SelecioneMecanico = $CRUDCadastroMecanico->SelecionaMecanico($id_pessoa);
        

  }

  if(isset($_POST['btn_editar']) ){

          $nome = $_POST['txtNome'];
         $sobreNome = $_POST['txtSobrenome'];
          $email = $_POST['txtEmail'];
          $senha = $_POST['txtSenha'];
          $celular = $_POST['txtCel'];    
          $telefone = $_POST['txtTel']; 
          $rua = $_POST['txtRua'];  
          $bairro = $_POST['txtBairro'];    
          $numero = $_POST['txtNumero'];  
          $cidade = $_POST['txtCidade'];    
          $estado = $_POST['txtEstado'];
          $cep = $_POST['txtCep'];
          $cpf = $_POST['txtCPF'];

          $id_pessoa = $usuarioSistema[0]->id_pessoa;

          $CRUDCadastroMecanico->AlterarMecanico($id_pessoa,$nome,$sobreNome,$cpf , $email, $senha,$telefone,$celular,$rua,$numero, $bairro,$cidade,$estado,$cep);

         RetornaMensagemErro('ATUALIZAÇÃO DE CADASTRO REALIZADO COM SUCESSO ','alert-success','#');
          $SelecioneMecanico = $CRUDCadastroMecanico->SelecionaMecanico($id_pessoa);


  }


?>



