<?php
App::uses('AppModel', 'Model');
/**
 * Airplay Model
 *
 * @property Station $Station
 * @property Record $Record
 * @property Submission $Submission
 */
class Airplay extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'station_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'record_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'time' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Station' => array(
			'className' => 'Station',
			'foreignKey' => 'station_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Record' => array(
			'className' => 'Record',
			'foreignKey' => 'record_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Submission' => array(
			'className' => 'Submission',
			'foreignKey' => 'submission_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
