# SQL Scheme

The following tables will log the specific type of access:

	-- -----------------------------------------------------
	-- Table `log_models`
	-- -----------------------------------------------------
	CREATE  TABLE `log_models` (
	  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
	  `model` VARCHAR(255) NOT NULL ,
	  `model_id` INT(11) UNSIGNED NOT NULL ,
	  `user_id` INT(11) UNSIGNED NOT NULL ,
	  `method` VARCHAR(255) NOT NULL ,
	  `data` TEXT NOT NULL ,
	  `time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
	  PRIMARY KEY (`id`) ,
	  INDEX `fk_log_models_user_id` (`user_id` ASC) ,
	  CONSTRAINT `fk_log_models_user_id`
	    FOREIGN KEY (`user_id` )
	    REFERENCES `users` (`id` )
	    ON DELETE NO ACTION
	    ON UPDATE NO ACTION)
	DEFAULT CHARACTER SET = utf8;
	
	
	-- -----------------------------------------------------
	-- Table `log_controllers`
	-- -----------------------------------------------------
	CREATE  TABLE `log_controllers` (
	  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
	  `controller` VARCHAR(255) NOT NULL ,
	  `user_id` INT(11) UNSIGNED NOT NULL ,
	  `time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
	  PRIMARY KEY (`id`) ,
	  INDEX `fk_log_controllers_user_id` (`user_id` ASC) ,
	  CONSTRAINT `fk_log_controllers_user_id`
	    FOREIGN KEY (`user_id` )
	    REFERENCES `users` (`id` )
	    ON DELETE NO ACTION
	    ON UPDATE NO ACTION)
	DEFAULT CHARACTER SET = utf8;
	
	
	-- -----------------------------------------------------
	-- Table `log_actions`
	-- -----------------------------------------------------
	CREATE  TABLE `log_actions` (
	  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
	  `action` VARCHAR(255) NOT NULL ,
	  `user_id` INT(11) UNSIGNED NOT NULL ,
	  `time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
	  PRIMARY KEY (`id`) ,
	  INDEX `fk_log_actions_user_id` (`user_id` ASC) ,
	  CONSTRAINT `fk_log_actions_user_id`
	    FOREIGN KEY (`user_id` )
	    REFERENCES `users` (`id` )
	    ON DELETE NO ACTION
	    ON UPDATE NO ACTION)
	DEFAULT CHARACTER SET = utf8;
