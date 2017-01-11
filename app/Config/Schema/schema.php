<?php
/**
 * This is Item Schema file
 *
 */

/*
 *
 * Using the Schema command line utility
 * cake schema create Item
 *
 */

class AppSchema extends CakeSchema {

	public $name = 'Items';

	public function before($event = array()) {

		return true;
	}

	public function after($event = array()) {
		return true;
	}

	public $items = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'theme' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
		'caption' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),
        'rank' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
        'trivia' => array('type' => 'text', 'null' => false, 'default' => null, 'length' => 1024),
		'filename' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50),		
        'image' => array('type' => 'binary', 'null' => true, 'default' => null),		
        'created' => array('type' => 'datetime', 'null' => true, 'default' => null, 'length' => 6),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

}
