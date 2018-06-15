<?php
    class ComentarioModel extends Model{
        public function comentar(){
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if($post['submit']){
				if($post['comentar'] == ''){
					Messages::setMsg('Escreva algum comentario', 'error');
					return;
                }

                header('Location: '.ROOT_URL.'/users/register');

                $this->query('INSERT INTO comentarios (user_name, comentario, camping_id, user_id) VALUES(:user_name, :comentario, :camping_id, :user_id )');
                $this->bind(':user_name', $_SESSION['user_data']['name']);
                $this->bind(':camping_id', $_SESSION['user_data']['name']);
                $this->bind(':comentario', $post['comentario']);
                $this->bind(':user_id', $_SESSION['user_data']['id']);
                $this->execute();
                
                if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'home');
				}
            }
            return;
            
        }
    }

?>    