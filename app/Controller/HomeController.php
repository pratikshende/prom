<?php 

class HomeController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->layout = 'after_auth_default';
		$this->set('main_script','sci.js');
		$this->set('main_css','sci.css');
	}
}