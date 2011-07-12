<?php
/* Motor Fixture generated on: 2011-07-12 00:18:26 : 1310447906 */
class MotorFixture extends CakeTestFixture {
	var $name = 'Motor';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'cmodel_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'cmodel_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
