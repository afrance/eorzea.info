<?php
App::uses('Encounter', 'Model');

/**
 * Encounter Test Case
 *
 */
class EncounterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.encounter',
		'app.attack_type',
		'app.combatant',
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
		$this->Encounter = ClassRegistry::init('Encounter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Encounter);

		parent::tearDown();
	}

}
