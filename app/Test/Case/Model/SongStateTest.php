<?php
App::uses('SongState', 'Model');

/**
 * SongState Test Case
 *
 */
class SongStateTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.song_state',
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
		'app.record',
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company',
		'app.submission',
		'app.submission_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SongState = ClassRegistry::init('SongState');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SongState);

		parent::tearDown();
	}

}
