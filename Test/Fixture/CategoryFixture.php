<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'category';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_category' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'category_initiation' => array('type' => 'date', 'null' => false, 'default' => null),
		'category_end' => array('type' => 'date', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id_category', 'unique' => 1)
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
			'id_category' => 1,
			'category_name' => 'Lorem ipsum dolor sit amet',
			'category_initiation' => '2014-06-06',
			'category_end' => '2014-06-06'
		),
	);

}
