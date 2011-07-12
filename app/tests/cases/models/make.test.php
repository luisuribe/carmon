<?php
/* Make Test cases generated on: 2011-07-12 00:17:57 : 1310447877*/
App::import('Model', 'Make');

class MakeTestCase extends CakeTestCase {
	var $fixtures = array('app.make', 'app.cmodel', 'app.motor', 'app.car');

	function startTest() {
		$this->Make =& ClassRegistry::init('Make');
	}

	function endTest() {
		unset($this->Make);
		ClassRegistry::flush();
	}

}
