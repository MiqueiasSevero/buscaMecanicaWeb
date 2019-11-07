<?php
      require_once('../dependencias/dependencias.php');
      require_once('../dependencias/navBar.php'); 

    ?>



<!DOCTYPE html>
<html>
<head>
	<title>Solicitação de Serviços</title>
  
</head>
<body>
<div class="container-fluid" id="container-areamecanico">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
</nav>


<div class="list-group-serv-realizado">
  
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Serviços a ser Realizado</th>
      <th scope="col">Valor do Serviço</th>
      <th scope="col">Veículo</th>
      <th scope="col">Data de Entrada</th>
      <th scope="col">Aceitrar/Rejeitar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <div style="padding-left: 10px;">
        <input class="form-check-input" type="checkbox">
      </div>
      </td>
    </tr>
    
  </tbody>
</table>


  </tbody>
</table>
</div>



<table id="Oferta-servico">
<h1>Oferta Serviços</h1>
<div class="list-group">
  
  <div type="button" class="list-group-item list-group-item-action">
      <button type="button" class="btn btn-success" name="buttonAceitarServico">Aceitar</button>
      <button type="button" class="btn btn-success" name="buttonRejeitarServico">Rejeitar</button>


  </div>
  
</div>
</table>

</div>
</body>
</html>