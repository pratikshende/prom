<?php 
	
	class LoginController extends AppController {
		public $helpers = array('Html','Form');
		public $uses = array('User');

		public function beforeFilter() {
			parent::beforeFilter();
			// $this->layout = 'before_auth_default';
		}

		public function index(){
			if($this->request->is('POST')) {
				if($this->Auth->login()) {
					$this->redirect("/sci/home#home");
				} else {
					$this->Session->setFlash("Invalid Username or Password");
				}
			} else {
				//add an image captcha
			}
		}

		public function create() {
			if($this->request->is('POST')) {
				if($this->request->data['User']['type'] == 0) {
					throw new Exception("operation not allowed. This incident will be reported.", 1);
				}

				$this->User->create();
				$this->request->data['User']['created_at'] = time();
				$this->request->data['User']['updated_at'] = time();

				if($this->User->save($this->request->data)) {
					$this->Session->setFlash("created a new user");
				} else {
					$this->Session->setFlash("failed to create a new user");
				}
			}
		}

		public function logout() {
			$this->redirect($this->Auth->logout());
			$this->redirect("sci/home#home");
		}
	}
?>