<?php
App::uses('CourseClass', 'Model');

/**
 * CourseClass Test Case
 *
 */
class CourseClassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.course_class',
		'app.course',
		'app.course_type',
		'app.course_class_user',
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
		'app.doctrine_version',
		'app.doctrine',
		'app.mark',
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
		$this->CourseClass = ClassRegistry::init('CourseClass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseClass);

		parent::tearDown();
	}

}
