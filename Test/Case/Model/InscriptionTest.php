<?php
App::uses('Inscription', 'Model');

/**
 * Inscription Test Case
 *
 */
class InscriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inscription',
		'app.date',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inscription = ClassRegistry::init('Inscription');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inscription);

		parent::tearDown();
	}

}
