<?php
class DavincisController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Davincis';

	function index() {
		$this->set('davincis', $this->Davinci->find('all'));
	}
}
?>