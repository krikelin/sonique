<?php
App::uses('Record', 'Model');

/**
 * Record Test Case
 *
 */
class RecordTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.record',
		'app.song',
		'app.artist',
		'app.user',
		'app.submission',
		'app.station',
		'app.station_type',
		'app.company',
		'app.airplay'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Record = ClassRegistry::init('Record');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Record);

		parent::tearDown();
	}

}
