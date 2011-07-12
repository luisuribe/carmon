<?php
/* Car Fixture generated on: 2011-07-12 00:18:45 : 1310447925 */
class CarFixture extends CakeTestFixture {
	var $name = 'Car';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'make_id' => array('type' => 'integer', 'null' => false),
		'cmodel_id' => array('type' => 'integer', 'null' => false),
		'motor_id' => array('type' => 'integer', 'null' => false),
		'vim_number' => array('type' => 'string', 'null' => false, 'length' => 100),
		'name' => array('type' => 'string', 'null' => false, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'make_id' => 1,
			'cmodel_id' => 1,
			'motor_id' => 1,
			'vim_number' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
