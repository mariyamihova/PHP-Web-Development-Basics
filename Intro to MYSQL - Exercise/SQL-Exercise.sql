MariaDB [(none)]> CREATE DATABASE 'phonebook';
MariaDB [phonebook]> CREATE TABLE `phones` (
    -> `person_id`  INT UNSIGNED NOT NULL,
    -> `first_name` VARCHAR(255) NOT NULL,
    -> `last_name`  VARCHAR(255) NOT NULL,
    -> `number`     INT UNSIGNED NOT NULL,
    -> PRIMARY KEY (`person_id`)
    -> )
    -> COLLATE='utf8_general_ci'
    -> ENGINE=InnoDB
    -> ;

MariaDB [phonebook]> INSERT INTO phones (person_id, first_name, last_name, number)
    -> VALUES(1, 'goce', 'delchev', 123)
    -> ;
MariaDB [phonebook]> INSERT INTO phones (first_name, last_name, number)
    -> VALUES('merry', 'jane', 123456789)
    -> ;
MariaDB [phonebook]> INSERT INTO phones (first_name, last_name, number)
    -> VALUES('ivan', 'ivanov', 13456789)
    -> ;
MariaDB [phonebook]> INSERT INTO phones (first_name, last_name, number)
    -> VALUES('ivan', 'penchev', 45)
    -> ;
MariaDB [phonebook]> INSERT INTO phones (first_name, last_name, number)
    -> VALUES('ivan', 'nanov', 34)
    -> ;

MariaDB [phonebook]> select last_name, number
    ->  FROM phones
    -> WHERE first_name='Ivan'
    -> ;
+-----------+---------+
| last_name | number  |
+-----------+---------+
| ivanov    | 3456789 |
| penchev   | 45      |
| nanov     | 34      |
+-----------+---------+
MariaDB [phonebook]> TRUNCATE `phones`;
    -> ;
MariaDB [phonebook]> DROP TABLE `phones`;;
    -> ;

MariaDB [phonebook]> DROP DATABASE `phonebook`;
MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| imdb               |
| information_schema |
| java_blog          |
| minions            |
| mysql              |
| people             |
| performance_schema |
| phpmyadmin         |
| school             |
| shoppinglist       |
| teistermask        |
| test               |
| todo_list_db       |
+--------------------+
