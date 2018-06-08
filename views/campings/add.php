<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Adicione um camping!</h3>
  </div>
  <div class="panel-body">
    <form method="post"  enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Titulo do camping</label>
    		<input type="text" name="titulo" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Body</label>
    		<textarea name="body" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    		<label>Imagem</label>
    		<input type="file" name="imagem" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>campings">Cancel</a>
    </form>
  </div>
</div>