<?php
App::uses('ImportResult', 'Model');

/**
 * ImportResult Test Case
 *
 */
class ImportResultTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.import_result',
		'app.encounter',
		'app.zone',
		'app.attack_type',
		'app.combatant',
		'app.combatants_encounter',
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
		$this->ImportResult = ClassRegistry::init('ImportResult');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImportResult);

		parent::tearDown();
	}

}
