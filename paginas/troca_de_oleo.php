
<?require_once('../dependencias/dependencias.php');?>

<div class="card text-center" style="width: 60vw; border-radius: 10px;">
		  <div class="card-header">
		    Servicos - Balanceamento
		  </div>
		  <div class="card-body">


				  			<?php
				  		
				  			
				  			require_once('../objetos/obj_pesquisa_simples.php');
							$CRUDPesquisa_simples = new CRUDPesquisa_simples(Conexao::getInstance());
							$result = $CRUDPesquisa_simples->selecionarOfertas('balanceamento');


				  			
				  				
				  				
						  		echo ' <div class="'.$active .'">
								     <div class="card-deck">' ; 
								     //die();
										foreach($result as $reg){


													echo ' <div class="card">
													    <img class="card-img-top" src="../dependencias/img/balanceamento.jpg" alt="Imagem de capa do card">
													    <div class="card-body">
													      <h5 class="card-title">'.  $reg->id_servico.' - '. $reg->nome_servico .'</h5>
													      <p class="card-text"> VALOR SERVIÇO  - R$ :'. $reg->valor .'</p>
													    </div>
													    <form action ="descricao_Detalhada.php" method="GET">
																						      <input type="hidden" name="id_servico" value="'.$reg->id_servico.'">
																						      <button class="btn btn-success" type="submit" >Detalhes</button>
																						      </form>
													    <div class="card-footer">
													      <small class="text-muted">Mecânica:'. strtoupper($reg->nome_oficina). '</small>
													    </div>
													  </div>';

													
										}

										  ?> 
								<?php		  
									echo '</div>

						    </div>';
						   

						    ?>
				   				  
				  
				</div>
				
	</div>





	<div class="card-1 text-center" style="width: 60vw; border-radius: 10px;">
		  <div class="card-header">
		    Servicos - Balanceamento
		  </div>
		  <div class="card-body">


				  			<?php
				  		
				  			
				  			require_once('../objetos/obj_pesquisa_simples.php');
							$CRUDPesquisa_simples = new CRUDPesquisa_simples(Conexao::getInstance());
							$result = $CRUDPesquisa_simples->selecionarOfertas('oleo');


				  			
				  				
				  				
						  		echo ' <div class="'.$active .'">
								     <div class="card-deck">' ; 
								     //die();
										foreach($result as $reg){


													echo ' <div class="card">
													    <img class="card-img-top" src="../dependencias/img/balanceamento.jpg" alt="Imagem de capa do card">
													    <div class="card-body">
													      <h5 class="card-title">'.  $reg->id_servico.' - '. $reg->nome_servico .'</h5>
													      <p class="card-text"> VALOR SERVIÇO  - R$ :'. $reg->valor .'</p>
													    </div>
													    <form action ="descricao_Detalhada.php" method="GET">
																						      <input type="hidden" name="id_servico" value="'.$reg->id_servico.'">
																						      <button class="btn btn-success" type="submit" >Detalhes</button>
																						      </form>
													    <div class="card-footer">
													      <small class="text-muted">Mecânica:'. strtoupper($reg->nome_oficina). '</small>
													    </div>
													  </div>';

													
										}

										  ?> 
								<?php		  
									echo '</div>

						    </div>';
						   

						    ?>
				   				  
				  
				</div>
				
	</div>
	