<?php
	require_once 'config.php';
	
	// abre a conexão
	$PDO = db_connect();
	
	// SQL para selecionar os registros
	$sql_msg = "SELECT * FROM comentarios ORDER BY id ASC";
	
	// seleciona os registros
	$resultado_msg = $PDO->prepare($sql_msg);
	$resultado_msg->execute();
	
?>
<div>
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>campings/add">Adicione um camping</a>
	<br />
	<br>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
	<div class="well">
		<h3>
			<?php echo $item['titulo']; ?>
		</h3>
		<small>
			<?php echo "Postador por: ".$item['user_name']; ?>
		</small>
		<br>
		<?php echo "<img src='/imagens/".$item['imagem']."'";?>
		<hr />
		<br />
		<button class="accordion">Descrição</button>
		<div class="panel">
			<p>
				<?php echo $item['body']; ?>
			</p>
		</div>
		<button class="accordion">Comentarios</button>
		<div class="panel ">
			<br>
			<form action="inserirComentario.php" method="post" >
				<div class="form-group">
					<div class="form-group">
						<label for="comentario">Insira um comentário:</label>
						<textarea class="form-control" name="comentario" id="comentario" rows="3"></textarea>
					</div>
				</div>
				<a href="excluirUsuario.php?camping_id=<?php echo $item['id']; ?>&user_name=<?php echo $item['user_name']; ?>&user_id=<?php echo $item['user_id']; ?>">
                    <button type="submit" value ="comente" class="btn btn-primary">Inserir comentário</button>
				</a>	
			</form>
			<?php
			 ?>
			 <?php while ($msg_contatos = $resultado_msg->fetch(PDO::FETCH_ASSOC)): ?>

				<?php
					if($msg_contatos['camping_id'] == $item['id']){            
						echo $msg_contatos['comentario']; 
					}	
				?>	
				</a>
				<br>
				<br>
			<?php endwhile; ?> 

		</div>
	</div>
	<?php endforeach; ?>
</div>