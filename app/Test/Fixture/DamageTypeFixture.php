<?php
/**
 * DamageTypeFixture
 *
 */
class DamageTypeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'encounter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'combatant' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'grouping' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 92, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'starttime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'endtime' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'damage' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'encdps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'chardps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'dps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'average' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'median' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'minhit' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'maxhit' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hits' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'crithits' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'blocked' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'misses' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'swings' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'tohit' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'averagedelay' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'critperc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parrypct' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'blockpct' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'combatant' => 'Lorem ipsum dolor sit amet',
			'grouping' => 'Lorem ipsum dolor sit amet',
			'type' => 'Lorem ipsum dolor sit amet',
			'starttime' => 1405824550,
			'endtime' => 1405824550,
			'duration' => 1,
			'damage' => '',
			'encdps' => 1,
			'chardps' => 1,
			'dps' => 1,
			'average' => 1,
			'median' => 1,
			'minhit' => 1,
			'maxhit' => 1,
			'hits' => 1,
			'crithits' => 1,
			'blocked' => 1,
			'misses' => 1,
			'swings' => 1,
			'tohit' => 1,
			'averagedelay' => 1,
			'critperc' => 'Lorem ',
			'parrypct' => 'Lorem ',
			'blockpct' => 'Lorem ',
			'overheal' => 1
		),
	);

}
