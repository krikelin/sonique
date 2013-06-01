<?php
App::uses('SubmissionStatusesController', 'Controller');

/**
 * SubmissionStatusesController Test Case
 *
 */
class SubmissionStatusesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submission_status',
		'app.submission',
		'app.user',
		'app.artist',
		'app.record',
		'app.song',
		'app.airplay',
		'app.station',
		'app.station_type',
		'app.company'
	);

}
