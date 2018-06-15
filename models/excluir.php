
<?php
    require_once 'config.php';
    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    $PDO = db_connect();
    $sql_usuario = "DELETE from campings WHERE id='$id'";
    $result_usuarios = $PDO->prepare($sql_usuario);
    $result_usuarios->bindParam(':id', $id, PDO::PARAM_INT);
    $result_usuarios->execute();
    header('Location: painel');
?>