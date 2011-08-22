<?php
class Group extends AppModel {
	var $name = 'Group';

    var $actsAs = array('Acl' => array('type' => 'requester'));

        function parentNode() {
            return null;
        }
    

    var $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
