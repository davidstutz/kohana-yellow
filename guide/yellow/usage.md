# Usage

## Configuration of Green

To use this module with Green make the following configuration for Green:

	// Take true for the rule types you want to log.
	'logger' => array(
		'model' => TRUE,
		'controller' => FALSE,
		'action' => FALSE,
	),
	
The Green module will automatically log the specific actions. Note: Currently only the logging of model access is supported by Green.

## Manual logging

	Yellow::log($type, $values);
	
Where $type describes the type of action to log:

* model
* controller
* action

Adn values are the values for the log model. See [provided Models](models).
