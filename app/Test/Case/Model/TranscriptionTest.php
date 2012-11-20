<?php
App::uses('Transcription', 'Model');

/**
 * Transcription Test Case
 *
 */
class TranscriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.transcription',
		'app.dictation',
		'app.client',
		'app.user',
		'app.clients_user',
		'app.dictation_assignment',
		'app.qa_assignment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Transcription = ClassRegistry::init('Transcription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transcription);

		parent::tearDown();
	}

}
