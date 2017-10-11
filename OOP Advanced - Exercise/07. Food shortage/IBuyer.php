<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.10.2017 г.
 * Time: 18:50
 */
interface IBuyer
{
    public function buyFood();
    public function getFood();
    public function setFood(int $foodQuantity);
}