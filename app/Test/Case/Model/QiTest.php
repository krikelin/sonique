<?php
App::uses('Qi', 'Model');

/**
 * Qi Test Case
 *
 */
class QiTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.qi',
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
		'app.course_class',
		'app.course',
		'app.course_type',
		'app.course_class_user',
		'app.mark',
		'app.lession',
		'app.hall',
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
		$this->Qi = ClassRegistry::init('Qi');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Qi);

		parent::tearDown();
	}

}
