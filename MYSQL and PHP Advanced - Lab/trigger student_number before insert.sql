CREATE DEFINER=`root`@`localhost` TRIGGER `students_before_insert` BEFORE INSERT ON `students` FOR EACH ROW BEGIN
IF LENGTH(NEW.student_number)<5 THEN
signal sqlstate '45000'
   set message_text = 'Student number must be at least 5 characters';
END IF;
END