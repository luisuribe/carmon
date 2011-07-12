<?php
/* Revision Fixture generated on: 2011-07-12 00:19:30 : 1310447970 */
class RevisionFixture extends CakeTestFixture {
	var $name = 'Revision';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'car_id' => array('type' => 'integer', 'null' => false),
		'revision_date' => array('type' => 'date', 'null' => false),
		'description' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'next_revision' => array('type' => 'date', 'null' => false),
		'price' => array('type' => 'float', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'car_id' => 1,
			'revision_date' => '2011-07-12',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'next_revision' => '2011-07-12',
			'price' => 1
		),
	);
}
