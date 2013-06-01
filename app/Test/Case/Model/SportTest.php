<?php
App::uses('Sport', 'Model');

/**
 * Sport Test Case
 *
 */
class SportTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sport',
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
		'app.course_class',
		'app.course',
		'app.course_class_user',
		'app.doctrine_version',
		'app.doctrine'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sport = ClassRegistry::init('Sport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sport);

		parent::tearDown();
	}

}
