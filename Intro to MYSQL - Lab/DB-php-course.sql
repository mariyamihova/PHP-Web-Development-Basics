
CREATE DATABASE `phpcourse` 


CREATE TABLE IF NOT EXISTS `Students` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`First name` VARCHAR(50) NOT NULL DEFAULT '0',
	`Last name` VARCHAR(50) NOT NULL DEFAULT '0',
	`Number` INT(20) NOT NULL DEFAULT '0',
	`Phone number` VARCHAR(50) NULL DEFAULT NULL,
	`Status` VARCHAR(50) NOT NULL,
	`Date of record` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`Last changed on` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`ID`),
	UNIQUE INDEX `Number` (`Number`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

INSERT INTO `phpcourse`.`students` (`ID`, `First name`, `Last name`, `Number`, `Phone number`, `Status`) VALUES ('1', 'Atanas', 'Ganchev', '190119', '0896788899', 'active');

INSERT INTO `phpcourse`.`students` (`First name`, `Last name`, `Number`, `Status`) VALUES ('Petko', 'Todorov', '190 020', 'active');

UPDATE `phpcourse`.`students` SET `Phone number`='0987334455' WHERE  `ID`=2;

DROP TABLE `students`;

DROP DATABASE `phpcourse`;
