<?php
App::uses('AppModel', 'Model');
/**
 * Encounter Model
 *
 * @property AttackType $AttackType
 * @property Combatant $Combatant
 * @property DamageType $DamageType
 * @property Swing $Swing
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
		'Combatant' => array(
			'className' => 'Combatant',
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

}
