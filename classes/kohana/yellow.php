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
	
	const MODEL = 'log_model';
	const CONTROLLER = 'log_controller';
	const ACTION = 'log_action';
	
	/**
	 * Static logging.
	 * 
	 * @param	string	type
	 * @param	array 	values
	 */
	public static function log($type, $values)
	{
		$log = ORM::factory($type);
		$log->user = Red::instance()->get_user();
		$log->values($values)
			->create();
	}
}