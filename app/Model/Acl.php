<?php

class Acl extends AppModel {
	public function fetch($controller, $action,$type) {
		$data = $this->find("all",array(
					'conditions' => array('Acl.controller' => $controller,'Acl.action' => $action,'Acl.type' => $type),
					'fields' => array('id','permission')
		));

		$ret = array();

		if(count($data)) {
			$row = $data[0]['Acl'];
			$ret = split(",", $row["permission"]);
		}

		return $ret;
	}
}

?>