# SQL Scheme

The following tables will log the specific type of access:

	-- -----------------------------------------------------
	-- Table `log_models`
	-- -----------------------------------------------------
	CREATE TABLE IF NOT EXISTS `pl_log_models` (
	  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
	  `model` VARCHAR(255) NOT NULL ,
	  `model_id` INT(11) UNSIGNED NOT NULL ,
	  `user_id` INT(11) UNSIGNED NOT NULL ,
	  `method` VARCHAR(255) NOT NULL ,
	  `data` TEXT NOT NULL ,
	  `created` INT(11) NOT NULL ,
	  PRIMARY KEY (`id`) ,
	  INDEX `fk_log_models_user_id` (`user_id` ASC) ,
	  CONSTRAINT `fk_log_models_user_id`
	    FOREIGN KEY (`user_id` )
	    REFERENCES `pl_users` (`id` )
	    ON DELETE NO ACTION
	    ON UPDATE NO ACTION)
	DEFAULT CHARACTER SET = utf8;
	
	
	-- -----------------------------------------------------
	-- Table `log_controllers`
	-- -----------------------------------------------------
	CREATE TABLE IF NOT EXISTS `pl_log_controllers` (
	  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
	  `controller` VARCHAR(255) NOT NULL ,
	  `uri` VARCHAR(255) NOT NULL , -- Assuming uri will not need more than 255 characters.
	  `user_id` INT(11) UNSIGNED NOT NULL ,
	  `created` INT(11) NOT NULL ,
	  PRIMARY KEY (`id`) ,
	  INDEX `fk_log_controllers_user_id` (`user_id` ASC) ,
	  CONSTRAINT `fk_log_controllers_user_id`
	    FOREIGN KEY (`user_id` )
	    REFERENCES `pl_users` (`id` )
	    ON DELETE NO ACTION
	    ON UPDATE NO ACTION)
	DEFAULT CHARACTER SET = utf8;
