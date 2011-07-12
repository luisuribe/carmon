<?php
/* Cmodels Test cases generated on: 2011-07-12 00:20:46 : 1310448046*/
App::import('Controller', 'Cmodels');

class TestCmodelsController extends CmodelsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CmodelsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.cmodel', 'app.make', 'app.car', 'app.motor', 'app.owner', 'app.revision');

	function startTest() {
		$this->Cmodels =& new TestCmodelsController();
		$this->Cmodels->constructClasses();
	}

	function endTest() {
		unset($this->Cmodels);
		ClassRegistry::flush();
	}

}
