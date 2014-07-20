<?php
App::uses('AppModel', 'Model');
/**
 * AttackType Model
 *
 * @property Encounter $Encounter
 * @property Attacker $Attacker
 * @property Victim $Victim
 */
class AttackType extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Encounter' => array(
			'className' => 'Encounter',
			'foreignKey' => 'encounter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Attacker' => array(
			'className' => 'Combatant',
			'foreignKey' => 'attacker_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Victim' => array(
			'className' => 'Combatant',
			'foreignKey' => 'victim_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
