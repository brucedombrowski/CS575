<?php
/**
 * DictationAssignmentFixture
 *
 */
class DictationAssignmentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dictation_assignment_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dictation_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'account_manager_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'transcriptionist_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'valid' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'dictation_assignment_id' => 1,
			'dictation_id' => 1,
			'account_manager_id' => 1,
			'transcriptionist_id' => 1,
			'valid' => 1,
			'created' => '2012-11-23 22:11:41',
			'modified' => '2012-11-23 22:11:41'
		),
	);

}
