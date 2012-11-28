<?php
App::uses('Dictation', 'Model');

/**
 * Dictation Test Case
 *
 */
class DictationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dictation',
		'app.client',
		'app.user',
		'app.role',
		'app.dictation_assignment',
		'app.transcription'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Dictation = ClassRegistry::init('Dictation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Dictation);

		parent::tearDown();
	}

}
