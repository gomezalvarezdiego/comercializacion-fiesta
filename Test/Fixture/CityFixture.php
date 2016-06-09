<?php
/**
 * CityFixture
 *
 */
class CityFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'city';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_city' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'city_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_city', 'unique' => 1)
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
			'id_city' => 1,
			'city_name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
