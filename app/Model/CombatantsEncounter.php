<?php
App::uses('AppModel', 'Model');
/**
 * CombatantsEncounter Model
 *
 * @property Combatant $Combatant
 * @property Encounter $Encounter
 */
class CombatantsEncounter extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Combatant' => array(
			'className' => 'Combatant',
			'foreignKey' => 'combatant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Encounter' => array(
			'className' => 'Encounter',
			'foreignKey' => 'encounter_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
