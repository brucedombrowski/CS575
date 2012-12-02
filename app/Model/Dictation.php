<?php
App::uses('AppModel', 'Model');
/**
 * Dictation Model
 *
 * @property Client $Client
 * @property DictationAssignment $DictationAssignment
 * @property Transcription $Transcription
 */
class Dictation extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'dictation_id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
  
/**
 * Recursion level
 *
 * @var string
 */
	public $recursive = 2; 

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
		'client_id' => array(
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
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'DictationAssignment' => array(
			'className' => 'DictationAssignment',
			'foreignKey' => 'dictation_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Transcription' => array(
			'className' => 'Transcription',
			'foreignKey' => 'dictation_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

public function getManagersDictations($manager_id) {

  $this->recursive = 1;
  return $this->find('all', 
  array('conditions' => array('Client.manager_id' => $manager_id),
        'order' => array('Dictation.created ASC')
    ));
  }
  
public function getManagersUnassignedDictations($manager_id) {

  $dictations = $this->getManagersDictations($manager_id);
  $unassignedDictations = array();
  
  foreach ($dictations as $dictation) {
    if ($dictation['DictationAssignment'] == NULL ) {
      $unassignedDictations[] = $dictation;  
    }
  }
  
  return $unassignedDictations; 
  
}

public function getManagersAssignedDictations($manager_id) {

  $dictations = $this->getManagersDictations($manager_id);
  $assignedDictations = array();
  
  foreach ($dictations as $dictation) {
    if ($dictation['DictationAssignment'] != NULL ) {
      $assignedDictations[] = $dictation;  
    }
  }
  
  return $assignedDictations; 
  
}  




}
