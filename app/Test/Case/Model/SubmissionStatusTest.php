<?php
App::uses('SubmissionStatus', 'Model');

/**
 * SubmissionStatus Test Case
 *
 */
class SubmissionStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submission_status',
		'app.submission',
		'app.user',
		'app.artist',
		'app.record',
		'app.song',
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubmissionStatus = ClassRegistry::init('SubmissionStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubmissionStatus);

		parent::tearDown();
	}

}
