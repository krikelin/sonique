<?php
App::uses('CourseClassUser', 'Model');

/**
 * CourseClassUser Test Case
 *
 */
class CourseClassUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.course_class',
		'app.course',
		'app.mark'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseClassUser = ClassRegistry::init('CourseClassUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseClassUser);

		parent::tearDown();
	}

}
