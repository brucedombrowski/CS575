<?php
App::uses('AppModel', 'Model');
/**
 * DictationAssignment Model
 *
 * @property Dictation $Dictation
 * @property AccountManager $AccountManager
 * @property Transcriptionist $Transcriptionist
 */
class DictationAssignment extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'dictation_assignment_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'dictation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'account_manager_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'transcriptionist_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valid' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Dictation' => array(
			'className' => 'Dictation',
			'foreignKey' => 'dictation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AccountManager' => array(
			'className' => 'User',
			'foreignKey' => 'account_manager_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transcriptionist' => array(
			'className' => 'User',
			'foreignKey' => 'transcriptionist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
