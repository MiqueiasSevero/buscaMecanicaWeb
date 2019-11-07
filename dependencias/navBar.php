



	<?php
			require_once('../dependencias/dependencias.php');
			require_once('../objetos/obj_login.php');
			
			session_start();
			 if (isset($_GET["sair"])) {
       			 session_destroy();
       			 header("location:../paginas/home.php");
       			
    			}


	  ?>
<!DOCTYPE html>
<html>


<head>
  <title></title>






</script>





</head>
<body>


		<form  method="get" action="lista_Servicos.php"> 
	
			<nav class="navbar navbar-dark bg-primary fixed-top" id="nav-bar-geral">
  					<!-- Navbar content -->

						<form style="margin:1px;">
								  <div class="form-row" >
									    <div class="col-2" >
									    	<div class="row">
									    			<div class="col-6">	
									    				<img src="../dependencias/img/logobusca.PNG" style="width: 150px;">	
									    			</div>		
											    	  <div class="col-6">
											    	  			
											     	  			<a href="../paginas/home.php"><button class="btn btn-success" type="button" id="button-addon2" >HOME</button></a>
											     	  </div>	

											     	 

									     	</div>	  
									    </div>
									    <div class="col-6" style="width: 100vw">
											    	 

														   	 	

																<div class="input-group mb-3">		 
																		
																		  <input type="text" name="pesquisar" class="form-control" placeholder="Que serviço você procura?" aria-label="Recipient's username" aria-describedby="button-addon2" style="text-align: justify;">
																		  <!--<div class="input-group-append">-->
																		    <button class="btn btn-success" type="submit" >PESQUISAR</button>
																		   <!--</div>-->
																		
																</div> 		  
																  
														
									    </div>
									    <div class="col-4">
									    	     


									     <?php
											     	  	 			require_once('../objetos/obj_navBar.php');
											     	  	 ?>
												 

                                                      

							















									    	
									     		 
									     		 
									   
								  </div>

								
						</form>


					</div>
				</div>	

			</nav>
		</form>	
</body>
</html>