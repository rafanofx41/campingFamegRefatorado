<?php
abstract class Controller{ // é uma classe abstrata porque os outros controllers vao instanciar ela
	protected $request; // as classes que vao instanciar tem acesso
	protected $action;

	public function __construct($action, $request){
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		return $this->{$this->action}();
	}

	protected function returnView($viewmodel, $fullview){
		$view = 'views/'. get_class($this). '/' . $this->action. '.php'; // retorna a view
		if($fullview){
			require('views/main.php'); // retorna o html que quero em todas as paginas
		} else {
			require($view); // uma view individual
		}
	}
}