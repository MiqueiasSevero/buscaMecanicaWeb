<!doctype html>
<?php
	
?>


<meta charset="utf-8">
	

<head>


	<?php 
			require_once('../dependencias/dependencias.php');
			
	?>


    


    <title>Lista - Serviços</title>
    
    <script>

 </script> 
</head>
<body>
	
	
 	
   

    		<?php require_once('../dependencias/navBar.php');  ?>


		
						
							
							  	
									
					
	<style type="text/css">
	p{ margin:0;
		float: left;
		position: relative;

	  }



</style>
      <section class="container-fluid" id="container-lista-servicos">

			
				<!--filtros de pesquisas-->
		                    <div class="row">
									  <div class="col-2">
									    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
									      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Filtros</a>
									      
									    </div>
									  </div>


		                       <div class="col-9">
    								<?php
    									require_once('../objetos/obj_pesquisa_simples.php');

									  if(isset($_GET['pesquisar'])){


										$pesquisa_simples = $_GET['pesquisar'];	

										
										$CRUDPesquisa_simples = new CRUDPesquisa_simples(Conexao::getInstance());
										$resultadoPesquisa_simples = $CRUDPesquisa_simples->selecionar($pesquisa_simples);

										foreach($resultadoPesquisa_simples as $reg){


								  			 	echo '
								  					
								  			 	<div class="" style="float:left;">


								  			 				<div class="card-deck">
																  <div class="card">
																    <img src="../dependencias/img/balanceamento.jpg" class="card-img-top" alt="...">
																	    <div class="card-body">
																			      <h5 class="card-title" name="id_oferece_servico" value=" '.$reg->id_servico .'">CÓDIGO:'.  $reg->id_servico.' - '. $reg->nome_servico .'</h5>
																			      <p class="card-text">R$'. $reg->valor .'</p><br>
																			      <p class="card-text"> MECANICA  - '. strtoupper($reg->nome_oficina).'</p>
																			      <p class="card-text"><small class="text-muted"><br>Código:'. $reg->id_servico.'</small></p>
																			      <form action ="descricao_Detalhada.php" method="GET">
																			      <input type="hidden" name="id_servico" value="'.$reg->id_servico.'">
																			      <button class="btn btn-success" type="submit" >Detalhes</button>
																			      </form>
																	    </div>
																   </div>
															 </div>	   	
								 					 </div>	 	

								 					 
								 			';

	  			 						}
	  			 					 
				}

	    								?>
							  </div>
							</div> 

      </section>
      <footer>


      </footer>

</body>
</html>