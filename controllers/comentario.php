<?php
class Comentario extends Controller{
	protected function comentar(){
		$viewmodel = new ComentarioModel();
		$this->returnView($viewmodel->comentar(), true);
    }
}    