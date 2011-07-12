<?php
/* User Fixture generated on: 2011-07-12 00:17:18 : 1310447838 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => true, 'length' => 50),
		'password' => array('type' => 'string', 'null' => true, 'length' => 40),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);
}
