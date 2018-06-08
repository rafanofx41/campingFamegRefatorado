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
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CampingFameg</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Inicio</a></li>
            <li><a href="<?php echo ROOT_URL; ?>campings">Campings</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Bem Vindo <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/logout">Sair</a></li>
          <?php else : ?>
            <li><a href="<?php echo ROOT_URL; ?>users/login">Entrar</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Registrar</a></li>
          <?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>