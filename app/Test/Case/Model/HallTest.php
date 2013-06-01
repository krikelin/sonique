<?php
App::uses('Hall', 'Model');

/**
 * Hall Test Case
 *
 */
class HallTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hall',
		'app.lession',
		'app.course',
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
		$this->Hall = ClassRegistry::init('Hall');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hall);

		parent::tearDown();
	}

}
