<?php
/**
 * SwingFixture
 *
 */
class SwingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'encounter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'attacker' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'swingtype' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'attacktype' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'damagetype' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'victim' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'damage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'damagestring' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'critical' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'special' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dmgadjust' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dmgreduced' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'overheal' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'encounter_id' => 'Lorem ipsum dolor sit amet',
			'stime' => 1405824562,
			'attacker' => 'Lorem ipsum dolor sit amet',
			'swingtype' => 1,
			'attacktype' => 'Lorem ipsum dolor sit amet',
			'damagetype' => 'Lorem ipsum dolor sit amet',
			'victim' => 'Lorem ipsum dolor sit amet',
			'damage' => 1,
			'damagestring' => 'Lorem ipsum dolor sit amet',
			'critical' => 'Lorem ipsum dolor sit ame',
			'special' => 'Lorem ipsum dolor sit amet',
			'dmgadjust' => 'Lorem ',
			'dmgreduced' => 1,
			'overheal' => 1
		),
	);

}
