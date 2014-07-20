<?php
App::uses('Swing', 'Model');

/**
 * Swing Test Case
 *
 */
class SwingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.swing',
		'app.encounter',
		'app.attack_type',
		'app.damage_type',
		'app.combatant',
		'app.combatants_encounter',
		'app.attacker',
		'app.victim'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Swing = ClassRegistry::init('Swing');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Swing);

		parent::tearDown();
	}

}
