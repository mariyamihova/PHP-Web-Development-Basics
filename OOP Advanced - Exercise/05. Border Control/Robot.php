<?php


class Robot implements IdInterface
{
private $model;
private $id;

    /**
     * Robot constructor.
     * @param $model
     * @param $id
     */
    public function __construct($model, $id)
    {
        $this->model = $model;
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }


}