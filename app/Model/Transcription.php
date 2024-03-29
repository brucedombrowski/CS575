<?php
App::uses('AppModel', 'Model');
/**
 * Transcription Model
 *
 * @property Dictation $Dictation
 * @property DictationAssignment $DictationAssignment
 */
class Transcription extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'transcription_id';

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
		'dictation_assignment_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
		'location' => array(
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
		'DictationAssignment' => array(
			'className' => 'DictationAssignment',
			'foreignKey' => 'dictation_assignment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
