<?php
class CreatingQuizesTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
            'create_table' => array(
                'quizzes' => array(
                    'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary'),
                    'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36),
                    'course_id' => array('type' => 'string', 'null' => false, 'default' => NULL,'length' => 36),
                    'is_active' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
                    'no_of_questions' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
                    'duration' => array('type' => 'integer', 'null' => false, 'default' => NULL),
                    'start_date' => array('type' => 'date_time', 'null' => false, 'default' => NULL),
                    'end_date' => array('type' => 'date_time', 'null' => false, 'default' => NULL),
                    'passing_criteria' => array('type' => 'integer', 'null' => false, 'default' => NULL),
                    'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
                    'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => 1),
                    ),
                )
            )
		),
		'down' => array(
            'drop_table' => array(
                'quizes'
            )
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
