<?php


class Car
{
private $model;
private $engine;
private $weight;
private $color;

function __construct($model,Engine $engine,$weight=null,$color=null)
{
    $this->model = $model;
    $this->engine = $engine;
    $this->weight = $weight;
    $this->color = $color;


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
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param null $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return null
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param null $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

}