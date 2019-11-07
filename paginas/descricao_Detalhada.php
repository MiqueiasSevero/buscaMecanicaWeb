<!DOCTYPE html>

	<?php
		require_once('../dependencias/dependencias.php');
		//session_start();
		require_once('../objetos/obj_login.php');
		$mensagem ='';
		
	?>
	<style type="text/css">
	section.conteiner-fluid{
		overflow: hidden;
		width: 100vw;
		}	
	.largura_Card{
		border: 1px solid black;
		width: 80vw;
		height: auto;
		margin-top:5vw;
		margin-left:10vw;
		margin-right:10vw; 


		}
	.largura_Card h3{
		font-size: 30px;
	}
	#img_desc img{
		width: 100%;
		height:600px;
		border: 1px solid black;
		border-radius: 12px;
	}	
	#preco_servico_desc{
		font-size: 30px;
		color: red;
	}
	p{ margin:0;
		float: left;
		position: relative;

	  }
	</style>

<html>
<head>
	<title></title>
</head>
<body>
	
		<?php 
				require_once('../dependencias/navBar.php'); 
				 require_once('../objetos/obj_pesquisa_simples.php');
			
		?>
		



	

		<section class="conteiner-fluid" style="margin-top:5%;">

				
							<div class="card largura_Card">
							  <div class="card-header">
							    <h1>Descrição Serviço</h1>
							  </div>


							  <?php	
									  if (isset($_GET['id_servico'])){

										$id_servico = $_GET['id_servico'];
										$CRUDPesquisa_simples = new CRUDPesquisa_simples(Conexao::getInstance());
										$resultadoDetalhada = $CRUDPesquisa_simples->selecionarDetalhada($id_servico);
										


			?>	







							  <div class="card-body">
							    <div class="row">
							    	
							    		<div class="col-sm-6">
							    			<div id="img_desc"><img src="../dependencias/img/balanceamento.jpg"></div>

							    		</div>
							    		<div class="col-sm-6">
							    					


									    			


												    <div class="jumbotron">
														  <h1 class="display-4"><?php echo $resultadoDetalhada[0]->nome_servico;?></h1>
														  <div class="lead">CÓDIGO SERVIÇO:<?php echo $resultadoDetalhada[0]->id_servico ;?> </div><br>
														  <div id="preco_servico_desc">R$:<?php echo $resultadoDetalhada[0]->valor;?></div><br>
														  
																   <div>Mêcanica :<?php echo $resultadoDetalhada[0]->nome_oficina;?></div>
																 <div>Endereço : RUA <?php  echo $resultadoDetalhada[0]->rua_oficina . ', '. $resultadoDetalhada[0]->bairro_oficina . ','. $resultadoDetalhada[0]->cidade_oficina . ' - '. $resultadoDetalhada[0]->uf_oficina . '<br>CEP '. $resultadoDetalhada[0]->cep_oficina . ' N°'. $resultadoDetalhada[0]->numero_oficina . '<br> CELULAR/WHATSAPP: '. $resultadoDetalhada[0]->celular_oficina . '<br> TEL COMERCIAL:'. $resultadoDetalhada[0]->telefone_oficina ;?></div>
														  <br>
														  <div>
														  		<!--<form action="../objetos/obj_solicita_Servico.php" method="POST">
														  			<?php /*echo '<input type="hidden" name="id_servico_solicitado" value="'.$resultadoDetalhada[0]->id_oferece_servico.'">';
														  			$tipobutton = '';
														  			echo '<input type="hidden" name="fk_id_oficina" value="'.$resultadoDetalhada[0]->fk_id_oficina.'">';
														  			$tipobutton = '';	

														  			if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
																	        	$usuarioSistema = $_SESSION["user"];
																				echo '<input type="hidden" name="usuarioSistema" value="'. $usuarioSistema[0]->email.'">';



																	        	if ($usuarioSistema[0]->tp_usuario == 'O' ){
																					$mensagem ='PERFIL NÃO PERMITIDO PARA AGENDAR SERVIÇOS';
																						$tipobutton = 'hidden';
																				}
																				if ($usuarioSistema[0]->tp_usuario == 'C' ){
																	   				
																					$tipobutton = '';
																	        	}	
																	        }
																	        else{
																	        	$mensagem ='É NECESSARIO FAZER O LOGIN  PARA AGENDAR O SERVIÇO!';
																	        	$tipobutton = 'hidden';		
																	        	
																	        }	

														  			echo'<button class="btn btn-primary btn-lg" type="submit" '.$tipobutton.' role="button">Agendar Serviço</button>';

*/
														  			?>
														  	   </form>-->
														  </div>	
													</div>	
													<?php

                                                       if (!empty($mensagem))
                                                           echo "<div class='alert alert-danger' role='alert'>
                                                              $mensagem
                                                          </div>";

                                                          

                                                    ?>

							    		</div>


							    </div>
							  </div>
							  <?php	}?>
							</div>

		

	
</body>
</html>