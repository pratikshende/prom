<?php 

class HomeController extends AppController {

	public $uses = array('Token');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	private $module_files = array();

	private function getInstalledModules() {
		//ToDo :: will come from database
		//ToDo :: even these names of the components should not be hard-coded. even these names, should
		//come automatically

		$modules = array('sci'=>1,'hrm'=>1,'report'=>1);


		$activated_modules = array();
		foreach($modules as $key => $value) {
			if($value == 1) {
				$activated_modules[$key] = $value;
			}
		}

		return $activated_modules;
	}

	public function index() {
		$this->layout = 'after_auth_default';
		$this->module_files = Configure::read("module_files");

		$user = $this->Auth->user();
		$token = $this->Token->getValidTokenByUserID($user["id"]);
		$csrf_token = $token["token"];

		$modules = json_decode($this->Config->getByName("activated_modules"),true);
		$activated_modules = $this->getInstalledModules();

		$js_list = array();
		$css_list = array();
		$print_css = array();
		foreach ($activated_modules as $module_name => $value) {
			if($value == 1) {
					$js_list = array_merge($js_list, $this->module_files[$module_name]["js"]);
					$css_list = array_merge($css_list, $this->module_files[$module_name]["css"]);
			}
		}

		array_unshift($js_list, "global.js");
		array_unshift($js_list, "status.js");
		array_push($js_list, "init.js");

		array_unshift($css_list, "status.css");
		$this->set("js",$js_list);
		$this->set("css",$css_list);
		$this->set("activated_modules",$activated_modules);
		$this->set("token",$csrf_token);
	}	
}