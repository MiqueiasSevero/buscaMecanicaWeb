<?php
		require_once('obj_login.php');
		//require_once('../dependencias/dependencias.php');
		

		
   

		if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
        	$usuarioSistema = $_SESSION["user"];
		


        	if ($usuarioSistema[0]->tp_usuario == 'O' ){
				echo '<div class="dropdown">
										  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  '. $usuarioSistema[0]->email . '
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										   <a class="dropdown-item1" href="../paginas/areamecanico.php">Area do Mecânico</a>
										   <a class="dropdown-item3" href="'.$_SERVER['PHP_SELF'] .'?sair=true">SAIR</a>
										  </div>
										</div>';
        	}
				

        	/*if ($usuarioSistema[0]->tp_usuario == 'C' ){
   				echo '<div class="dropdown">
										  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										   '. $usuarioSistema[0]->email . '
										  </button>
										  		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										   		<a class="dropdown-item" href="../paginas/login_oficina.php" style="margin-left:0;">HISTORICO DE SERVICOS</a>
												 <a class="dropdown-item3" href="'.$_SERVER['PHP_SELF'] .'?sair=true">SAIR</a>
										  </div>
										</div>';

        	}*/	
        }else{
        	echo'<div class="dropdown">
										  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										   LOGIN - OFICINA
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										   <a class="dropdown-item1" href="../paginas/login_oficina.php">OFICINA</a>
										 
										
										  </div>
								</div>';
        }	
?>