<!doctype html>
<meta charset="utf-8">

<head>


	<?php 
			require_once('../dependencias/dependencias.php');
			
			
	?>


    <title>ListaProdutos</title>
    
    
    
			
    <style type="text/css">
     
    .largura_Card{
      border: 1px solid black;
      width: 62vw;
      margin-left:0vw;
    }
        .esquerda {
          float: left;
          width: 50%;
          padding: 2rem;
          text-align: center;
          
        }

        .direita {
          float: right;
          width: 50%;
          padding: 2rem;
          text-align:center;
        }
    
       

	  </style>

</head>
<body>


<?php require_once('../dependencias/navBar.php');  ?>

<div class="container" style="margin-top: 200px">
   

<section class="center">
<h1>FALE CONOSCO!<br> <br> 
<div class="card largura_Card">
<br>
    
    <form action="/action_page.php">
      <div class="form-group">
        <label for="pwd">Nome:</label>
        <input type="nome" class="form-control" id="pwd" placeholder="nome" name="nome">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
      </div>
      <div class="form-group">
      <label for="telefone">Telefone:</label>
        <input type="telefone" class="form-control" id="email" placeholder="telefone" name="telefone">
      </div>
      
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Mensagem:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Digite sua mensagem" rows="3"></textarea>
  </div>

      </div>
    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>

  </section>
    <br>
    <section class="left">
    <h2>ONDE ESTAMOS</h2><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.766339920387!2d-46.77461388487014!3d-23.61271146937607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5443d07c0669%3A0xb8422f47f59e5cf8!2sSenac+Tabo%C3%A3o+da+Serra!5e0!3m2!1spt-BR!2sbr!4v1561763806903!5m2!1spt-BR!2sbr" width="1110" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>    
 </section>
 </div>

 <footer class="bg-primary" style="width:100%;">
    <div class= "esquerda">
       Localização e contato:<br>
        <br>  
          Rua Salvador Branco de Andrade, 182 - Taboão da Serra<br>
           E-mail: contato@oficinabuscamecanica.com.br<br>
        Telefone: (011) 4303-8612<br>
    </div> 
    <div class= "direita">
      Horário de funcionamento:<br>
        <br>
        Seg. a Sex:    08:00 às 12:00 / 13:00 às 18:00<br>
        Sábado:         08:00 às 12:00<br>
        Domingo:    Fechado<br>
       Copyright 2019 © Todos os direitos reservados.
  </div>
      
   </footer>
        

      
</body>
</html