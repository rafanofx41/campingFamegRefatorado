
<?php
    require_once 'config.php';
    $campingId = 2;
    $user_name = "chorao";
    $user_id = 2;
    $comentario = "novo teste";
    $PDO = db_connect();
    $sql_usuario = "INSERT INTO comentarios (user_name, comentario, camping_id, user_id) VALUES('.$user_name.', '.$comentario.', .$campingId., .$user_id.)";
    $result_usuarios = $PDO->prepare($sql_usuario);
    $result_usuarios->bindParam(':user_name', $id, PDO::PARAM_STR);
    $result_usuarios->bindParam(':comentario', $id, PDO::PARAM_STR);
    $result_usuarios->bindParam(':camping_id', $id, PDO::PARAM_INT);
    $result_usuarios->bindParam(':user_id', $id, PDO::PARAM_INT);
    $result_usuarios->execute();
    header('Location: campings');
?>


<a href="excluirUsuario.php?camping_id=<?php echo $item['id']; ?>&user_name=<?php echo $item['user_name']; ?>&user_id=<?php echo $item['user_id']; ?>">