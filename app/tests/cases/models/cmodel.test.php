<?php
/* Cmodel Test cases generated on: 2011-07-12 00:18:13 : 1310447893*/
App::import('Model', 'Cmodel');

class CmodelTestCase extends CakeTestCase {
	var $fixtures = array('app.cmodel', 'app.make', 'app.car', 'app.motor');

	function startTest() {
		$this->Cmodel =& ClassRegistry::init('Cmodel');
	}

	function endTest() {
		unset($this->Cmodel);
		ClassRegistry::flush();
	}

}
