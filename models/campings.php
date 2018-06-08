<?php
class CampingsModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM campings ORDER BY create_date DESC');
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($_FILES["imagem"])){
			$arquivo = $_FILES["imagem"];
			$pasta_dir = "imagens/";//diretorio dos arquivos
			//se não existir a pasta ele cria uma
			if(!file_exists($pasta_dir)){
			mkdir($pasta_dir);
			}
			$arquivo_nome = $pasta_dir . $arquivo["name"];

			if($post['submit']){
				if($post['titulo'] == '' || $post['body'] == ''){
					Messages::setMsg('Please Fill In All Fields', 'error');
					return;
				}
				// Insert into MySQL
				$this->query('INSERT INTO campings (titulo, body, imagem, user_id) VALUES(:titulo, :body, :imagem, :user_id)');
				$this->bind(':titulo', $post['titulo']);
				$this->bind(':body', $post['body']);
				$this->bind(':imagem', $arquivo['name']);
				$this->bind(':user_id', 1);
				$this->execute();
				// Verify
				move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
				if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'campings');
				}
			}
		}		

		
		return;
	}
}