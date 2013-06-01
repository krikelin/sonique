<?php
/**
 * SongStateFixture
 *
 */
class SongStateFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'song_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'play_count' => array('type' => 'integer', 'null' => false, 'default' => null),
		'new_plays' => array('type' => 'integer', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
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
			'song_id' => 1,
			'play_count' => 1,
			'new_plays' => 1,
			'created' => '2013-06-01 21:43:48'
		),
	);

}
