<?php
App::uses('Song', 'Model');

/**
 * Song Test Case
 *
 */
class SongTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.song',
		'app.artist',
		'app.user',
		'app.record',
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company',
		'app.submission'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Song = ClassRegistry::init('Song');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Song);

		parent::tearDown();
	}

}
