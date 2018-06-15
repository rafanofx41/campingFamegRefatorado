<?php
class Painel extends Controller{
	protected function Index(){
		$viewmodel = new PainelModel();
		$this->returnView($viewmodel->Index(), false); // retorn a view home, o true é para o Full view
	}
}