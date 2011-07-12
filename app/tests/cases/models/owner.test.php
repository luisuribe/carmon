<?php
/* Owner Test cases generated on: 2011-07-12 00:19:12 : 1310447952*/
App::import('Model', 'Owner');

class OwnerTestCase extends CakeTestCase {
	var $fixtures = array('app.owner', 'app.car', 'app.make', 'app.cmodel', 'app.motor', 'app.revision');

	function startTest() {
		$this->Owner =& ClassRegistry::init('Owner');
	}

	function endTest() {
		unset($this->Owner);
		ClassRegistry::flush();
	}

}
