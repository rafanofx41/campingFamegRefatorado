<?php
class Campings extends Controller{
	protected function Index(){
		$viewmodel = new CampingsModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'campings');
		}
		$viewmodel = new CampingsModel();
		$this->returnView($viewmodel->add(), true);
	}
}