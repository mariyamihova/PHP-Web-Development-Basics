



CREATE DEFINER=`root`@`localhost` TRIGGER `totalsales` BEFORE INSERT ON `sales` FOR EACH ROW set @sum=@sum+new.amount;

SET @sum=0;
