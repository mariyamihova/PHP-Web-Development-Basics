<?php


class DateModifier
{
const DATE_FORMAT="Y m d";

public static function getDiff($dateA,$dateB){
    $firstDate=DateTime::createFromFormat(self::DATE_FORMAT,$dateA);
    $secDate=DateTime::createFromFormat(self::DATE_FORMAT,$dateB);
    return $firstDate->diff($secDate)->days;
}
}