<?php
/**
 * AirplayFixture
 *
 */
class AirplayFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'station_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'record_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'submission_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'station_id' => 1,
			'record_id' => 1,
			'time' => '2013-06-01 00:17:47',
			'submission_id' => 1
		),
	);

}
