<?php
App::uses('DoctrineVersion', 'Model');

/**
 * DoctrineVersion Test Case
 *
 */
class DoctrineVersionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.doctrine_version',
		'app.doctrine',
		'app.user',
		'app.artist',
		'app.record',
		'app.song',
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
		$this->DoctrineVersion = ClassRegistry::init('DoctrineVersion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DoctrineVersion);

		parent::tearDown();
	}

}
