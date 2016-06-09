<?php
App::uses('AppModel', 'Model');
/**
 * Inscription Model
 *
 * @property Date $Date
 */
class Inscription extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'nit';
	var $actsAs = array(
			'MeioUpload.MeioUpload' => array('attached3','attached2','attached1')
	);
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nit';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nit' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del Nit no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),	
		),
		'company_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo de la razón social no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del nombre del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_document' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del documento del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_city' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo de la Ciudad del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del teléfono del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_cellphone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del celular del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'representative_mail' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del correo del representante no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'Por favor ingrese correctamente el correo electrónico ej:nombre@xxxxxxx.xxx',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'trade_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del nombre comercial no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_name' => array(
				'notEmpty' => array(
						'rule' => array('notEmpty'),
						'message' => 'El Campo del nombre del contacto no puede estar vacío',
						//'allowEmpty' => false,
						//'required' => false,
						//'last' => false, // Stop validation after this rule
						//'on' => 'create', // Limit validation to 'create' or 'update' operations
				),
		),
		'contact_document' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo del documento del contacto no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_city' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo de la ciudad del contacto no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contact_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo teléfono del contacto no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cellphone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo celular del contacto no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'contanct_mail' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El Campo correo del contacto no puede estar vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'Por favor ingrese correctamente el correo electrónico ej:nombre@xxxxxxx.xxx',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attached1' => array(
			'notEmpty' => array(
				//'rule' => array('notEmpty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attached2' => array(
			'notEmpty' => array(
				//'rule' => array('notEmpty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attached3' => array(
			'notEmpty' => array(
				//'rule' => array('notEmpty'),
				'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Date' => array(
			'className' => 'Date',
			'foreignKey' => 'inscription_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
