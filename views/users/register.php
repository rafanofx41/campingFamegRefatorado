<div class="panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Registrar Usuario</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Nome</label>
    		<input type="text" name="name" class="form-control" placeholder="Nome" />
    	</div>
    	<div class="form-group">
    		<label>Email</label>
    		<input type="email" name="email" class="form-control" placeholder="Email" />
    	</div>
    	<div class="form-group">
    		<label>Senha</label>
    		<input type="password" name="password" class="form-control" placeholder="Senha" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>