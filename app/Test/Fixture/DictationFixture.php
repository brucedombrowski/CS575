<?php
/**
 * DictationFixture
 *
 */
class DictationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dictation_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'location' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'ascii_bin', 'charset' => 'ascii'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'dictation_id', 'unique' => 1)
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
			'dictation_id' => 1,
			'client_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-11-28 19:01:29',
			'modified' => '2012-11-28 19:01:29'
		),
	);

}
