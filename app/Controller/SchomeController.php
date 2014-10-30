<?php
	
class SchomeController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->Layout = "ajax";
	}
}


?>