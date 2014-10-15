<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

	public function beforeSave($options = array()) {
		if (!$this->id) {
			/* ToDo : Understand the implementations of the SimplePasswordHasher, and know how to extend them*/
			$passwordHasher = new SimplePasswordHasher();
			$this->data['User']['password'] = $passwordHasher->hash($this->data['User']['password']);
		}
		return true;
	}
}