<?php
if (isset($_GET['numA']) && !empty(trim($_GET['numA'])) &&
    isset($_GET['numB']) && !empty(trim($_GET['numB'])) &&
    isset($_GET['operation']) && !empty(trim($_GET['operation']))
){
    if (is_numeric(trim($_GET['numA'])) && is_numeric(trim($_GET['numB']))) {
        $operation = trim($_GET['operation']);
        $numA = intval(trim($_GET['numA']));
        $numB = intval(trim($_GET['numB']));
        $result = 0;
        if($numA>0&&$numA<=100&&$numB>0&&$numB<=100) {
            switch ($operation) {
                case '+':
                    $result = $numA + $numB;
                    break;
                case '-':
                    $result = $numA - $numB;
                    break;
                case '*':
                    $result = $numA * $numB;
                    break;
                case '/':
                    $result = $numA / $numB;
                    break;
                case 'avg':
                    $result = ($numA+$numB)/2;
                    break;
                case 'n!':
                    $res=1;
                    for($i=1;$i<=$numA;$i++){
                        $res*=$i;
                    }
            $result=$res;
                    break;
            }
        }else{
            if($operation=="/"&&$numB==0){
                $result="Division by zero";
            }else{
                $result="Out of range";
            }

        }

    } else{
        $result="Operand not numeric";
    }
}
include 'calculator_front.php';