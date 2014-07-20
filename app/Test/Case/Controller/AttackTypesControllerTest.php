<?php
App::uses('AttackTypesController', 'Controller');

/**
 * AttackTypesController Test Case
 *
 */
class AttackTypesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.attack_type',
		'app.encounter',
		'app.damage_type',
		'app.swing',
		'app.combatant',
		'app.combatants_encounter'
	);

}
