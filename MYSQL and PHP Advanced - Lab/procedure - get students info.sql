CREATE DEFINER=`root`@`localhost` PROCEDURE `getStudentsInfo`()
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN
SELECT CONCAT(first_name,' ',last_name) as name,student_number,course_name FROM STUDENTS
inner join subscriptions using(student_id)
inner join courses using(course_id);
END