
CREATE DATABASE `phpcourse` /*!40100 COLLATE 'utf8_general_ci' */;


CREATE TABLE `students` (
	`student_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`student_number` VARCHAR(50) NOT NULL,
	PRIMARY KEY (`student_id`),
	UNIQUE INDEX `student_number` (`student_number`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `courses` (
	`course_id` INT NOT NULL AUTO_INCREMENT,
	`course_name` VARCHAR(50) NOT NULL DEFAULT '0',
	PRIMARY KEY (`course_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


CREATE TABLE `subscriptions` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`course_id` INT NOT NULL DEFAULT '0',
	`student_id` INT NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`),
	CONSTRAINT `FK__courses` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
	CONSTRAINT `FK__students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
