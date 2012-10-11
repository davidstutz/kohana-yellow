<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * For logging models.
 * 
 * @package		Yellow
 * @author		David Stutz
 * @copyright	(c) 2012 David Stutz
 * @license		http://opensource.org/licenses/bsd-3-clause
 */
class Model_Yellow_Log_Model extends ORM
{

	/**
	 * @var	string	table
	 */
	protected $_table = 'log_models';
	
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