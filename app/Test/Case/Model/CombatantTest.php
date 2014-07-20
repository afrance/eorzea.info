<?php
App::uses('Combatant', 'Model');

/**
 * Combatant Test Case
 *
 */
class CombatantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.combatant',
		'app.encounter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Combatant = ClassRegistry::init('Combatant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Combatant);

		parent::tearDown();
	}

}
