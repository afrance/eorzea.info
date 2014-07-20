<?php
/**
 * EncounterFixture
 *
 */
class EncounterFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'encounter_id' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'starttime' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'endtime' => array('type' => 'timestamp', 'null' => false, 'default' => '0000-00-00 00:00:00'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'damage' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false),
		'encdps' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => false),
		'zone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 64, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kills' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'deaths' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'encounter_id' => array('column' => 'encounter_id', 'unique' => 0)
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
			'title' => 'Lorem ipsum dolor sit amet',
			'starttime' => 1405824557,
			'endtime' => 1405824557,
			'duration' => 1,
			'damage' => '',
			'encdps' => 1,
			'zone' => 'Lorem ipsum dolor sit amet',
			'kills' => 1,
			'deaths' => 1
		),
	);

}
