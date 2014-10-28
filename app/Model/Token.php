<?php

class Token extends AppModel {
	public function getValidTokenByUserID($user_id) {
		$data = $this->find("all",array(
					'conditions' => array('Token.user_id' => $user_id,'Token.is_valid' => 1),
					'fields' => array('id','user_id','token','is_valid')
		));
	
		if(!count($data)) {
			return null;
		} else {
			return $data[0]["Token"];
		}
	}

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
}