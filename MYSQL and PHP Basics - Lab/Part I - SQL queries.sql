
CREATE DATABASE phpcourse;

ALTER DATABASE `phpcourse` COLLATE 'utf8_general_ci';

CREATE TABLE `students` (
	`student_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`student_number` INT NOT NULL,
	`phone` VARCHAR(50) NULL DEFAULT NULL,
	`address` VARCHAR(255) NULL DEFAULT NULL,
	`create_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`last_changed` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	`status` VARCHAR(50) NOT NULL,
	`motivation_letter` TINYTEXT NOT NULL,
	`notes` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`student_id`),
	UNIQUE INDEX `student_number` (`student_number`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;


INSERT INTO `phpcourse`.`students` (`student_id`, `first_name`, `last_name`, `student_number`, `phone`, `address`) VALUES ('1', 'Marry', 'Ivanova', '234765', '0987667721', 'Sofia 1000');

UPDATE `phpcourse`.`students` SET `status`='active', `motivation_letter`='avdbehfyurugjrkrodgaredkajdhryudmdlaldkfuruf', `notes`='call her to verify the address' WHERE  `student_id`=1;

INSERT INTO `phpcourse`.`students` (`student_id`, `first_name`, `last_name`, `student_number`, `phone`, `address`) VALUES ('', 'Gosho', 'Petrov', '234766', '0987667721', 'Sofia');

UPDATE `phpcourse`.`students` SET `status`='active', `motivation_letter`='avdbehfyurugjrkrodgaredkajdhryudmdlaldkfuruf', `notes`='call student to verify the name' WHERE  `student_id`=2;

INSERT INTO `phpcourse`.`students` (`first_name`, `last_name`, `student_number`, `create_date`, `last_changed`, `status`) VALUES ('Naiden', 'Ganchev', '234 767', '2017-10-17 10:59:01', '2017-10-17 10:59:02', 'active');

INSERT INTO `phpcourse`.`students` (`first_name`, `last_name`, `student_number`, `create_date`, `last_changed`) VALUES ('Veselin', 'Ganchev', '234 768', '2017-10-17 11:00:08', '2017-10-17 11:00:09');

INSERT INTO `phpcourse`.`students` (`first_name`, `last_name`, `student_number`, `create_date`, `last_changed`) VALUES ('Veselin', 'Ganchev', '234 768', '2017-10-17 11:00:08', '2017-10-17 11:00:09');

INSERT INTO `phpcourse`.`students` (`first_name`, `last_name`, `student_number`, `create_date`, `last_changed`) VALUES ('Veselin', 'Ganchev', '234768', '2017-10-17 11:00:08', '2017-10-17 11:00:09');

UPDATE `phpcourse`.`students` SET `student_number`='234767' WHERE  `student_id`=3;

INSERT INTO `phpcourse`.`students` (`first_name`, `last_name`, `student_number`, `create_date`, `last_changed`) VALUES ('Atanas', 'Ganchev', '234769', '2017-10-17 11:01:48', '2017-10-17 11:01:51');

UPDATE students SET phone=0987002531 WHERE student_id=2;

UPDATE students SET address='Sofia 1618' WHERE phone IS NULL;


DELETE FROM students WHERE STUDENT_ID=1;

DELETE FROM students WHERE ADDRESS='Sofia 1618';

TRUNCATE TABLE students;
