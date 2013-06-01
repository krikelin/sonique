<?php
App::uses('Airplay', 'Model');

/**
 * Airplay Test Case
 *
 */
class AirplayTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company',
		'app.submission',
		'app.user',
		'app.artist',
		'app.record',
		'app.song'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Airplay = ClassRegistry::init('Airplay');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Airplay);

		parent::tearDown();
	}

}
