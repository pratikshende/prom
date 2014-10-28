<?php

class CheckController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function c() {
		//ToDo :: if this request, was for a static, file, then it would have taken about only
		// ~1-2 ms, and since right now, its going through, PHP stack, it takes, atleast 60ms!
		$this->layout = 'ajax';
		//ToDo :: we can do various kinds of loggings here!
		$this->set("response","");
	}
}