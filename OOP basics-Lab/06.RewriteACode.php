<?php
class Calculator{
    public $leftOperand;
    public $rightOperand;
    public $operator;

    function __construct($a,$b,$op)
    {
        $this->leftOperand=$a;
        $this->rightOperand=$b;
        $this->operator=$op;
    }

    function calculate(){
        $result=0;
        if($this->operator=="sum"){
            $result=$this->leftOperand+$this->rightOperand;
        }else if($this->operator=="div"){
            if($this->leftOperand!=0 && $this->rightOperand!=0){
                $result=$this->leftOperand/$this->rightOperand;
            }else{
                $result="division by zero is not possible";
            }
        }
        return $result;
    }
}
$calc1=new Calculator(2,0,"div");
$output=$calc1->calculate();
echo $output;