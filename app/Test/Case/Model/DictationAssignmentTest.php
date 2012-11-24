<?php
App::uses('DictationAssignment', 'Model');

/**
 * DictationAssignment Test Case
 *
 */
class DictationAssignmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dictation_assignment',
		'app.dictation',
		'app.client',
		'app.user',
		'app.role',
		'app.transcription',
		'app.dictation_assignment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DictationAssignment = ClassRegistry::init('DictationAssignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DictationAssignment);

		parent::tearDown();
	}

}
