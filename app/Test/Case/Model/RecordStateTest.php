<?php
App::uses('RecordState', 'Model');

/**
 * RecordState Test Case
 *
 */
class RecordStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.record_state',
		'app.record',
		'app.song',
		'app.artist',
		'app.user',
		'app.course_class',
		'app.course',
		'app.course_type',
		'app.course_class_user',
		'app.mark',
		'app.lession',
		'app.hall',
		'app.doctrine_version',
		'app.doctrine',
		'app.submission',
		'app.station',
		'app.station_type',
		'app.company',
		'app.airplay',
		'app.submission_status',
		'app.song_state'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RecordState = ClassRegistry::init('RecordState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecordState);

		parent::tearDown();
	}

}
