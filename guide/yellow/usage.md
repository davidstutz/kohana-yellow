# Usage

## Configuration of Green

To use this module with Green make the following configuration for Green:

	// Take true for the rule types you want to log.
	'logger' => array(
		'model' => new Yellow('log_model'),
		'controller' => new Yellow('log_controller'),
	),
	
The Green module will automatically log the specific actions.

## Manual logging

	// For example add a model log.
	$logger = new Yellow('log_model');
	
	$logger->log(array(
		'model' => $model_name,
		'model_id' => $model->id,
		'data' => $model->as_array(),
		'method' => $method,
	)

Adn values are the values for the log model. See [provided Models](models).
