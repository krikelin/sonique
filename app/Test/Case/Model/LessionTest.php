<?php
App::uses('Lession', 'Model');

/**
 * Lession Test Case
 *
 */
class LessionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lession',
		'app.course',
		'app.course_type',
		'app.course_class',
		'app.user',
		'app.artist',
		'app.record',
		'app.song',
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company',
		'app.submission',
		'app.submission_status',
		'app.record_state',
		'app.qi',
		'app.course_class_user',
		'app.doctrine_version',
		'app.doctrine',
		'app.hall',
		'app.tutor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lession = ClassRegistry::init('Lession');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lession);

		parent::tearDown();
	}

}
