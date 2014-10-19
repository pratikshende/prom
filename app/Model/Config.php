<?php

class Config extends AppModel {

	public function getByName($config_name,$col = 'data') {
		$data = $this->find("all",array(
					'conditions' => array('Config.name' => $config_name),
					'fields' => array($col)
		));

		return (count($data) > 0) ? $data[0]["Config"][$col] : null;
	}

	public function updateByName($config_name,$data) {
		$config = $this->find("first",array(
					'conditions'	=> array('Config.name' => $config_name),
					'fields'		=> array("id","name","data")
		));

		if(!$config) return;

		$this->id = $config["Config"]["id"];
		$config["Config"]["data"] = $data;
		return $this->save($config) ? true : false;
	}

	public function searchByName($config_name) {
		$data = $this->find("all",array(
					'conditions' => array('Config.name LIKE ' => "$config_name%"),
					'fields' => array('name','data')
		));

		if (count($data) <= 0) return null;

		$final = array();
		foreach($data as $row) {
			array_push($final, $row["Config"]);
		}

		return $final;
	}

	public function getAll($config_name = null) {

		$data = array();
		if(is_null($config_name)) {
			$data = $this->find("all");
		} else {
			$data = $this->find("all",array(
						'conditions' => array('Config.name LIKE ' => "$config_name%"),
						'fields' => array('name','data')
			));
		}

		$result = array();
		foreach ($data as $row) {
			$row = $row["Config"];
			$result[$row["name"]] = $row["data"];
		}

		return $result;
	}

}