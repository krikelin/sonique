<?php
App::uses('StationType', 'Model');

/**
 * StationType Test Case
 *
 */
class StationTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.station_type',
		'app.station',
		'app.company',
		'app.airplay',
		'app.record',
		'app.song',
		'app.artist',
		'app.user',
		'app.submission'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StationType = ClassRegistry::init('StationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StationType);

		parent::tearDown();
	}

}
