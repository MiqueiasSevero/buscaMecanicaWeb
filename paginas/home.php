
<!doctype html>
<html>

<head>
	<title></title>
	<meta charset="utf-8">
	
<?php 
     // require_once('../dependencias/dependencias.php');
     
  ?>
	<style type="text/css">
		
	</style>

<script type="text/javascript">
	
</script>

</head>
<body class ="contente" >
  <?php
    require_once('../dependencias/navPanelHome.php'); 
	 ?>
	<div class="row">

    <?php

     /*$caminhoPastaImg = '../dependencias/img/';
      $imgIcones = array('manutenção.png','gerador.png','compressor.png','oleo.png','carro.png', 'motor.png');
      //caminho das imagens rever esse código depois. 
*/
      ?>
      		<div class="col-2-md" style="width: 20vw"></div>
      		<div class="col-8-md"style="width: 60vw; padding:20px; ">	
		      		<div id="imagens" style="margin-left:30%; width: 60%;">	
		      		
							<!-- <div id="img01" >
									  <img src= "<?php /*echo $caminhoPastaImg . $imgIcones[0] ?>" >
									  <label>Alinhamento</label>
								  </div>
								  <div id="img02">
									  <img src= "<?php echo $caminhoPastaImg . $imgIcones[1] ?>">
									 <label>Balanciamento</label>
								</div>

								<div id="img03">
									  <img src="<?php echo $caminhoPastaImg . $imgIcones[2] ?>">
									<label>Pintura</label>
								</div>

								<div id="img04">
									  <img src="<?php echo $caminhoPastaImg . $imgIcones[3] ?>" >
									<label>Troca de Óleo</label>
								</div>

								<div id="img05">
									  <img src="<?php echo $caminhoPastaImg . $imgIcones[4] ?>">
									  <label>Martelo de ouro</label>
								</div>

								<div id="img06" >
									  <img src="<?php echo $caminhoPastaImg . $imgIcones[5] */?>" >
									  <label>Revisão Geral</label>
								</div>
						</div>-->
			</div>	
		  	<div class="col-2-md" style="width: 20vw"></div>
</div>

<div class="row" style="">
	<div class="col-2-md" style="width: 20vw"></div>
	<div class="col-8-md">
		<?php
			require_once('troca_de_oleo.php');

		?>	

	</div>
	<div class="col-2-md" style="width: 20vw"></div>
</div>









			



</content>
</body>
</html>