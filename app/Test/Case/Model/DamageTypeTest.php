<?php
App::uses('DamageType', 'Model');

/**
 * DamageType Test Case
 *
 */
class DamageTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.damage_type',
		'app.encounter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DamageType = ClassRegistry::init('DamageType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DamageType);

		parent::tearDown();
	}

}
