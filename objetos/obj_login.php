<?php
    require_once('obj_conexao.php');
 ?>
 
<?php




  class CRUDLogin{


    private $pdo = null;
    private static $atrTipoUser; 
   
    public function __construct($conexao){
      $this->pdo = $conexao;
    }
    public function selecionar($email,$senha,$tp_user){

           try{

            $sql = "SELECT id_pessoa, email,senha,tp_usuario FROM tbl_pessoa WHERE email = '$email' AND senha = '$senha' AND tp_usuario = '$tp_user'";

            $stm = $this->pdo->prepare($sql);

            $stm->execute();

            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
           // $atrTipoUser = $dados[0]->tipo_usuario;
            return $dados;

            



           }catch(PDOException $erro){

            echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";

           }

    }

     //  public function getTpUser(){
              
         //     echo $atrTipoUser;

       //}  

  }



?>





<?php   
$mensagem = "";
if (isset($_POST["email_usuario"]) && isset($_POST["senha_usuario"])) {
        $email = $_POST["email_usuario"];
        $senha = $_POST["senha_usuario"];
        $tp_user = 'C';
        

        $CRUDLogin = new CRUDLogin(Conexao::getInstance());
        
        $resultado = $CRUDLogin->selecionar($email, $senha,$tp_user);


     

      if (!empty($resultado)){      
              if ($resultado[0]->senha ==  $senha && $resultado[0]->tp_usuario == $tp_user) {
                  
                    $user = $resultado;
                    session_start();
                    $_SESSION["user"] = $user;
                    header("location:../paginas/home.php");
                    
                }
            }
                 else{
                    
                    $mensagem = "Login ou senha inválido!";
                     
                   } 
}
if (isset($_POST["email_oficina"]) && isset($_POST["senha_oficina"])) {
        $email = $_POST["email_oficina"];
        $senha = $_POST["senha_oficina"];
        $tp_user = 'O';
        //$senhaCriptografada = md5($senha);
        $CRUDLogin = new CRUDLogin(Conexao::getInstance());
        
        $resultado = $CRUDLogin->selecionar($email, $senha,$tp_user);

         if (!empty($resultado)){      
              if ($resultado[0]->senha ==  $senha && $resultado[0]->tp_usuario == $tp_user) {
                  
                    $user = $resultado;
                    session_start();
                    $_SESSION["user"] = $user;
                    header("location:../paginas/home.php");
                    

                }
            }
                 else{
                    
                    $mensagem = "Login ou senha inválido!";
                     
                   } 
                                                    
      // header("location:../paginas/login_oficina.php");
        }
           

    



?>
<?php





?>

