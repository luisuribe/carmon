<?php
/* Cmodel Fixture generated on: 2011-07-12 00:18:12 : 1310447892 */
class CmodelFixture extends CakeTestFixture {
	var $name = 'Cmodel';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'make_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'make_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
