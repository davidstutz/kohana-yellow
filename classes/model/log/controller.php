<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Default ACL user.
 * 
 * @package		Yellow
 * @author		David Stutz
 * @since		1.0.0
 * @copyright	(c) 2012 David Stutz
 */
class Model_Log_Controller extends Model_Yellow_Log_Controller
{

	/**
	 * @var	string	table
	 */
	protected $_table = 'log_controllers';
	
	/**
	 * @var	array 	belongs to user
	 */
	protected $_belongs_to = array(
		'user' => array(
			'foreign_key' => 'user_id',
			'model' => 'user',
		),
	);
}