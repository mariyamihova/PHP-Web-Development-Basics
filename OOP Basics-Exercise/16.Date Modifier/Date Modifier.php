<?php
require_once "DateModifier.php";

$first=trim(fgets(STDIN));
$second=trim(fgets(STDIN));

echo DateModifier::getDiff($first,$second);