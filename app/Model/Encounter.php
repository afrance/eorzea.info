<?php
App::uses('AppModel', 'Model');
/**
 * Encounter Model
 *
 * @property AttackType $AttackType
 * @property DamageType $DamageType
 * @property Swing $Swing
 * @property Combatant $Combatant
 */
class Encounter extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AttackType' => array(
			'className' => 'AttackType',
			'foreignKey' => 'encounter_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'DamageType' => array(
			'className' => 'DamageType',
			'foreignKey' => 'encounter_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Swing' => array(
			'className' => 'Swing',
			'foreignKey' => 'encounter_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Combatant' => array(
			'className' => 'Combatant',
			'joinTable' => 'combatants_encounters',
			'foreignKey' => 'encounter_id',
			'associationForeignKey' => 'combatant_id',
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
