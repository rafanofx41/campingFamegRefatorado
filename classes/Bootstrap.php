
<?php
class Bootstrap{
	private $controller;
	private $action;
	private $request;

	//funcao que recebe o request do controller
	public function __construct($request){
		$this->request = $request;
		//Caso não tenha um controller especificado na URL é redirecionado para a pagina HOME
		if($this->request['controller'] == ""){
			$this->controller = 'home';
		} else {
			$this->controller = $this->request['controller'];
		}
		//aqui recebe o request do action
		if($this->request['action'] == ""){
			$this->action = 'index';
		} else {
			$this->action = $this->request['action'];//aqui é setado o action que vem na url
		}
	}

	public function createController(){
		// Ve se é classe
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			// Aqui verifica se tem o controller e a ação que vai ser executada
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				} else {
					// Ação nao existet
					echo '<h1>Metodo não existe</h1>';
					return;
				}
			} else {
				// Controller nao existe
				echo '<h1>Controller nao existe</h1>';
				return;
			}
		} else {
			// Classe controller nao existir
			echo '<h1>Classe controlle nao existet</h1>';
			return;
		}
	}
}