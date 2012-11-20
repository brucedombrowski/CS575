<?php
/**
 * TranscriptionFixture
 *
 */
class TranscriptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'transcription_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'dictation_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dictation_assignment_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qa_assignment_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'transcription_id', 'unique' => 1),
			'transcription_id' => array('column' => 'transcription_id', 'unique' => 1)
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
			'transcription_id' => 1,
			'dictation_id' => 1,
			'dictation_assignment_id' => 1,
			'qa_assignment_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-20 05:18:06',
			'modified' => '2012-11-20 05:18:06'
		),
	);

}
