<?php
App::uses('EncountersController', 'Controller');

/**
 * EncountersController Test Case
 *
 */
class EncountersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.encounter',
		'app.attack_type',
		'app.combatant',
		'app.combatants_encounter',
		'app.damage_type',
		'app.swing'
	);

}
