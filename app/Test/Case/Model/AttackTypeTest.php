<?php
App::uses('AttackType', 'Model');

/**
 * AttackType Test Case
 *
 */
class AttackTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attack_type',
		'app.encounter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AttackType = ClassRegistry::init('AttackType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AttackType);

		parent::tearDown();
	}

}
