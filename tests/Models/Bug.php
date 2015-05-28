<?php

use Phalcon\Mvc\Model\Relation;

class Bug extends AbstractModel {
	protected $id;
	protected $name;
	protected $robot_id;

	public function initialize() {
		$this->belongsTo('robot_id', 'Robot', 'id', [
			'alias'      => 'Robot',
			'foreignKey' => [
				'action' => Relation::ACTION_CASCADE
			]
		]);
	}
}
