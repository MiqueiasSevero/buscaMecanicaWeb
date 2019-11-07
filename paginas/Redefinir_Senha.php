<?php
			require_once('../dependencias/dependencias.php');
			require_once('../dependencias/navBar.php'); 

	  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Redefinir Senha</title>
</head>
<body>
<div class="container-fluid" id="container-rdsenha">



<form id="frm-rdsenha">

  <label>Esqueceu a Senha?</label><br>
  <label>Primeiro Vamos Localizar a sua conta</label><br><br>
  <label>Email:</label>
 
<div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu Email">
    
  </div>
   <label>Digite a nova senha:</label>
  <div class="form-group">
    <input type="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira sua nova senha">
    
  </div>
  <label>Confirme a senha:</label>
  <div class="form-group">
    <input type="senha" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Confirme a nova senha">
    
  </div>
  
   <button type="submit" class="btn btn-primary" id="btslv">Salvar Senha</button>
  <button type="submit" class="btn btn-primary" id="btcla" >Cancelar</button>
 
</form>









</div>
</body>
</html>