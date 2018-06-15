<html>
	<head>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
	</head>
		<div class="text-center">
			<h1>Bem vindo ao CampingFameg</h1>
			<p class="lead">Sabe de algum lugar legal? Compartilhe com nossa comunidade!</p>
			<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH;?>campings">Compartilhe agora!</a>
			
		</div>

		<br>
		<?php if(isset($_SESSION['is_logged_in'])) : ?>
		<?php endif; ?>
		<div class="container">
			<?php foreach($viewmodel as $item) : ?>
				<?php echo "<img src='/imagens/".$item['imagem']."' class='img-fluid' >";?>
			<?php endforeach; ?>
		</div>


</html>