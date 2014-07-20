<?php
App::uses('AppModel', 'Model');
/**
 * DamageType Model
 *
 * @property Encounter $Encounter
 * @property Combatant $Combatant
 */
class DamageType extends AppModel {


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
		'Combatant' => array(
			'className' => 'Combatant',
			'foreignKey' => 'combatant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
