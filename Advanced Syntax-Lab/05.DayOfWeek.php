<?php
$day=fgets(STDIN);

echo FindNumber($day);

function FindNumber($day){
    switch ($day){
        case "Monday":echo "1";break;
        case "Tuesday":echo "2";break;
        case "Wednesday":echo "3";break;
        case "Thursday":echo "4";break;
        case "Friday":echo "5";break;
        case "Saturday":echo "6";break;
        case "Sunday":echo "7";break;
    }
}