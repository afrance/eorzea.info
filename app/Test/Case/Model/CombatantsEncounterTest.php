<?php
App::uses('CombatantsEncounter', 'Model');

/**
 * CombatantsEncounter Test Case
 *
 */
class CombatantsEncounterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.combatants_encounter',
		'app.combatant',
		'app.original',
		'app.encounter',
		'app.attack_type',
		'app.damage_type',
		'app.swing'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CombatantsEncounter = ClassRegistry::init('CombatantsEncounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CombatantsEncounter);

		parent::tearDown();
	}

}
