

CREATE PROCEDURE `getSales`()
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT ''
BEGIN
SELECT SUM(amount) as total FROM sales;
END;

CREATE FUNCTION concat_name(
first_name VARCHAR(255),
last_name VARCHAR(255)
) RETURNS VARCHAR(512)
    BEGIN
        RETURN CONCAT(first_name,' ',last_name);
    END;


CREATE VIEW deal AS
SELECT datetime, amount, make, model, year, first_name, last_name
FROM sales, usedcars, customers
WHERE sales.car_id=usedcars.car_id
AND sales.customer_id=sales.sale_id;

ALTER ALGORITHM = UNDEFINED DEFINER=`root`@`localhost` VIEW `deal` AS SELECT datetime, amount, make, model, year, first_name, last_name
FROM sales
inner join usedcars using(car_id)
inner join customers using(customer_id); ;
