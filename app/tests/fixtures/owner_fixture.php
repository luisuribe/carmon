<?php
/* Owner Fixture generated on: 2011-07-12 00:19:11 : 1310447951 */
class OwnerFixture extends CakeTestFixture {
	var $name = 'Owner';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'car_id' => array('type' => 'integer', 'null' => false),
		'firstname' => array('type' => 'string', 'null' => false, 'length' => 100),
		'lastname' => array('type' => 'string', 'null' => false, 'length' => 100),
		'phone' => array('type' => 'string', 'null' => false, 'length' => 100),
		'cellphone' => array('type' => 'string', 'null' => false, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'car_id' => 1,
			'firstname' => 'Lorem ipsum dolor sit amet',
			'lastname' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'cellphone' => 'Lorem ipsum dolor sit amet'
		),
	);
}
