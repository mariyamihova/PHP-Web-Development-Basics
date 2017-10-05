<?php


class GoldenEditionBook extends Book
{
    public function getPrice(){
        return parent::getPrice()*1.3;
    }

}