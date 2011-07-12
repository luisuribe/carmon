<?php
/* Revision Test cases generated on: 2011-07-12 00:19:31 : 1310447971*/
App::import('Model', 'Revision');

class RevisionTestCase extends CakeTestCase {
	var $fixtures = array('app.revision', 'app.car', 'app.make', 'app.cmodel', 'app.motor', 'app.owner');

	function startTest() {
		$this->Revision =& ClassRegistry::init('Revision');
	}

	function endTest() {
		unset($this->Revision);
		ClassRegistry::flush();
	}

}
