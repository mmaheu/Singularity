<?php
class StoragesController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Storages';

	function index() {
		$this->set('storages', $this->Storage->find('all'));
	}

    function view($id = null) {
        $this->Storage->id = $id;
        $this->set('storage', $this->Storage->read());
    }
}
?>