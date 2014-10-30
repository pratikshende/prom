<?php 
	
	class LoginController extends AppController {
		public $helpers = array('Html','Form');
		public $uses = array('User','Login','Token','Config');

		public function beforeFilter() {
			parent::beforeFilter();
			$this->layout = 'before_auth_default';
		}

		public function index(){
			if($this->request->is('POST')) {
				if($this->Auth->login()) {
					$user = $this->Auth->user();
					$user_id = $user["id"];
					$time = time();
		
					$this->Login->insertLogin($this->request->clientIp(),1);

					if (!$this->Token->getValidTokenByUserID($user_id)) {
						$newToken = $this->makeNewToken($user_id,time());
						if(!$this->Token->insertNewTokenByUserId($user_id,$newToken,$time)) {
							//ToDo :: if we fail to add a new Token into the database,
							//then break the whole thing. don't let user get in.
							throw new ForbiddenException("Forbidden access. sorry :-( ");
						}
					}
				
					//ToDo :: is this the best way to do it?
					$types = $this->Config->getByName("user_types");
		
					$user_type = json_decode($types,true);
					print_r($user_type);
					if($user["type"] == $user_type["sc"]) {
						$this->redirect("/schome");
					} else if($user["type"] == $user_type["employee"]){
						$this->redirect("/ehome");
					} else if($user["type"] == $user_type["admin"]) {
						$this->redirect("/home");
					}
				} else {
					$this->Login->insertLogin($this->request->clientIp(),0);
					/*ToDo :: Customize this! See what's inside setFlash*/
					/*ToDo :: we should store somekind of log, for wrong password, attempts
							  in some database
					*/
					$this->Session->setFlash("Invalid login. Please try again !");
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
			/* ToDo :: Take user history somewhere, for logging and debugging and security purposes */
			$user = $this->Auth->user();
			$user_id = $user["id"];

			$time = time();
			if ($this->Token->getValidTokenByUserID($user_id)) {
			if($this->Token->invalidateTokenByUserId($user_id,$time)) {
				} else {
					//ToDo :: is this right to that here?
					throw new ForbiddenException("Forbidden access. sorry :-( ");
				}
			}
			$this->redirect($this->Auth->logout());
		}
	}
?>