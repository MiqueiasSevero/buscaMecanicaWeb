
<?require_once('../dependencias/dependencias.php');?>

<div class="card text-center" style="width: 60vw; border-radius: 10px;">
		  <div class="card-header">
		    Servicos - Troca de Óleo 
		  </div>
		  <div class="card-body">


				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">

				  			<?
				  			$active = 'active' ; 
				  			
				  			require_once('../objetos/obj_pesquisa_simples.php');
							$CRUDPesquisa_simples = new CRUDPesquisa_simples(Conexao::getInstance());
							$result = $CRUDPesquisa_simples->selecionar('oleo');


				  			for($carousel_item = 1 ; $carousel_item <= 3; $carousel_item++ ){ 
				  				
				  				
						  		echo ' <div class="carousel-item '.$active .'">
								     <div class="card-deck">' ; 
								     //die();
										foreach($result as $reg){
										echo ' <div class="card">
										    <img class="card-img-top" src="../dependencias/img/balanceamento.jpg" alt="Imagem de capa do card">
										    <div class="card-body">
										      <h5 class="card-title">'.  $reg->id_oferece_servico.' - '. $reg->nome_serv .'</h5>
										      <p class="card-text"> VALOR SERVIÇO  - R$ :'. $reg->valor_servico_oferecido .'</p>
										    </div>
										    <form action ="descricao_Detalhada.php" method="GET">
																			      <input type="hidden" name="id_oferece_servico" value="'.$reg->id_oferece_servico.'">
																			      <button class="btn btn-success" type="submit" >Detalhes</button>
																			      </form>
										    <div class="card-footer">
										      <small class="text-muted">Mecânica:'. strtoupper($reg->nome_oficina).'</small>
										    </div>
										  </div>';
										}
										  ?> 
								<?		  
									echo '</div>

						    </div>';
						   	 
						   	 	$active = '' ; 
						   	 

						    }?>
				   				  </div>
				  
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="padding-left: 0;margin-left: 0  ">
				    <span class="carousel-control-prev-icon bg-primary" style=";" aria-hidden="true"></span>
				    <span class="sr-only">Anterior</span>
				  </a>
				  <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
				    <span class="sr-only">Próximo</span>
				  </a>
			</div>
			<div class="card-footer text-muted">
    			2 days ago
  			</div>
	</div>
	