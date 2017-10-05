<?php


class Engine
{
private $model;
private $power;
private $displacement;
private $efficiency;

function __construct($model,$power,$displacement=null,$efficiency=null)
{
    $this->model=$model;
    $this->power=$power;
    $this->displacement=$displacement;
    $this->efficiency=$efficiency;
}

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

    /**
     * @return null
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @param null $displacement
     */
    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }

    /**
     * @return null
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }

    /**
     * @param null $efficiency
     */
    public function setEfficiency($efficiency)
    {
        $this->efficiency = $efficiency;
    }

}