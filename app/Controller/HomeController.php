<?php 

class HomeController extends AppController {
	public function beforeFilter() {
		parent::beforeFilter();
		// $this->layout = 'ajax';
	}

	private function getModuleInformation($name) {
		$modules = array();
		$modules["sci"]["js"] = "sci.js";
		$modules["sci"]["css"] = "sci.css";

		$modules["hrm"]["js"] = "hrm.js";
		$modules["hrm"]["css"] = "hrm.css";

		$modules["report"]["js"] = "report.js";
		$modules["report"]["css"] = "report.css";
	}

	private function getActivatedModules() {
		return array('sci'=> 1,'hrm'=>1,'report'=>1);
	}

	public function index() {
		$this->layout = 'after_auth_default';

		// $this->set("js",array('sci.js','global.js','status.js','init.js'));
		$this->set("css",array('sci.css','status.css','hrm.css','report.css'));
		$js_file_array = array('status.js','global.js','sci.js','hrm.js','report.js');
		array_push($js_file_array, 'init.js');
		$this->set("js",$js_file_array);
		$this->set("activated_modules",$this->getActivatedModules());
	}	
}