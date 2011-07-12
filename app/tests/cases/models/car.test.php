<?php
/* Car Test cases generated on: 2011-07-12 00:18:45 : 1310447925*/
App::import('Model', 'Car');

class CarTestCase extends CakeTestCase {
	var $fixtures = array('app.car', 'app.make', 'app.cmodel', 'app.motor', 'app.owner', 'app.revision');

	function startTest() {
		$this->Car =& ClassRegistry::init('Car');
	}

	function endTest() {
		unset($this->Car);
		ClassRegistry::flush();
	}

}
