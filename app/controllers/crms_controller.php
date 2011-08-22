<?php
class CrmsController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Crms';

	function index() {
		$this->set('crms', $this->Crm->find('all'));
	}
}
?>