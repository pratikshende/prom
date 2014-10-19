<?php 

class HomeController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'ajax';
	}

	public function index() {
		$this->layout = 'after_auth_default';
	}
}