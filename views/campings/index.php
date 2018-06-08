<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>campings/add">Adicione um camping</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="well">
			<h3><?php echo $item['titulo']; ?></h3>
			<small><?php echo $item['create_date']; ?></small>
			<br>
			<?php echo "<img src='/imagens/".$item['imagem']."'";?>
			<hr />
			<p><?php echo $item['body']; ?></p>
			<br />
			<button class="accordion">Descrição</button>
			<div class="panel">
				<p>Lorem ipsum...</p>
				<h1>kkkwkwkw</h1>
			</div>
			<button class="accordion">Comentarios</button>
			<div class="panel ">
				<p>Lorem ipsum...</p>
				<h1>kkkwkwkw</h1>
			</div>
		</div>	
	<?php endforeach; ?>
</div>