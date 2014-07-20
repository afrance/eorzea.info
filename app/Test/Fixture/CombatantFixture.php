<?php
/**
 * CombatantFixture
 *
 */
class CombatantFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'encounter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ally' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'starttime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'endtime' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'damage' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'damageperc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kills' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'healed' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'healedperc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'critheals' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'heals' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'curedispels' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'powerdrain' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'powerreplenish' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'dps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'encdps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'enchps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'hits' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'crithits' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'blocked' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'misses' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'swings' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'healstaken' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'damagetaken' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'deaths' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'tohit' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'critdamperc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'crithealperc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'threatstr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 32, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'threatdelta' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'job' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parrypct' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'blockpct' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'inctohit' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 8, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'overhealpct' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'ally' => 'Lorem ipsum dolor sit ame',
			'name' => 'Lorem ipsum dolor sit amet',
			'starttime' => 1405824540,
			'endtime' => 1405824540,
			'duration' => 1,
			'damage' => '',
			'damageperc' => 'Lo',
			'kills' => 1,
			'healed' => '',
			'healedperc' => 'Lo',
			'critheals' => 1,
			'heals' => 1,
			'curedispels' => 1,
			'powerdrain' => '',
			'powerreplenish' => '',
			'dps' => 1,
			'encdps' => 1,
			'enchps' => 1,
			'hits' => 1,
			'crithits' => 1,
			'blocked' => 1,
			'misses' => 1,
			'swings' => 1,
			'healstaken' => '',
			'damagetaken' => '',
			'deaths' => 1,
			'tohit' => 1,
			'critdamperc' => 'Lorem ',
			'crithealperc' => 'Lorem ',
			'threatstr' => 'Lorem ipsum dolor sit amet',
			'threatdelta' => 1,
			'job' => 'Lorem ',
			'parrypct' => 'Lorem ',
			'blockpct' => 'Lorem ',
			'inctohit' => 'Lorem ',
			'overhealpct' => 'Lorem ips'
		),
	);

}
