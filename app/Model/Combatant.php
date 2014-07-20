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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Encounter' => array(
			'className' => 'Encounter',
			'joinTable' => 'combatants_encounters',
			'foreignKey' => 'combatant_id',
			'associationForeignKey' => 'encounter_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
