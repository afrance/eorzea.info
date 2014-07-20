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
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'encounter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'stime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'attacker_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'swingtype' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'attacktype' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'damagetype' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'victim_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'damage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'damagestring' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'critical' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'special' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dmgadjust' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dmgreduced' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'overheal' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'id' => '53cb8f96-3420-4dee-bfb8-0cc90a000269',
			'encounter_id' => 'Lorem ipsum dolor sit amet',
			'stime' => 1405849494,
			'attacker_id' => 'Lorem ipsum dolor sit amet',
			'swingtype' => 1,
			'attacktype' => 'Lorem ipsum dolor sit amet',
			'damagetype' => 'Lorem ipsum dolor sit amet',
			'victim_id' => 'Lorem ipsum dolor sit amet',
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
