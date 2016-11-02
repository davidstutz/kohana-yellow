<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * For logging controllers.
 *
 * @package     Yellow
 * @author      David Stutz
 * @copyright   (c) 2013 - 2016 David Stutz
 * @license     http://opensource.org/licenses/bsd-3-clause
 */
class Model_Yellow_Log_Controller extends ORM {

    /**
     * @var    string    table
     */
    protected $_table = 'log_controllers';

    /**
     * @var    array     created column
     */
    protected $_created_column = array(
        'column' => 'created',
        'format' => 'U',
    );

    /**
     * @var    array     belongs to a user
     */
    protected $_belongs_to = array(
        'user' => array(
            'foreign_key' => 'user_id',
            'model' => 'user',
        ),
    );
}
