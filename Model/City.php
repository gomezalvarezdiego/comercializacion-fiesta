<?php
App::uses('AppModel', 'Model');
/**
 * City Model
 *
 */
class City extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'city';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id_city';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id_city';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_city' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'city_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'city_state' => array(
					'notEmpty' => array(
							'rule' => array('notEmpty'),
							//'message' => 'Your custom message here',
							//'allowEmpty' => false,
							//'required' => false,
							//'last' => false, // Stop validation after this rule
							//'on' => 'create', // Limit validation to 'create' or 'update' operations
					),
			),
	);
}
