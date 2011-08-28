<?php
#Testing Git Integration

class AccountsController extends AppController {
	var $helpers = array ('Html','Form');
	var $name = 'Accounts';

	function index() {
		$this->set('accounts', $this->Account->find('all'));
	}
	
	function sso() {
		$this->set('accounts', $this->Account->find('all'));
	}

    function view($id = null) {
        $this->Account->id = $id;
        $this->set('account', $this->Account->read());
    }
}
?>