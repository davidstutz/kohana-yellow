<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Yellow - auth and acl logging implementation.
 * 
 * @package		Yellow
 * @author		David Stutz
 * @copyright	(c) 2012 David Stutz
 * @license		http://opensource.org/licenses/bsd-3-clause
 */
class Kohana_Yellow
{
	
	/**
	 * @var	string	type
	 */
	protected $_type;
	
	public function __construct($type)
	{
		$this->_type = $type;
	}
	
	/**
	 * Static logging.
	 * 
	 * @param	string	type
	 * @param	array 	values
	 */
	public function log($values)
	{
		$log = ORM::factory($this->_type);
		$log->user = Red::instance()->get_user();
		$log->values($values)
			->create();
	}
}