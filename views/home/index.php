<div class="text-center">
	<h1>Bem vindo ao CampingFameg</h1>
	<p class="lead">Sabe de algum lugar legal? Compartilhe com nossa comunidade!</p>
	<a class="btn btn-primary text-center" href="<?php echo ROOT_PATH;?>campings">Compartilhe agora!</a>
	
</div>

<br>

<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['titulo']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Pagina inicial</a>
		</div>
	<?php endforeach; ?>
</div>