
CREATE DATABASE `cars` /*!40100 COLLATE 'utf8_general_ci' */;

CREATE TABLE `usedcars` (
	`car_id` INT NOT NULL AUTO_INCREMENT,
	`make` VARCHAR(50) NOT NULL,
	`model` VARCHAR(50) NOT NULL,
	`year` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`car_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `sales` (
	`sale_id` INT NOT NULL AUTO_INCREMENT,
	`car_id` INT NOT NULL DEFAULT '0',
	`customer_id` INT NOT NULL DEFAULT '0',
	`datetime` DATETIME NULL DEFAULT NULL,
	`amount` INT NOT NULL DEFAULT '0',
	PRIMARY KEY (`sale_id`),
	CONSTRAINT `FK__usedcars` FOREIGN KEY (`car_id`) REFERENCES `usedcars` (`car_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `customers` (
	`customer_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50) NOT NULL DEFAULT '0',
	`last_name` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`customer_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

ALTER TABLE `sales`
	ADD CONSTRAINT `FK_sales_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);



