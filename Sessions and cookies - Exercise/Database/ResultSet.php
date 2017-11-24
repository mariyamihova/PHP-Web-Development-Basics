<?php


namespace Database;


class ResultSet implements ResultSetInterface
{

    /**
     * @var \PDOStatement
     */
    private $pdoStatement;


    public function __construct(\PDOStatement $pdoStatement)
    {
        $this->pdoStatement = $pdoStatement;
    }
    public function fetch(?string $className = null): \Generator
    {
        while($row=$this->pdoStatement->fetchObject($className)){
            yield $row;
        }
    }

}