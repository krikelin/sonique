<?php
App::uses('Course', 'Model');

/**
 * Course Test Case
 *
 */
class CourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.course_class_user',
		'app.doctrine_version',
		'app.doctrine',
		'app.lession',
		'app.hall'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Course = ClassRegistry::init('Course');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Course);

		parent::tearDown();
	}

}
