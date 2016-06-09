<?php
/**
 * DateFixture
 *
 */
class DateFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'date';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'date_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'inscription_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_date', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id_date' => 1,
			'date_name' => 'Lorem ipsum dolor sit amet',
			'category_id' => 1,
			'inscription_id' => 'Lorem ipsum dolor sit amet'
		),
	);

}
