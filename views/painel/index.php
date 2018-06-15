
<?php
	require_once 'config.php';
	
	// abre a conexão
	$PDO = db_connect();
	
	// SQL para selecionar os registros
	$sql_msg = "SELECT * FROM users ORDER BY id ASC";
	
	// seleciona os registros
	$resultado_msg = $PDO->prepare($sql_msg);
	$resultado_msg->execute();
	
?>

<html>
<head>
	<title>Camping Fameg!</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/jquery-ui.structure.css">
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/jquery-ui.theme.css">
  <script type="text/javascript" src="/assets/js/jquery-3.3.1"></script>
  <script type="text/javascript" src="/assets/js/jquery-ui"></script>
  <script type="text/javascript" src="/assets/js/campings.js"></script>
</head>
    <body>
    <div class="container">
        <button class="accordion">Listar Usuarios</button>
            <div class="panel">        
                <h2>Lista de Usuarios</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?php while ($msg_contatos = $resultado_msg->fetch(PDO::FETCH_ASSOC)): ?>
                            
                        <?php echo $msg_contatos['name']; ?>
                        <a href="excluirUsuario.php?id=<?php echo $msg_contatos['id']; ?>">
                        <?php if($msg_contatos['name'] == "admin"){continue;} ?>
                        <button type="button deletar" class="btn btn-danger btn-sm deletar">Deletar</button>
                        </a>
                        <br>
                        <br>
                        <?php endwhile; ?>               
                    </li>
                </ul>
            </div>

            <button class="accordion">Listar Campings cadastrados</button>
            <div class="panel">        
                <h2>Lista de Campings</h2>
                <ul class="list-group">
                    <li class="list-group-item">
                        <?php foreach($viewmodel as $item) : ?>
                            <?php echo $item['titulo']; ?> 
                            <a href="excluir.php?id=<?php echo $item['id']; ?>">
                            <button type="button deletar" class="btn btn-danger btn-sm deletar">Deletar</button>
                            </a>
                            <hr>
                            <br>                    
                        <?php endforeach; ?>                    
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>