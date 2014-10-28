<?php

class Login extends AppModel {

	public function getLoginCount($ip,$status,$interval) {
		$data = $this->find("count",array(
					'conditions' => array('Login.ip' => $ip,'Login.status' => $status,'Login.created_at >=' => time() - $interval)
		));

		return $data;
	}

	public function insertLogin($ip,$status) {
		$this->create();

		$data['Login']['ip']			= $ip;
		$data['Login']['status']		= $status;
		$data['Login']['created_at'] 	= time();

		return $this->save($data);
	}

	/*

	//ToDo :: should we take time from outside?
	public function invalidateTokenByUserId($user_id,$time) {
		if(!$user_id || !$time) {
			return null;
		}

		$validToken = $this->getValidTokenByUserID($user_id);
		if($validToken) {
			$this->id = $validToken["id"];
			$data["Token"] = $validToken;
			$data["Token"]["is_valid"] = 0;
			$data["Token"]["updated_at"] = $time;
			return $this->save($data);
		} else {
			return null;
		}
	}

	public function insertNewTokenByUserId ($user_id,$token,$time) {
		if(!$user_id || !$token || !$time) {
			return null;
		}

		$this->create();

		$data['Token']['user_id'] 		= $user_id;
		$data['Token']['token']	  		= $token;
		$data['Token']['created_at'] 	= $time;
		$data['Token']['updated_at'] 	= $time;
		$data['Token']['is_valid']		= 1;

		return $this->save($data);
	}

	*/
}