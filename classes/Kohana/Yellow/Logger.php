<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Interface for a logger.
 *
 * @package     Yellow
 * @author      David Stutz
 * @copyright   (c) 2013 David Stutz
 * @license     http://opensource.org/licenses/bsd-3-clause
 */
interface Kohana_Yellow_Logger {

    /**
     * Logging.
     *
     * @param   array   values
     */
    public function log($values);

}
