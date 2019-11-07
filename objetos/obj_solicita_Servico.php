<?php

		$usuarioSistema  = $_POST['usuarioSistema'];
		$id_servico_solicitado = $_POST['id_servico_solicitado'];
		$fk_id_oficina = $_POST['fk_id_oficina'];
			echo"$usuarioSistema <br> $id_servico_solicitado <br>$fk_id_oficina";
   			
		
				
		     
/*		

		require_once('obj_conexao.php');
class CRUDPesquisa{


    private $pdo = null;
    
    public function __construct($conexao){
      $this->pdo = $conexao;
    }
    public function selecionar($fk_id_oficina){

           try{

            $sql = "SELECT * FROM vw_endreco_1 = id_oficina = " . $fk_id_oficina . " ";

            $stm = $this->pdo->prepare($sql);

            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
    
            return $dados;

            



           }catch(PDOException $erro){

            echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

           }

    }





    ?>

    <?





    ?>*/