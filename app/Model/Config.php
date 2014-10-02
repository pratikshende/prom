<?php 

class Config extends AppModel {
	public $primaryKey = '_id';
	public $name = 'Config';
	var $useDbConfig = 'mongo';

	var $mongoSchema = array(
		'name'				=> array('type' => 'string', 'default' => null),
		'data'				=> array('type' => 'string', 'default' => null),
	);

	public function getByName($config_name,$col = 'data') {
		$data = $this->find("first",array(
					'conditions' => array('name' => $config_name),
					'fields' => array($col)
		));

		$data["Config"]["id"] = $data["Config"]["_id"];
		unset($data["Config"]["_id"]);

		return (count($data) > 0) ? $data["Config"][$col] : null;
	}
}