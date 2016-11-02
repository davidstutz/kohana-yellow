<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Yellow - auth and acl logging implementation.
 *
 * @package     Yellow
 * @author      David Stutz
 * @copyright   (c) 2013 - 2016 David Stutz
 * @license     http://opensource.org/licenses/bsd-3-clause
 */
class Kohana_Yellow implements Kohana_Yellow_Logger {

    /**
     * Constants for all logging types.
     */
    const CONTROLLER = 'Log_Controller';
    const MODEL = 'Log_Model';

    /**
     * @var string  type
     */
    protected $_type;

    public function __construct($type) {
        $this->_type = $type;
    }

    /**
     * Logging.
     *
     * @param   array   values
     */
    public function log($values) {
        $log = ORM::factory($this->_type);
        $log->user = Red::instance()->get_user();
        $log->values($values)
            ->create();
    }

}
