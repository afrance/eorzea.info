<?php
App::uses('AppModel', 'Model');
/**
 * Combatant Model
 *
 * @property Encounter $Encounter
 */
class Combatant extends AppModel {


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
		)
	);
}
