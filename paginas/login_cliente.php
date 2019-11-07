<?php 
session_start();
    if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
        header("location:./home.php");

    }
    //valida se usuário está logado
    

      
      require_once("../objetos/obj_login.php"); 
  ?>


<!doctype html>
<meta charset="utf-8">


<head>
	
	<title>Login</title>


    
</head>
	<body>
  <section>
  <?php
  
    require_once('../dependencias/navBar.php'); 

   ?>

</section>
	<div class="container-fluid" id="container-formulario">	
  
				
          <div class="row"  id="corpo-login">  
      	  
                       <div class="col-6" >   
              			      
                                <img src="../dependencias/img/fundo.jpg" id="img-login"/>
              			      
              			  
                          </div>    

                          <div class="col-6"  >   
                				          <form  class="form-oficina"  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                                      
                                     
                                 
                                      <div class="form-group">
                                                <h2>LOGIN - CLIENTE</h2>
                                                
                                                <br>
                                                    <?php

                                                       if (!empty($mensagem))
                                                           echo "<div class='alert alert-danger' role='alert'>
                                                              $mensagem
                                                          </div>";



                                                    ?>
                                                <input type="email" class="form-control" id="" name="email_usuario" aria-describedby="emailHelp" placeholder="Digite seu cnpj"><br>
                                                <input type="password" class="form-control" id="" name="senha_usuario" placeholder="Digite sua Senha">
                                      </div>
                                  
                                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btentrar">Entrar</button>
                                            <a href="cadastro_Cliente.php"><button type="button" class="btn btn-primary btn-lg btn-block" id="btcad">Cadastrar</button></a><br>
                                            <a href="">esqueceu sua senha?</a>
                             
                            
                                  </form>
                             






                      </div>
           


                  
                  





              


  </div>      
  






 
</body>
</html>