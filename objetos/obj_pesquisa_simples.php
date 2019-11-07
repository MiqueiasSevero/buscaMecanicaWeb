<?php

require_once('obj_conexao.php');

class CRUDPesquisa_simples{


    private $pdo = null;
    
    public function __construct($conexao){
      $this->pdo = $conexao;
    }
    public function selecionar($pesquisa_simples){

           try{

            $sql = "SELECT *  FROM `V_LISTA_SERVICOS` WHERE `nome_servico` LIKE '%".$pesquisa_simples."%' ORDER BY valor asc;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
    
            return $dados;

            



           }catch(PDOException $erro){

            echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

           }

}

    public function selecionarOfertas($servico_oferta){

           try{

            $sql = "SELECT *  FROM `V_LISTA_SERVICOS` WHERE `nome_servico` LIKE '%".$servico_oferta."%' ORDER BY valor asc limit 4;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
    
            return $dados;

            



           }catch(PDOException $erro){

            echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

           }



    }
    public function selecionarDetalhada($id_servico){

           try{

            $sql = "SELECT *  FROM `V_LISTA_SERVICOS` WHERE `id_servico` = ". $id_servico .";";
            $stm = $this->pdo->prepare($sql);

            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
    
            return $dados;

            



           }catch(PDOException $erro){

            echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

           }

    }

    

  }


							
	
	
	
						  			



						  			








  ?>






