<?php
/* Motor Test cases generated on: 2011-07-12 00:18:26 : 1310447906*/
App::import('Model', 'Motor');

class MotorTestCase extends CakeTestCase {
	var $fixtures = array('app.motor', 'app.cmodel', 'app.make', 'app.car');

	function startTest() {
		$this->Motor =& ClassRegistry::init('Motor');
	}

	function endTest() {
		unset($this->Motor);
		ClassRegistry::flush();
	}

}
